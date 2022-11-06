<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
    use HasFactory;

    protected $table = 'slides';

    protected  $primaryKey = 'id';

    protected $fillable = [
        'id',
        'sistema',
        'imagens',
        'status'
    ];
}
