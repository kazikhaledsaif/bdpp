<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        app()['cache']->forget('spatie.permission.cache');
        Role::create(['name'=>'admin']);
        Role::create(['name'=> 'user']);
    }
}
