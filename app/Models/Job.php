<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;
    public function tag(string $name){
        $tag = Tag::firstOrCreate(['name'=> $name]);
        $this->tags()->attach($tag);
        return $this;
    }

     // Relationships
     public function employer(): BelongsTo
     {
        return $this->belongsTo(Employer::class);
     }

     public function applications(): HasMany
     {
        return $this->hasMany(Application::class);
     }

     public function tags(): BelongsToMany
     {
         return $this->belongsToMany(Tag::class);
     }



}
