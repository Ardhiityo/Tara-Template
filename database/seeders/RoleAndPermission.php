<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleAndPermission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['admin', 'merchant'];

        foreach ($roles as $key => $role) {
            Role::create([
                'name' => $role
            ]);
        }

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'rahasia'
        ])->assignRole('admin');

        $merchant = User::create([
            'name' => 'merchant',
            'email' => 'merchant@gmail.com',
            'password' => 'rahasia'
        ]);

        $merchant->assignRole('merchant');

        $merchant->merchant()->create([
            'biography' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
            'phone' => '089650557420',
            'slug' => Str::slug('merchant')
        ]);
    }
}
