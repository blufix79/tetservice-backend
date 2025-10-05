<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->nome = "Paoletta";
        $user->cognome = "Pusceddu";
        $user->username = "ataservice";
        $user->password = bcrypt("paolapux2");
        $user->email = "ata-assistenza@libero.it";
        $user->id_profile = 1;
        $user->save();
    }
}
