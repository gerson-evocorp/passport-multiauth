<?php

namespace GViana\PassportMultiauth\Tests\Fixtures\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use GViana\PassportMultiauth\HasMultiAuthApiTokens;

class User extends Authenticatable
{
    protected $table = 'users';

    use HasMultiAuthApiTokens;

    public function getAuthIdentifierName()
    {
        return 'id';
    }
}
