<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\User as UserResource;

class UserController extends Controller
{
    public function show ($id)
    {
        return new UserResource(User::find($id));
    }
}
