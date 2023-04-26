<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Doctor;
use App\Models\Pharmacy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $admin = Role::create(['name' => 'admin']);
//        $doctor = Role::create(['name' => 'doctor']);
//        $owner = Role::create(['name' => 'owner']);
//        $user = Role::create(['name' => 'user']);
//
//        $pharmacy = Permission::create(['name' => 'pharmacy']);
//        $update_pharmacy = Permission::create(['name' => 'update pharmacy']);
//        $order = Permission::create(['name' => 'order']);
//        $create_order = Permission::create(['name' => 'create order']);
//
//        $admin->givePermissionTo($pharmacy);
//        $admin->givePermissionTo($update_pharmacy);
//        $admin->givePermissionTo($order);
//        $admin->givePermissionTo($create_order);
//
//        $doctor->givePermissionTo($order);
//        $owner->givePermissionTo($update_pharmacy);
//        $user->givePermissionTo($create_order);

//        Area::create([
//            'name' => 'Test Area1',
//            'country_id' =>10,
//        ]);
//        Area::create([
//            'name' => 'Test Area2',
//            'country_id' =>4,
//        ]);
//        Area::create([
//            'name' => 'Test Area3',
//            'country_id' =>8,
//        ]);
//
//        Pharmacy::create([
//            'name' => 'Pharmacy1',
//            'area_id' => 1,
//            'priority' =>1,
//        ]);
//        Pharmacy::create([
//            'name' => 'Pharmacy2',
//            'area_id' => 2,
//            'priority' =>2,
//        ]);
//        Pharmacy::create([
//            'name' => 'Pharmacy3',
//            'area_id' => 3,
//            'priority' =>3,
//        ]);

//
//       Doctor::create([
//            'name' => 'nabila Doctor',
//            'email' => 'nabila@gmail.com',
//            'national_id' => '923456789',
//            'password' => '123456789',
//            'pharmacy_id' =>2,
//            'image' => '1.jpg',


//        ])->assignRole('owner');
//        Doctor::create([
//            'name' => 'mariam Doctor',
//            'email' => 'mariam.com',
//            'national_id' => '823456789',
//            'password' => '123456789',
//            'pharmacy_id' =>5,
//            'image' => '1.jpg',
//
//
//        ])->assignRole('doctor');
//        $doctor = Doctor::find(5);
////
//        $doctor->assignRole('owner');




    }
}
