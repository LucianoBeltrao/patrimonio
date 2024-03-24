<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Assets extends Model
{
    use HasFactory;

    public function variants(): HasMany
    {
        return $this->hasMany(Asset_specification::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
