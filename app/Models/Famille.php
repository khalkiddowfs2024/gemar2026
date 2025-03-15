<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Famille extends Model
{
    protected $guarded = ['id'];

    public function sous_familles(): HasMany
    {
        return $this->hasMany(SousFamille::class);
    }
    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }
}
