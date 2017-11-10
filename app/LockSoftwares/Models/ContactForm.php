<?php

namespace LockSoftwares\Models;

use LockSoftwares\Interfaces\ContactFormable;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model implements ContactFormable
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
