<?php

namespace App\Services;

use App\Models\User;

class ProfileService
{

    public  function  getProfile(){
        if(request('id')){
            return User::find(request('id'));
        }
        return auth()->user();
    }

}
