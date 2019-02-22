<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 11:48 AM
 */

use Illuminate\Database\Seeder;

/**
 * Class TaskSeeder
 */
class TaskSeeder extends Seeder
{
    /**
     * @var \App\Contracts\Users\UserContract
     */
    private $user;

    /**
     * TaskSeeder constructor.
     * @param \App\Contracts\Users\UserContract $user
     */
    public function __construct(\App\Contracts\Users\UserContract $user)
    {
        $this->user = $user;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\Users\TeamEntity::class, 10)->create();
        factory(\App\Entities\Clients\ClientEntity::class, 10)->create();
        factory(\App\Entities\Users\UserEntity::class, 50)->create();
        factory(\App\Entities\Tasks\TaskEntity::class, 100)->create();

        $this->user->create([
            'name'           => 'Afolabi Abass',
            'email'          => 'afolabi.abass@hotmail.co.uk',
            'password'       => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
            'team_id' => rand(1, 10),
        ]);
    }
}
