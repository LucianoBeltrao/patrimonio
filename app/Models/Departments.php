<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Departments extends Model
{
    use HasFactory;

    public function projects(): BelongsTo
    {
        return $this->belongsTo(Projects::class);
    }
}
