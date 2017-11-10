<?php 

namespace LockSoftwares\Repositories;

use LockSoftwares\Models\ContactForm;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Builder;

class ContactFormRepository extends Builder
{
    public function __construct(ContactForm $model, QueryBuilder $queryBuilder)
    {
        parent::__construct($queryBuilder);

        $this->model = $model;
    }
}