<?php
namespace Minhquang\Interaction\Repositories;


use App\Models\Interaction;
use Minhquang\Interaction\Repositories\InteractionInterface;

class InteractionRepository implements InteractionInterface
{
    protected $model;

    public function __construct()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getModel()
    {
        if (isset(config('interaction.models')['interaction'])) {
            return config('interaction.models.interaction');
        } else {
            return Interaction::class;
        }
    }

    public function updateOrCreate(array $attributes, array $values = [])
    {
        return $this->model->updateOrCreate($attributes, $values);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function delete($id)
    {
        return $this->find($id)->delete();
    }


}
