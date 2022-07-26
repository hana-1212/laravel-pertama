<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teams;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0;$i < 20; $i++){
            $new = new Teams();
            $new->nama = 'Team '.$i;
            $new->profile ='https://randomuser.me/api/portraits/men/'.$i.'.jpg';
            $new->bio ='Lorem, jkshfjkdhgjksd jshdfksdhgks';
            $new->save();

            // Teams::create([
            //     'nama' => 'isi nama',
            //     'profile' => 'isi profile',
            //     'bio' => 'isi bio',
            // ]);

        }
    }
}
