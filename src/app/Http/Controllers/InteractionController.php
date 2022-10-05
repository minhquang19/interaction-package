<?php

namespace Minhquang\Interaction\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Minhquang\Interaction\Validators\InteractionValidator;
use Minhquang\Interaction\Repositories\InteractionInterface;

class InteractionController extends BaseController
{
    protected $validator;
    protected $repository;
    public function __construct(InteractionValidator $validator, InteractionInterface $repository)
    {
        $this->validator = $validator;
        $this->repository = $repository;

    }
    public function createOrUpdate(Request $request)
    {
        $this->validator->isValid($request, 'RULE_CREATE');

        $interaction = $this->repository->updateOrCreate(
            [
                'resource_type' => $request['resource_type'],
                'resource_id' => $request['resource_id'],
                'user_id' => $request['user_id'],
            ],
            [
                'status' => $request['status'],
            ]
        );

        $item = $interaction->resource($interaction->resource_type)->first();

        return view('interaction.show', compact('item'));
    }
    public function destroy(Request $request)
    {
        $interaction = $this->repository->find($request->id);

        $item = $interaction->resource($interaction->resource_type)->first();
        $this->repository->delete($request->id);

        return view('interaction.show', compact('item'));

    }
}
