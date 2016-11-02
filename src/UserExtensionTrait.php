<?php
namespace VirtualComplete\UserExtension;

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
    public function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = preg_replace('/[^\dxX+]/', '', $value);
    }
}
