<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adm = new Role();
        $adm->name = 'Admin';
        $adm->save();

        $eo = new Role();
        $eo->name = 'Event Organizer';
        $eo->save();

        $mem = new Role();
        $mem->name = 'Member';
        $mem->save();
    }
}
