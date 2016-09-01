<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/*DB::table('users')->insert([
    		'name'=>'Pedro Perez',
    		'email'=>'pedro@mail.com',
    		'password'=>bcrypt('pedrito'),
    		'type'=>'admin'
    		]);*/
    		factory(User::class,10)->create();
    }
}
