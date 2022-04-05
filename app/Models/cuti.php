<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuti extends Model
{
    use HasFactory;

    public $table = 'cutis';

    protected $fillable = [
        'user_id',
        'jenisCuti',
        'pindaanCuti',
        'cutiTanpaGaji',

    ];

    protected $with = [
        'user',


    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
