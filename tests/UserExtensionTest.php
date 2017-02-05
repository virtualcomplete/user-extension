<?php

/**
 * Class UserExtensionTest
 *
 * Depends on seeds/UserSeeder to be run
 */
class UserExtensionTest extends TestCase
{
    protected $user;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        include_once __DIR__ . '/TestUserModel.php';
        $this->user = TestUserModel::first();
    }

    public function test_that_setup_succeeded()
    {
        $this->assertTrue(true);
    }

    public function test_that_users_can_have_multiple_addresses()
    {
        $this->assertEquals(2, $this->user->addresses->count());
    }

    public function test_that_default_address_works()
    {
        $address = $this->user->address;
        $this->assertEquals('Toronto', $address->city);
    }

    public function test_that_users_can_have_multiple_phones()
    {
        $this->assertEquals(3, $this->user->phones->count());

    }

    public function test_that_default_phone_works()
    {
        $phone = $this->user->phone;
        $this->assertEquals('5555555555', $phone->number);
    }

}
