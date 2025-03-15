<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SousFamille extends Model
{
    protected $guarded = ['id'];
    public function produits(): HasMany
    {
        return $this->hasMany(Produit::class);
    }
    public function famille(): BelongsTo
    {
        return $this->belongsTo(Famille::class);
    }
}
