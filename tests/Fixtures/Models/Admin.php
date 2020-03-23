<?php

namespace GViana\PassportMultiauth\Tests\Fixtures\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use GViana\PassportMultiauth\HasMultiAuthApiTokens;

class Admin extends Authenticatable
{
    protected $table = 'admins';

    use HasMultiAuthApiTokens;

    public function getAuthIdentifierName()
    {
        return 'id';
    }
}
