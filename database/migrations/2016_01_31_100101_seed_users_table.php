<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\User;

class SeedUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user = User::create([
            'email'     => 'giansantillan18@gmail.com',
            'password'  => Hash::make('Qweasd123:'),
            'name'      => 'Gian Santillan',
            'organization_id' => 1
        ]);

        $user->roles()->attach(1);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        User::where('email', 'giansantillan18@gmail.com')->delete();
    }
}
