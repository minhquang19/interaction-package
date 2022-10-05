<?php

namespace Minhquang\Interaction\Validators;

interface ValidatorInterface
{
    const RULE_CREATE            = 'RULE_CREATE';
    const RULE_UPDATE            = 'RULE_UPDATE';

    public function isValid($data, $action);
}
