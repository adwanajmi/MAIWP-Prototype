<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kenderaan extends Model
{
    use HasFactory;

    public $table = 'kenderaans';

    protected $fillable = [
        'user_id',
        'activity',
        'jenisHaluan',
        'destinasi',
        'tarikh',
        'bilPenumpang',
        'desc',


    ];

    protected $with = [
        'user',


    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
