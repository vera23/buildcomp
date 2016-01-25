<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;



class UserController extends BaseController
{
    /**
     * Показать профиль данного пользователя.
     *
     * @param  int  $id
     * @return Response
     */

    public function showProfle($id) {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}