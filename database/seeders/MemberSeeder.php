<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::create([
            'kode_member' => '12',
            'nama' => 'M. AUFA ALFIS SYIHAB',
            'ribath' => 'AS SYAFII',
            'kamar' => '2',
            'sekolah' => 'MAN',
            'kelas' => 'WUSTHO',
            'kelas_MHM' => 'WUSTHO',
        ]);
    }
}
