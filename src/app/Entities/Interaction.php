<?php

namespace Minhquang\Interaction\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Interaction extends Model
{
    protected $fillable = [
        'resource_type',
        'resource_id',
        'user_id',
        'status',
    ];
}
