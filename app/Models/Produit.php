<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produit extends Model
{
    protected $guarded = ['id'];
    public function details_achats(): HasMany
    {
        return $this->hasMany(DetailAchat::class);
    }
    public function details_commandes(): HasMany
    {
        return $this->hasMany(DetailCommande::class);
    }
    public function sous_famille(): BelongsTo
    {
        return $this->belongsTo(SousFamille::class);
    }
    public function marque(): BelongsTo
    {
        return $this->belongsTo(Marque::class);
    }
    public function unite(): BelongsTo
    {
        return $this->belongsTo(Unite::class);
    }
    public function prix_ttc()
    {
        return $this->prix_ht * (1 + $this->tva /100);
    }
}
