<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorie extends Model
{
    //
    protected $guarded = ['id'];
    use SoftDeletes;

    public function familles(): HasMany
    {
        return $this->hasMany(Famille::class);
    }
}
