<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'], // เงื่อนไขตรวจซ้ำ
            [
                'name' => 'ผู้ดูแลระบบ',
                'email_verified_at' => now(),
                'password' => Hash::make('123456789'),
                'remember_token' => null,
                'status' => 1,
            ]
        );

        User::updateOrCreate(
            ['email' => 'admin@bangpluang.go.th'],
            [
                'name' => 'ผู้ดูแลระบบ',
                'email_verified_at' => now(),
                'password' => Hash::make('123456789'),
                'remember_token' => null,
                'status' => 1,
            ]
        );

        User::updateOrCreate(
            ['email' => 'eservice@example.com'], // เงื่อนไขตรวจซ้ำ
            [
                'name' => 'ผู้ดูแลระบบ Eservice',
                'email_verified_at' => now(),
                'password' => Hash::make('123456789'),
                'remember_token' => null,
                'status' => 2,
            ]
        );

        User::updateOrCreate(
            ['email' => 'users@example.com'], // เงื่อนไขตรวจซ้ำ
            [
                'name' => 'สมชาย ใจดี',
                'email_verified_at' => now(),
                'password' => Hash::make('123456789'),
                'remember_token' => null,
                'status' => 3,
            ]
        );
    }
}
