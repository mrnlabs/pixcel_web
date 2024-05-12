<?php

namespace App\Services;

class ProfileService
{

    public  function  getProfile(){
        return auth()->user();
    }

}
