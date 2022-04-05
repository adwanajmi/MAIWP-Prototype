<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perkhidmatan extends Model
{
    use HasFactory;

    public $table = 'perkhidmatans';

    protected $fillable = [
        'perkhidmatan_id',
         'kontrak',
         'kwsp',
         'pencen',
         'tarikhMula',
         'tempoh',
         'kursus',
         'tempohKursus',


    ];

}
