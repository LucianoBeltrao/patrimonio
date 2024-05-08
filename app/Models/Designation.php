<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Designation extends Model
{
    use HasFactory;

    public function assets(): HasMany
    {
        return $this->hasMany(Asset::class);
    }

    public function project(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }
}
