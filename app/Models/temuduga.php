<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class temuduga extends Model
{
    use HasFactory;

    public $table = 'temudugas';

    protected $fillable = [
        'pemohon_id',
        // 'panel_id',
        'tarikhTemuduga',
        'lokasi',
        'markahPenilaian',
        'status',
    ];

    protected $with = [
        'panel_id',
        'pemohon',

    ];

    public function pemohon(){
        return $this->belongsTo(User::class, 'pemohon_id');
    }

    public function panel_id(){
        return $this->belongsTo(User::class, 'panel_id');
    }

}
