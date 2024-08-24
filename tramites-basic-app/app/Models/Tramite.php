<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tramite extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nombre', 'tipo_id', 'sector_id', 'descripcion', 'pdf_asociado'];
    protected $pivot = 'requisito_tramite';
    public function requisitos(): BelongsToMany
    {
        return $this->belongsToMany(Requisito::class);
    }

    public function sector(): BelongsTo
    {
        return $this->belongsTo(Sector::class);
    }

    public function tipo(): BelongsTo
    {
        return $this->belongsTo(Tipo::class);
    }
}
