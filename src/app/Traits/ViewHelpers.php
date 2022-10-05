<?php

namespace Minhquang\Interaction\Traits;

use Session;
use Minhquang\Interaction\Entities\View;

trait ViewHelpers
{

    private function handle($item)
    {
        $viewed = Session::get(get_class($item), []);
        if (!in_array($item->id, $viewed)) {
            $view = View::where(['resource_type' => get_class($item), 'resource_id' => $item->id])->first();
            if (empty($view)) {
                View::create([
                    'resource_type' => get_class($item),
                    'resource_id' => $item->id,
                    'count' => 1,
                ]);
            } else {
                View::updated([
                    'count' => $view->increment('count'),
                ]);
            }
            Session::push(get_class($item), $item->id);
        }
    }
}
