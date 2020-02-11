<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;

class KritikSaran extends Model
{
    use UuidTrait;
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $fillable = [
        'ruangan', 'kritik', 'saran'
    ];
}
