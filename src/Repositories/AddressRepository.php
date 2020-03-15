<?php

namespace Ecoflow\Contact\Repositories;

use Ecoflow\Contact\Models\Address;
use Ecoflow\Core\Repositories\BaseRepository;

class AddressRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(new Address());
    }
}
