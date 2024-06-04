<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Asset extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    
    
    protected $fillable = [
        'record', 'category_id', 'name', 'description', 'price', 'profile_photo_path',// Adicionando category_id aos campos fillable
        // Outros campos fillable aqui
    ];


    public function designation(): HasOne
    {
        return $this->hasOne(Designation::class);
    }

}




