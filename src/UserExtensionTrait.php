<?php
namespace VirtualComplete\UserExtension;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Trait UserExtensionTrait
 * To be used on the User model
 *
 * @package VirtualComplete\UserExtension
 *
 * @property string $company_name
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $country
 * @property string $phone
 * @property string $language
 * @property string $time_zone
 */
trait UserExtensionTrait
{
    /**
     * Shortcut to defining the default phone number
     *
     * @param string $value
     * @return void
     */
    public function setPhoneAttribute($value)
    {
        $default = $this->phone;
        if (!$default) $default = new UserPhone();
        $default->number = preg_replace('/[^\dx+]/i', '', $value);
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
