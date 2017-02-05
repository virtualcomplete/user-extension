<?php
namespace VirtualComplete\UserExtension;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Trait UserExtensionTrait
 *
 * @package VirtualComplete\UserExtension
 */
trait UserExtensionTrait
{
    /**
     * Shortcut to setting the default phone number
     *
     * @param string $value
     * @return void
     */
    public function setPhoneAttribute($value)
    {
        $phone = $this->phone;
        if (!$phone) $phone = new UserPhone();

        $phone->default = true;
        $phone->number = $value;

        $this->phone()->save($phone);
    }

    /**
     * Return a collection of addresses belonging to the user
     *
     * @return HasMany|UserAddress[]
     */
    public function addresses()
    {
        return $this->hasMany('VirtualComplete\UserExtension\UserAddress', 'user_id');
    }

    /**
     * Return the default address belonging to the user
     *
     * @return UserAddress|null
     */
    public function address()
    {
        return $this->hasOne('VirtualComplete\UserExtension\UserAddress', 'user_id')->where('default', true);
    }

    /**
     * Return a collection of phones belonging to the user
     *
     * @return HasMany|UserPhone[]
     */
    public function phones()
    {
        return $this->hasMany('VirtualComplete\UserExtension\UserPhone', 'user_id');
    }

    /**
     * Return the default phone belonging to the user
     *
     * @return UserPhone|null
     */
    public function phone()
    {
        return $this->hasOne('VirtualComplete\UserExtension\UserPhone', 'user_id')->where('default', true);
    }

}
