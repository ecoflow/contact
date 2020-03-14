<?php

namespace Ecoflow\Contact\Repositories;

use Ecoflow\Contact\Models\Phone;
use Ecoflow\Ecoflow\Repositories\BaseRepository;
use Faker\Provider\Base;

class PhoneRepository extends BaseRepository
{

    public function __construct()
    {
        $repo = new BaseRepository(new Phone());
    }
}
