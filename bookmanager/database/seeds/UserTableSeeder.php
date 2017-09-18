<?php
/**
 * Created by PhpStorm.
 * User: stoyan
 * Date: 18.09.17
 * Time: 17:58
 */
use App\User;
use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Stoyan Shterev',
            'email'    => 'stoqn1@abv.bg',
            'password' => Hash::make('dadadada'),
        ));
    }

}