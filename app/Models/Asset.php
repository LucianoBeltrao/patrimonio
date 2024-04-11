<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Asset extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    
    
    protected $fillable = [
        'category_id', 'name', 'description', 'price'// Adicionando category_id aos campos fillable
        // Outros campos fillable aqui
    ];

}




