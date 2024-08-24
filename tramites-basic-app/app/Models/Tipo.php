<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tipos';
    protected $fillable = ['nombre'];

    public function tramites(): HasMany
    {
        return $this->hasMany(Tramite::class);
    }
}
