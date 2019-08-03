<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role
;
class UserSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role admin
        $adminRole = new Role();
        $adminRole->name="admin";
        $adminRole->display_name="Admin";
        $adminRole->save();

        //membuat role member
        $memberRole = new Role();
        $memberRole->name="member";
        $memberRole->display_name="Member";
        $memberRole->save();

        //membuat sampel admin
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'rayaadistie@gmail.com';
        $admin->password=bcrypt('katasandi16');
        $admin->save();
        $admin->attachRole($adminRole);

        //membuat sampel member
        $member = new User();
        $member->name = 'Member';
        $member->email = 'piraya353@gmail.com';
        $member->password=bcrypt('akuhappy?');
        $member->save();
        $member->attachRole($memberRole);
    }
}
