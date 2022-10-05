<?php

namespace Minhquang\Interaction\Validators;

use Minhquang\Interaction\Validators\ValidatorInterface;
use Minhquang\Interaction\Validators\AbstractValidator;

class InteractionValidator extends AbstractValidator
{
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'resource_type' => ['required'],
            'resource_id' => ['required', 'numeric'],
            'user_id' => ['required', 'numeric'],
            'status' => ['required', 'numeric', 'in:1,2'],
        ],
    ];
}
