<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sector extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'sectores';
    protected $fillable = ['nombre'];

    public function tramites(): HasMany
    {
        return $this->hasMany(Tramite::class);
    }
}
