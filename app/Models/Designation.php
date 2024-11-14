<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Designation extends Model
{
    use HasFactory;

    public function asset(): BelongsTo
    {
        return $this->belongsTo(Asset::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);

    }

    public function traceabilities(): HasMany
    {
        return $this->hasMany(Traceability::class);
    }



    protected $fillable = [
        'user_id', 'project_id', 'department_id', 'asset_id', 'quantity', 'unitary_price'// Adicionando category_id aos campos fillable
        // Outros campos fillable aqui
    ];


    protected static function booted()
    {
        static::created(function ($designation) {
            $designation->traceabilities()->create([
                'record' => $designation->asset->record,
                'serial_number' => $designation->asset->serial_number,
                'user_id' => $designation->user_id,
                'project_id' => $designation->project_id,
                'department_id' => $designation->department_id,
                'asset_id'=> $designation->asset_id,
                'action' => 'update',
                'description' => 'Transferência',
                'quantity' => $designation->quantity,
            ]);
        });

        static::updated(function ($designation) {
            $designation->traceabilities()->create([
                'record' => $designation->asset->record ?? null,
                'serial_number' => $designation->asset->serial_number ?? null,
                'user_id' => $designation->user_id,
                'project_id' => $designation->project_id,
                'department_id' => $designation->department_id,
                'asset_id' => $designation->asset_id,
                'action' => 'update',
                'description' => 'Alteração de transferência',
                'quantity' => $designation->quantity,
            ]);
        });
    }

}
