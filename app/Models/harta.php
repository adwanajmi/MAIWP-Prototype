<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class harta extends Model
{
    use HasFactory;

    public $table = 'hartas';

    protected $fillable = [

        'user_id',
        'jenisPendapatan',
        'totalPendapatan',
        'pendapatanTambahan',
        'kategori',
        'tanggungan',
        'tarikhDeclare'

   ];

   protected $with = [

        'user',

   ];

   public function user(){
    return $this->belongsTo(User::class, 'user_id');
}


}
