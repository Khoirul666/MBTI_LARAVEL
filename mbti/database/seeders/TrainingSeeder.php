<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Training;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Training::create(['jawaban_training'=>'11,15,14,12','type'=>'ENFJ']);
        Training::create(['jawaban_training'=>'11,13,13,13','type'=>'ENFP']);
        Training::create(['jawaban_training'=>'16,14,16,12','type'=>'INFJ']);
        Training::create(['jawaban_training'=>'13,16,16,11','type'=>'INFJ']);
        Training::create(['jawaban_training'=>'14,16,16,13','type'=>'INFP']);
        Training::create(['jawaban_training'=>'15,13,15,13','type'=>'INFP']);
        Training::create(['jawaban_training'=>'12,15,16,15','type'=>'ENFP']);
        Training::create(['jawaban_training'=>'18,16,18,11','type'=>'INFJ']);
        Training::create(['jawaban_training'=>'14,13,13,13','type'=>'INFP']);
        Training::create(['jawaban_training'=>'15,14,12,11','type'=>'INTJ']);
        Training::create(['jawaban_training'=>'13,15,15,20','type'=>'INFP']);
        Training::create(['jawaban_training'=>'16,16,18,17','type'=>'INFP']);
        Training::create(['jawaban_training'=>'16,14,12,13','type'=>'INTP']);
        Training::create(['jawaban_training'=>'12,13,14,10','type'=>'ENFJ']);
        Training::create(['jawaban_training'=>'14,13,18,14','type'=>'INFP']);
        Training::create(['jawaban_training'=>'12,14,16,12','type'=>'ENFJ']);
        Training::create(['jawaban_training'=>'12,15,15,9','type'=>'ENFJ']);
        Training::create(['jawaban_training'=>'18,11,13,14','type'=>'ISFP']);
        Training::create(['jawaban_training'=>'15,10,18,10','type'=>'ISFJ']);
        Training::create(['jawaban_training'=>'12,14,14,13','type'=>'ENFP']);
        Training::create(['jawaban_training'=>'14,15,14,14','type'=>'INFP']);
        Training::create(['jawaban_training'=>'14,11,12,10','type'=>'ISTJ']);
        Training::create(['jawaban_training'=>'15,13,15,10','type'=>'INFJ']);
        Training::create(['jawaban_training'=>'13,17,18,13','type'=>'INFP']);
        Training::create(['jawaban_training'=>'19,18,18,10','type'=>'INFJ']);
        Training::create(['jawaban_training'=>'16,15,17,12','type'=>'INFJ']);
        Training::create(['jawaban_training'=>'14,14,16,10','type'=>'INFJ']);
        Training::create(['jawaban_training'=>'16,17,15,14','type'=>'INFP']);
        Training::create(['jawaban_training'=>'14,13,15,14','type'=>'INFP']);
        Training::create(['jawaban_training'=>'15,16,15,11','type'=>'INFJ']);
        Training::create(['jawaban_training'=>'14,16,17,13','type'=>'INFP']);
        Training::create(['jawaban_training'=>'16,12,14,13','type'=>'ISFP']);
        Training::create(['jawaban_training'=>'15,11,14,14','type'=>'ISFP']);
        Training::create(['jawaban_training'=>'15,18,16,15','type'=>'INFP']);
        Training::create(['jawaban_training'=>'18,18,17,13','type'=>'INFP']);
        Training::create(['jawaban_training'=>'15,13,14,12','type'=>'INFJ']);
        Training::create(['jawaban_training'=>'14,14,13,10','type'=>'INFJ']);
        Training::create(['jawaban_training'=>'15,19,18,15','type'=>'INFP']);
        Training::create(['jawaban_training'=>'13,14,17,16','type'=>'INFP']);
        Training::create(['jawaban_training'=>'17,15,17,14','type'=>'INFP']);
        Training::create(['jawaban_training'=>'18,14,11,12','type'=>'INTJ']);
        Training::create(['jawaban_training'=>'16,16,17,13','type'=>'INFP']);
        Training::create(['jawaban_training'=>'16,12,18,14','type'=>'ISFP']);
        Training::create(['jawaban_training'=>'14,15,13,11','type'=>'INFJ']);
        Training::create(['jawaban_training'=>'13,19,14,13','type'=>'INFP']);
        Training::create(['jawaban_training'=>'13,15,15,13','type'=>'INFP']);
        Training::create(['jawaban_training'=>'12,13,12,13','type'=>'ENTP']);
        Training::create(['jawaban_training'=>'16,7,8,12','type'=>'ISTJ']);
        Training::create(['jawaban_training'=>'10,13,14,11','type'=>'ENFJ']);
        Training::create(['jawaban_training'=>'12,12,7,12','type'=>'ESTJ']);
        Training::create(['jawaban_training'=>'11,12,13,14','type'=>'INTJ']);
    }
}
