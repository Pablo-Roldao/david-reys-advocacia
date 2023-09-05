<?php

namespace App\Repositories;

use App\Models\Contact;

class EloquentContactRepository
{

    public static function get(): Contact
    {
        return Contact::all()->first();
    }

    public static function update(Contact $contact): void
    {
        $contact->save();
    }


}
