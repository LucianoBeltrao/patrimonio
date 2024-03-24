<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Projects extends Model
{
    use HasFactory;

    public function departments(): HasMany
    {
        return $this->hasMany(Departments::class);
    }

}
