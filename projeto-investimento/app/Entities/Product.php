<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Product extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['institution_id', 'name', 'description', 'index', 'interest_rate'];

    public function institution()
    {
    	return $this->belongsTo(Institution::class);
    }

}
