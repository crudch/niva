<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \JsonException
     */
    public function run()
    {
        DB::table('users')
            ->insert([
                'name'        => 'admin',
                'email'       => 'admin@admin.com',
                'password'    => '$2y$10$kSAhCwoxywurJ4Ati/GpY.5oVU.gOzRp2U1Qrr4pNDGCPa4dPbQ.O',
                'created_at'  => $date = date('Y-m-d H:i:s'),
                'updated_at'  => $date,
                'permissions' => json_encode([
                    'platform.index'              => true,
                    'platform.systems.roles'      => true,
                    'platform.systems.users'      => true,
                    'platform.systems.attachment' => true
                ], JSON_THROW_ON_ERROR)
            ]);
    }
}
