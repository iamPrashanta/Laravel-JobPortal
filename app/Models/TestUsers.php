<?php

namespace App\Models;

// add this to verify user password
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestUsers extends Model implements Authenticatable
{
    use AuthenticableTrait;
    use HasFactory;

    // add this to verify user password
    public function getAuthPassword()
    {
        return $this->password;
    }


    // for Hash::make///////////////////////
    // public function validateCredentials($credentials)
    // {
    //     $plain = $credentials['password'];
    //     return app('hash')->check($plain, $this->getAuthPassword());
    // }
}
