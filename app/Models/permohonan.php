<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permohonan extends Model
{
    use HasFactory;

    public $table = 'permohonans';

    protected $fillable = [

        'pemohon_id',
        'nama',
        'alamat',
        'icNo',
        'jantina',
        'negeriAsal',
        'warganegara',
        'status',
        'akademik',
        'pengalamanKerja',
        'jawatan_id',
   ];

   protected $with = [
       'jawatan',
       'pemohon',

   ];

   public function jawatan(){
       return $this->belongsTo(iklan_jawatan::class, 'jawatan_id');
   }


   public function pemohon(){
       return $this->belongsTo(User::class, 'pemohon_id');
   }





}
