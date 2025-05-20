<?php

namespace App\Models;

use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Attributes\Tag;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

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
