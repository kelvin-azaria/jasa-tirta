<?php

namespace Database\Seeders;

use App\Models\PubgPlayer;
use App\Models\PubgTeam;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('olimpiadejr2021');
        DB::table('admins')->insert([
            'name' => 'Admin',
            'email' => 'olimpiadejr2021@admin.com',
            'password' => $password,
        ]);

        // $i=1;
        // do {
        //     DB::table('bridges')->insert([
        //         'name' => 'test'.$i,
        //         'phone' => 62821231212+$i,
        //         'bbo_username' => 'test'.$i.'u',
        //     ]);
        //     $i++;
        // } while ($i <= 10);

        // $user = User::first();
        // $user->pubg_player_id = null;
        // $user->save();
        // $npp = $user->npp;

        // $pubg_team = PubgTeam::create([
        //     'team_number' => 1,
        //     'team_name' => 'Team 1',
        //     'team_captain_name' => 'Kelp',
        //     'team_captain_phone' => '069696969',
        //     'group' => 'A',
        // ]);

        // $pubg_player = PubgPlayer::create([
        //     'pubg_team_id' => $pubg_team->id,
        //     'player_nickname' => 'peepee poopoo',
        //     'player_npp' => $npp,
        // ]);

        // $user->pubg_player_id = $pubg_player->id;
        // $user->save();


    }
}
