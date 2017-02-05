<?php
namespace VirtualComplete\UserExtension;

use Illuminate\Database\Eloquent\Model;

class UserPhone extends Model
{
    protected $table = 'user_phones';
    protected $guarded = ['id', 'user_id'];
}
