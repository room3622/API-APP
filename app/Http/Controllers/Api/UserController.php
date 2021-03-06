<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Transformers\UserTransformer;
use Dingo\Api\Routing\Helpers;
use App\User;

class UserController extends Controller
{
    use Helpers;

    public function getUsers()
    {

        $users = User::all();

        return $this->response->collection($users, new UserTransformer);

    }
}