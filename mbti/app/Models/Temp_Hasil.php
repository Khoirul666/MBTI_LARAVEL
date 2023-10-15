<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temp_Hasil extends Model
{
    use HasFactory;
    protected $table = 'temp_hasils';
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'id_user',
        'time_p1',
        'jawaban_p1',
        'time_p2',
        'jawaban_p2',
        'time_p3',
        'jawaban_p3',
        'time_p4',
        'jawaban_p4',
        'time_p5',
        'jawaban_p5',
        'time_p6',
        'jawaban_p6',
        'time_p7',
        'jawaban_p7',
        'time_p8',
        'jawaban_p8',
        'time_p9',
        'jawaban_p9',
        'time_p10',
        'jawaban_p10',
        'time_p11',
        'jawaban_p11',
        'time_p12',
        'jawaban_p12',
        'time_p13',
        'jawaban_p13',
        'time_p14',
        'jawaban_p14',
        'time_p15',
        'jawaban_p15',
        'time_p16',
        'jawaban_p16',
        'time_p17',
        'jawaban_p17',
        'time_p18',
        'jawaban_p18',
        'time_p19',
        'jawaban_p19',
        'time_p20',
        'jawaban_p20',
    ];
}
