<?php

namespace Minhquang\Interaction\Entities;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $fillable = [
        'resource_type',
        'resource_id',
        'count',
    ];

    public function test(){
        return 1;
    }
}
