<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class program_studi_model extends Model
{
    use HasFactory;
    protected $table = 'program_studi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama'
    ];
}
