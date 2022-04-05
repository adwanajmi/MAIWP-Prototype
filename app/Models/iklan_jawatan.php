<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class iklan_jawatan extends Model
{
    use HasFactory;

    public $table = 'iklan_jawatans';

    protected $fillable = [
        'tarikhMula',
        'tarikhTutup',
        'jawatan',
        'penempatan',
        'kekosongan',
        'tarafJawatan',
    ];

}
