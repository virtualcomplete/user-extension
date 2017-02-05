<?php
namespace VirtualComplete\UserExtension;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $table = 'user_addresses';
    protected $guarded = ['id', 'user_id'];
}
