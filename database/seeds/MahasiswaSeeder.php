<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'nama' => 'Hijaiyah Imanda Putri',
            'nim' => '1808107010010',
            'jenis_kelamin' => 'Perempuan',
            'dosenwali_id' => '1',
        ]);
    }
}
