<?php

use Illuminate\Database\Seeder;
use Mehradsadeghi\FilterQueryString\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = $this->getStub();

        foreach ($users as $user) {
            factory(User::class)->create($user);
        }
    }

    private function getStub()
    {
        return [
            [
                'name' => 'alireza',
                'email' => 'alireza@p30web.org',
                'username' => 'alirezap30web',
                'age' => 24,
                'created_at' => '2020-09-01',
                'updated_at' => '2020-09-01',
            ],
            [
                'name' => 'javad',
                'email' => 'javad@example.com',
                'username' => 'javadmp',
                'age' => 20,
                'created_at' => '2020-10-01',
                'updated_at' => '2020-10-01',
            ],
            [
                'name' => 'hamzeh',
                'email' => 'hamzeh@example.com',
                'username' => 'hamzeh',
                'age' => 22,
                'created_at' => '2020-11-01',
                'updated_at' => '2020-11-01',
            ],
            [
                'name' => 'alighasemi',
                'email' => 'alighasemi@example.com',
                'username' => 'alighasemi',
                'age' => 22,
                'created_at' => '2020-12-01',
                'updated_at' => '2020-12-01',
            ],
        ];
    }
}
