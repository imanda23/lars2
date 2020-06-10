<?php

use Illuminate\Database\Seeder;
use App\Dosenwali;
class DosenwaliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DosenWali::create([
            'nama' => 'Dr. Taufik Fuadi Abidin, S.Si, M.Tech',
            'nip' => '12378934',
        ]);
        DosenWali::create([
            'nama' => 'Dr. Muhammad Subianto, S.Si, M.Si',
            'nip' => '12378955',
        ]);
        DosenWali::create([
            'nama' => 'Irvanizam Zamanhuri, S.Si, M.Sc',
            'nip' => '1223589',
        ]);
        DosenWali::create([
            'nama' => 'Viska Mutiawani, B.IT, M.IT',
            'nip' => '13453789',
        ]);
        DosenWali::create([
            'nama' => 'Dr. Zahnur Nurdin, S.Si, M.InfoTech',
            'nip' => '12323789',
        ]);
    }
}
