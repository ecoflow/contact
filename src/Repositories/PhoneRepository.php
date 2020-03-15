<?php

namespace Ecoflow\Contact\Repositories;

use Ecoflow\Contact\Models\Phone;
use Ecoflow\Core\Repositories\BaseRepository;

class PhoneRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(new Phone());
    }
}
