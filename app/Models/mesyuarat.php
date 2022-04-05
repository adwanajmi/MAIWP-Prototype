<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mesyuarat extends Model
{
    use HasFactory;

    public $table = 'mesyuarats';


    protected $fillable = [
        'user_id',
        'tarikhMesyuarat',
        'kelulusanMesyuarat',
        'suratAmaran',
    ];

    protected $with = [
        'user',


    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
