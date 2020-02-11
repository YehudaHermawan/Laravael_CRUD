<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;

class Masalah extends Model
{
    use UuidTrait;
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $fillable = [
        'image', 'ruangan', 'masalah'
    ];
}
