<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Requisito extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nombre'];

    public function tramites(): BelongsToMany
    {
        return $this->belongsToMany(Tramite::class);
    }

}
