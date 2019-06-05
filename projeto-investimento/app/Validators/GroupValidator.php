<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;


class GroupValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
        	'name'				=> 'required', 
        	'user_id'			=> 'required|exists:users,id',
        	'institution_id'	=> 'required|exists:institutions,id',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name'              => 'required', 
        ],
    ];
}
