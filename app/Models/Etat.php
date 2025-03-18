<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Etat extends Model
{
    protected $guarded = ['id'];
    public function commandes():HasMany
    {
        return $this->hasMany(Commande::class);
    }
    //
}
