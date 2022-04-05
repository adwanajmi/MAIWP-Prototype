<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bilik extends Model
{
    use HasFactory;

    public $table = 'biliks';

    protected $fillable = [
        'user_id',
        'namaMesyuarat',
        'pengerusi',
        'maklumat',
        'jenisBilik',
        'tarikh',
        'bilAhli',
        'desc',


    ];

    protected $with = [
        'user',


    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
