<?php

namespace Ecoflow\Contact\Repositories;

use Ecoflow\Contact\Models\Email;
use Ecoflow\Core\Repositories\BaseRepository;

class EmailRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(new Email());
    }
}
