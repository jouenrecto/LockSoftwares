<?php 

namespace LockSoftwares\Handlers;

use LockSoftwares\Interfaces\ContactFormable as ContactFormContract;
use App\Events\ContactForm;

class ContactFormHandler
{
    protected $model;

    public function __construct(ContactFormContract $model)
    {
        $this->model = $model;
    }

    public function handle()
    {
        event(new ContactForm($this->model));
    }
}