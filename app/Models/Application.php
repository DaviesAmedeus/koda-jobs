<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Application extends Model
{
    /** @use HasFactory<\Database\Factories\ApplicationFactory> */
    use HasFactory;

    public function users() :BelongsTo
    {
       return $this->belongsTo(User::class);
    }

    public function application() :BelongsTo
    {
       return $this->belongsTo(Job::class);
    }
}
