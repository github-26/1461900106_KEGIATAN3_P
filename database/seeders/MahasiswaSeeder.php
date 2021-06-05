<?php

namespace Database\Seeders;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa;
        $mhs1->nbi = "1461900106";
        $mhs1->nama_mhs = "Carmelita Wando";
        $mhs1->save();
        $mhs2 = new Mahasiswa;
        $mhs2->nbi = "1461900108";
        $mhs2->nama_mhs = "Yansen Januarius";
        $mhs2->save();
        $mhs3 = new Mahasiswa;
        $mhs3->nbi = "1461900203";
        $mhs3->nama_mhs = "Jasinta Florenza";
        $mhs3->save();
        $mhs4 = new Mahasiswa;
        $mhs4->nbi = "1461900300";
        $mhs4->nama_mhs = "Andi Alexander";
        $mhs4->save();
    }
}
