<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Opd;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $opd = Opd::create([
            'nama_opd' => 'Dinas Pekerjaan Umum dan Perumahan Rakyat',
            'nama_singkat' => 'PUPR',
            'alamat' => 'Jln. Frans Seda',
            'nama_kepala' => '-'
        ])->getAttributes();
        Admin::create([
            'opd_id' => $opd['opd_id'],
            'nama' => 'puprAdmin',
            'mail' => 'pupr@kupangkota.go.id',
            'pwd' => Hash::make('ateblukup'),
            'nohp' => '08217391232'
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
