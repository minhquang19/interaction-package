<?php

namespace Minhquang\Interaction\Traits;

use App\Models\Interaction;
use Minhquang\Interaction\Entities\View;

trait HasInteractionTrait
{
    public function count($status)
    {
        return $this->morphMany('App\Models\Interaction', 'resource')->where('status', $status)->count();
    }
    public function check($user_id)
    {
        return $this->morphMany(Interaction::class, 'resource')->where('user_id', $user_id)->first();
    }
    public function getCountView()
    {
        return $this->morphMany(View::class, 'resource')->first();
    }
}
