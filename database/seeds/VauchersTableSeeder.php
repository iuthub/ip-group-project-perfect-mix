<?php

use Illuminate\Database\Seeder;
use App\Vaucher;
class VauchersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$vaucher = new Vaucher([
        	'type'=>'None',
        	'value'=>'0'
        ]);
        $vaucher->save();

    	$vaucher = new Vaucher([
        	'type'=>'Silver',
        	'value'=>'3'
        ]);
        $vaucher->save();

        $vaucher = new Vaucher([
        	'type'=>'Premium',
        	'value'=>'5'
        ]);
        $vaucher->save();

        $vaucher = new Vaucher([
        	'type'=>'Gold',
        	'value'=>'7'
        ]);
        $vaucher->save();

    }
}
