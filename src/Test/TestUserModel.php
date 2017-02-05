<?php
namespace VirtualComplete\UserExtension\Test;

use Illuminate\Database\Eloquent\Model;
use VirtualComplete\UserExtension\UserExtensionTrait;

class TestUserModel extends Model
{
    use UserExtensionTrait;
    protected $table = 'users';
    protected $guarded = [];
}
