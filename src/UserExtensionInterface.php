<?php
namespace VirtualComplete\UserExtension;

interface UserExtensionInterface
{
    /**
     * Shortcut to defining the default phone number
     *
     * @param string $value
     * @return void
     */
    public function setPhoneAttribute($value);

    /**
     * Return a collection of addresses belonging to the user
     *
     * @return HasMany|UserAddress[]
     */
    public function addresses();

    /**
     * Return the default address belonging to the user
     *
     * @return UserAddress|null
     */
    public function address();

    /**
     * Return a collection of phones belonging to the user
     *
     * @return HasMany|UserPhone[]
     */
    public function phones();

    /**
     * Return the default phone belonging to the user
     *
     * @return UserPhone|null
     */
    public function phone();
}
