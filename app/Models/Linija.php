<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linija extends Model
{
    protected $table = 'linije';

    public function fromStation()
    {
        return $this->belongsTo(Stanica::class, 'od_stanica_id');
    }

    public function toStation()
    {
        return $this->belongsTo(Stanica::class, 'do_stanica_id');
    }
}
