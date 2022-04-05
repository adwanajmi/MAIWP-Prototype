<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kakitangan extends Model
{
    use HasFactory;

    public $table = 'kakitangans';

    protected $fillable = [

        'pekerja_id',
        'namaPenuh',
        'icNo',
        'telNo',
        'email',
        'tarafPerkhidmatan',
        'jawatan',
        'cawangan',

   ];

   protected $with = [

    'user',

   ];

    public function user(){
    return $this->belongsTo(User::class, 'user_id');
    }
}
