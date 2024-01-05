<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Hapus data sebelumnya untuk menghindari duplikasi
        DB::table('users')->truncate();

        // Tambahkan data pengguna
        DB::table('users')->insert([
            'name' => 'Admin DATC',
            'email' => 'admin@datc.com',
            'password' => Hash::make('admin2023'),
        ]);

        // Tambahkan lebih banyak data jika diperlukan
    }
}
