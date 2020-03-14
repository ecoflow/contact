<?php

namespace Ecoflow\Contact\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phone extends Model
{
    use SoftDeletes;

    protected $fillable = ['nbr', 'type', 'phonable_id', 'phonable_type'];

    public function phonable()
    {
        return $this->morphTo();
    }
}
