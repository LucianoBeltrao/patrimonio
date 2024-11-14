<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Asset extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'category_id',
        'record',
        'brand',
        'name',
        'model',
        'health',
        'uptime',
        'invoice',
        'serial_number',
        'description',
        'price',
        'profile_photo_path',
        // Adicionando category_id aos campos fillable
        // Outros campos fillable aqui
    ];


    protected static function booted()
    {
        static::created(function ($asset) {
            $asset->traceabilities()->create([
                'record' => $asset->record,
                'serial_number' => $asset->serial_number,
                'action' => 'created',
                'description' => 'Cadastrado',
                'quantity' => $asset->quanity,
                'user_id' => $asset->user_id,
            ]);
        });

        // Evento para registrar uma nova entrada em traceabilities após uma atualização
        static::updated(function ($asset) {
            $asset->traceabilities()->create([
                'record' => $asset->record,
                'serial_number' => $asset->serial_number,
                'action' => 'created',
                'description' => 'Cadastro alterado',
                'quantity' => $asset->quanity,
                'user_id' => $asset->user_id,

            ]);
        });
    }




    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);

    }


    public function designation(): HasOne
    {
        return $this->hasOne(Designation::class);
    }

    public function traceabilities(): HasMany
    {
        return $this->hasMany(Traceability::class);
    }



    public function getPhotoAttribute()
    {
        return $this->profile_photo_path;
    }
}
