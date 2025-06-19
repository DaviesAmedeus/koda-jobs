<?php

namespace App\Http\Controllers\Admin;

use App\Models\Job;
use App\Models\Tag;
use App\Models\User;
use App\Models\Employer;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function index()
    {

        $jobs = Job::with('employer')->orderBy('created_at', 'desc')->orderBy('id', 'desc')->paginate(9);
        return view('superadmin.jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {

        $companies = Employer::orderBy('company_name')->get(); //employers
        return view('superadmin.jobs.create', [
            'companies' => $companies
        ]);
    }

    public function store(Request $request)
    {

        $attributes = $request->validate([

            'title' => ['required', 'max:255'],
            'tags' => ['required'],
            'company' => ['required'],
            'positions' => ['required', 'numeric'],
            'type' => ['required'],
            'salary' => ['required', 'numeric'],
            'deadline' => ['required'],
            'location' => ['required', 'max:50'],
            'description' => ['required', 'max:255']
        ]);
        $attributes['employer_id'] = $attributes['company'];
        unset($attributes['company']);

        try {
            DB::beginTransaction();
            // Creating the job and negleting the tags
            $user = Employer::find($request->company)->user;
            $job = $user->employer->jobs()->create(Arr::except($attributes, 'tags'));

            if ($attributes['tags'] ?? false) {
                foreach (explode(',', $attributes['tags']) as $tag) {
                    $job->tag($tag);
                }
            }
            DB::commit();

            return redirect('/super-admin/jobs')->withInput()
                ->with('success', 'New job was created!');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Job creation error: ' . $th->getMessage() . ' ' . $th->getTraceAsString());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to create a JOB. Please try again.');
        }
    }

    public function edit(Job $job)
    {

        $companies = Employer::orderBy('company_name')->get(); //employers

        $tags = $job->tags;
        $tagNames = $tags->pluck('name')->toArray(); // Extract tag names
        $tagsInline = implode(', ', $tagNames);

        return view('superadmin.jobs.edit', [
            'companies' => $companies,
            'job' => $job,
            'tags' => $tagsInline
        ]);
    }


   public function update(Request $request, Job $job)
{
    $attributes = $request->validate([
        'title' => ['required', 'max:255'],
        'tags' => ['required'],
        'company' => ['required'],
        'positions' => ['required', 'numeric'],
        'type' => ['required'],
        'salary' => ['required', 'numeric'],
        'deadline' => ['required'],
        'location' => ['required', 'max:50'],
        'description' => ['required', 'max:255']
    ]);

    $attributes['employer_id'] = $attributes['company'];
    unset($attributes['company']);

    try {
        DB::beginTransaction();

        // Update the job directly (no need to fetch through employer)
        $job->update(Arr::except($attributes, 'tags'));

        // Handle tags
        if (!empty($attributes['tags'])) {
            $tags = explode(',', $attributes['tags']);

            // Clean the tags and get their IDs
            $tagIds = [];
            foreach ($tags as $tagName) {
                $tag = Tag::firstOrCreate(['name' => trim($tagName)]);
                $tagIds[] = $tag->id;
            }



            // Sync the tags (detaches old ones, attaches new ones)
            $job->tags()->sync($tagIds);
        }

        DB::commit();

        return redirect()->back()
            ->with('success', 'Job was Updated');
    } catch (\Throwable $th) {
        DB::rollBack();
        Log::error('Job update error: ' . $th->getMessage() . ' ' . $th->getTraceAsString());

        return redirect()->back()
            ->withInput()
            ->with('error', 'Job update error: ' . $th->getMessage());
    }
}

 public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->back()->with('success', "You have deleted a Job.");;
    }

}
