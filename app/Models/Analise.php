<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analise extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'analise', 'nota', 'tipo_midias_id', "file_path"];
}
