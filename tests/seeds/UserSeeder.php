<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        include_once __DIR__ . "/../../vendor/virtualcomplete/user-extension/tests/TestUserModel.php";

        $user = TestUserModel::create([
            'name' => 'Test',
            'email' => 'test@test.com',
            'password' => bcrypt('test'),
            'company_name' => 'VirtualComplete, Inc.',
            'language' => 'en',
            'country' => 'US',
            'time_zone' => 'America/New_York',
        ]);

        $user->addresses()->create([
            'type' => 'Physical',
            'line_1' => 'Line 1',
            'line_2' => '1234 Main Street',
            'city' => 'New York',
            'state' => 'NY',
            'country' => 'USA',
            'zip' => '12345-7890',
            'default' => false,
        ]);

        $user->addresses()->create([
            'type' => 'Mailing',
            'line_1' => 'P.O. Box 123',
            'city' => 'Toronto',
            'country' => 'Canada',
            'zip' => 'ABC123',
            'default' => true,
        ]);

        $user->phones()->create([
            'type' => 'Home',
            'number' => '5555555554',
            'default' => false,
        ]);

        $user->phones()->create([
            'type' => 'Mobile',
            'number' => '5555555555',
            'default' => true,
        ]);

        $user->phones()->create([
            'type' => 'Work',
            'number' => '+15555555556',
            'extension' => '1234',
            'default' => false,
        ]);
    }
}
