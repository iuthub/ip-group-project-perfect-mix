<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$role=new Role([
        	'name' => 'user'
        ]);
    	$role->save();

        $role=new Role([
            'name' => 'employer'
        ]);
        $role->save();

    	$role=new Role([
        	'name' => 'admin'
        ]);
    	$role->save();
    }
}
