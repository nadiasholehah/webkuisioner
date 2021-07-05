<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable =['id_pertanyaan','text_pertanyaan','kategori_pertanyaan'];
}