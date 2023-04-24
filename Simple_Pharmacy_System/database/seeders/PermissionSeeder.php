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
//            'name' => 'Test Area',
//            'country_id' => 4,
//        ]);
//
//        Pharmacy::create([
//            'name' => 'Test Pharmacy',
//            'image' => 'https://i.pravatar.cc/150?img=1',
//            'area_id' => 1,
//            'priority' => 1,
//        ]);

        $doctor = Doctor::find(1);

        $doctor->assignRole('owner');




    }
}
