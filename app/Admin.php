<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;

class Admin extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, MustVerifyEmail;

    public function isAdmin(){
        return true;
    }
}
