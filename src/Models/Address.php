<?php

namespace Ecoflow\Contact\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;

    protected $fillable = ['addr1', 'addr2', 'country', 'city', 'zipcode', 'addressable_id', 'addressable_type'];

    public function addressable()
    {
        return $this->morphTo();
    }
}
