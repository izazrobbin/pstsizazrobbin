<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Outlet;

class OutletsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Outlet::create([
            'code' => Str::random(),
            'name' => 'Fahmi',
            'status' => 'selesai',
            'address' => 'Cibinong',
            'phone' => '0892123421',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Pikay',
            'status' => 'Berlangsung',
            'address' => 'GN Putri',
            'phone' => '0892123421',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'cUCU',
            'status' => 'Berlangsung',
            'address' => 'GN Putri',
            'phone' => '0892123421',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Angga',
            'status' => 'Berlangsung',
            'address' => 'GN Putri',
            'phone' => '0892123421',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'NAdif',
            'status' => 'Berlangsung',
            'address' => 'GN Putri',
            'phone' => '0892123421',
        ]);

          }
}
