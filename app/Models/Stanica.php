<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stanica extends Model
{
    use HasFactory;
    protected $table = 'stanice';

    public function linijeOd()
    {
        return $this->hasMany(Linija::class, 'od_stanica_id');
    }

    public function linijeDo()
    {
        return $this->hasMany(Linija::class, 'do_stanica_id');
    }
}
