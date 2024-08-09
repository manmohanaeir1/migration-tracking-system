<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DefaultDataUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default All Permission
        $allPermissions = [
            [
                'name' => 'manage user',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create user',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit user',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete user',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage role',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create role',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit role',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete role',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage contact',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create contact',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit contact',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete contact',
                'guard_name' => 'web',
            ],

            [
                'name' => 'manage note',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create note',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit note',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete note',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage logged history',
                'guard_name' => 'web',

            ],
            [
                'name' => 'delete logged history',
                'guard_name' => 'web',

            ],
            [
                'name' => 'manage pricing packages',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create pricing packages',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit pricing packages',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete pricing packages',
                'guard_name' => 'web',
            ],
            [
                'name' => 'buy pricing packages',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage coupon',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create coupon',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit coupon',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete coupon',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage coupon history',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete coupon history',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage pricing transation',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage account settings',
                'guard_name' => 'web',

            ],
            [
                'name' => 'manage password settings',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage general settings',
                'guard_name' => 'web',

            ],
            [
                'name' => 'manage company settings',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage email settings',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage payment settings',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage seo settings',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage google recaptcha settings',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage parking zone',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create parking zone',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit parking zone',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete parking zone',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage vehicle type',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create vehicle type',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit vehicle type',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete vehicle type',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage floor',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create floor',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit floor',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete floor',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage parking rate',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create parking rate',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit parking rate',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete parking rate',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage parking slot',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create parking slot',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit parking slot',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete parking slot',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage rfid vehicle',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create rfid vehicle',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit rfid vehicle',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete rfid vehicle',
                'guard_name' => 'web',
            ],
            [
                'name' => 'manage parking',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create parking',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit parking',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete parking',
                'guard_name' => 'web',
            ], [
                'name' => 'show parking',
                'guard_name' => 'web',
            ],

            // fro employee 
            [
                'name' => 'manage employee',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create employee',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit employee',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete employee',
                'guard_name' => 'web',
            ],
            [
                'name' => 'show employee',
                'guard_name' => 'web',
            ],
        ];
        Permission::insert($allPermissions);

        // Default Super Admin Role
        $superAdminRoleData=  [
            'name' => 'super admin',
            'parent_id' => 0,
        ];
        $systemSuperAdminRole = Role::create($superAdminRoleData);
        $systemSuperAdminPermission = [
            ['name' => 'manage user'],
            ['name' => 'create user'],
            ['name' => 'edit user'],
            ['name' => 'delete user'],
            ['name' => 'manage contact'],
            ['name' => 'create contact'],
            ['name' => 'edit contact'],
            ['name' => 'delete contact'],
            ['name' => 'manage note'],
            ['name' => 'create note'],
            ['name' => 'edit note'],
            ['name' => 'delete note'],
            ['name' => 'manage pricing packages'],
            ['name' => 'create pricing packages'],
            ['name' => 'edit pricing packages'],
            ['name' => 'delete pricing packages'],
            ['name' => 'manage pricing transation'],
            ['name' => 'manage coupon'],
            ['name' => 'create coupon'],
            ['name' => 'edit coupon'],
            ['name' => 'delete coupon'],
            ['name' => 'manage coupon history'],
            ['name' => 'delete coupon history'],
            ['name' => 'manage account settings'],
            ['name' => 'manage password settings'],
            ['name' => 'manage general settings'],
            ['name' => 'manage email settings'],
            ['name' => 'manage payment settings'],
            ['name' => 'manage seo settings'],
            ['name' => 'manage google recaptcha settings'],


            // fro employee 
            ['name' => 'manage employee'],
            ['name' => 'create employee'],
            ['name' => 'edit employee'],
            ['name' => 'delete employee'],  
            ['name' => 'show employee'],    


            

        ];
        $systemSuperAdminRole->givePermissionTo($systemSuperAdminPermission);
        // Default Super Admin
        $superAdminData=      [
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('123456'),
            'type' => 'super admin',
            'lang' => 'english',
            'profile' => 'avatar.png',
            'parent_id' => 0,
        ];
        $systemSuperAdmin = User::create($superAdminData );
        $systemSuperAdmin->assignRole($systemSuperAdminRole);

        // Default Owner Role
        $ownerRoleData= [
            'name' => 'owner',
            'parent_id' => $systemSuperAdmin->id,
        ];
        $systemOwnerRole = Role::create($ownerRoleData);

        // Default Owner All Permissions
        $systemOwnerPermission = [
            ['name' => 'manage user'],
            ['name' => 'create user'],
            ['name' => 'edit user'],
            ['name' => 'delete user'],
            ['name' => 'manage role'],
            ['name' => 'create role'],
            ['name' => 'edit role'],
            ['name' => 'delete role'],
            ['name' => 'manage contact'],
            ['name' => 'create contact'],
            ['name' => 'edit contact'],
            ['name' => 'delete contact'],
            ['name' => 'manage note'],
            ['name' => 'create note'],
            ['name' => 'edit note'],
            ['name' => 'delete note'],
            ['name' => 'manage logged history'],
            ['name' => 'delete logged history'],
            ['name' => 'manage pricing packages'],
            ['name' => 'buy pricing packages'],
            ['name' => 'manage pricing transation'],
            ['name' => 'manage account settings'],
            ['name' => 'manage account settings'],
            ['name' => 'manage password settings'],
            ['name' => 'manage general settings'],
            ['name' => 'manage company settings'],
            ['name' => 'manage parking zone'],
            ['name' => 'create parking zone'],
            ['name' => 'edit parking zone'],
            ['name' => 'delete parking zone'],
            ['name' => 'manage vehicle type'],
            ['name' => 'create vehicle type'],
            ['name' => 'edit vehicle type'],
            ['name' => 'delete vehicle type'],
            ['name' => 'manage floor'],
            ['name' => 'create floor'],
            ['name' => 'edit floor'],
            ['name' => 'delete floor'],
            ['name' => 'manage parking rate'],
            ['name' => 'create parking rate'],
            ['name' => 'edit parking rate'],
            ['name' => 'delete parking rate'],
            ['name' => 'manage parking slot'],
            ['name' => 'create parking slot'],
            ['name' => 'edit parking slot'],
            ['name' => 'delete parking slot'],
            ['name' => 'manage rfid vehicle'],
            ['name' => 'create rfid vehicle'],
            ['name' => 'edit rfid vehicle'],
            ['name' => 'delete rfid vehicle'],
            ['name' => 'manage parking'],
            ['name' => 'create parking'],
            ['name' => 'edit parking'],
            ['name' => 'delete parking'],
            ['name' => 'show parking'],
        ];
        $systemOwnerRole->givePermissionTo($systemOwnerPermission);

        // Default Owner Create
        $ownerData=    [
            'name' => 'Owner',
            'email' => 'owner@gmail.com',
            'password' => Hash::make('123456'),
            'type' => 'owner',
            'lang' => 'english',
            'profile' => 'avatar.png',
            'subscription' => 1,
            'parent_id' => $systemSuperAdmin->id,
        ];
        $systemOwner = User::create($ownerData);
        // Default Owner Role Assign
        $systemOwner->assignRole($systemOwnerRole);


        // Default Owner Role
        $managerRoleData=  [
            'name' => 'manager',
            'parent_id' => $systemOwner->id,
        ];
        $systemManagerRole = Role::create($managerRoleData);
        // Default Manager All Permissions
        $systemManagerPermission = [
            ['name' => 'manage user'],
            ['name' => 'create user'],
            ['name' => 'edit user'],
            ['name' => 'delete user'],
            ['name' => 'manage contact'],
            ['name' => 'create contact'],
            ['name' => 'edit contact'],
            ['name' => 'delete contact'],
            ['name' => 'manage note'],
            ['name' => 'create note'],
            ['name' => 'edit note'],
            ['name' => 'delete note'],
            ['name' => 'manage parking zone'],
            ['name' => 'create parking zone'],
            ['name' => 'edit parking zone'],
            ['name' => 'delete parking zone'],
            ['name' => 'manage vehicle type'],
            ['name' => 'create vehicle type'],
            ['name' => 'edit vehicle type'],
            ['name' => 'delete vehicle type'],
            ['name' => 'manage floor'],
            ['name' => 'create floor'],
            ['name' => 'edit floor'],
            ['name' => 'delete floor'],
            ['name' => 'manage parking rate'],
            ['name' => 'create parking rate'],
            ['name' => 'edit parking rate'],
            ['name' => 'delete parking rate'],
            ['name' => 'manage parking slot'],
            ['name' => 'create parking slot'],
            ['name' => 'edit parking slot'],
            ['name' => 'delete parking slot'],
            ['name' => 'manage rfid vehicle'],
            ['name' => 'create rfid vehicle'],
            ['name' => 'edit rfid vehicle'],
            ['name' => 'delete rfid vehicle'],
            ['name' => 'manage parking'],
            ['name' => 'create parking'],
            ['name' => 'edit parking'],
            ['name' => 'delete parking'],
            ['name' => 'show parking'],
        ];
        $systemManagerRole->givePermissionTo($systemManagerPermission);
        // Default Manager Create
        $managerData=  [
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => Hash::make('123456'),
            'type' => 'manager',
            'lang' => 'english',
            'profile' => 'avatar.png',
            'subscription' => 0,
            'parent_id' => $systemOwner->id,
        ];
        $systemManager = User::create($managerData);
        // Default Manager Role Assign
        $systemManager->assignRole($systemManagerRole);


        // Subscription default data
        $subscriptionData=[
            'title' => 'Basic',
            'package_amount' => 0,
            'interval' => 'Unlimited',
            'user_limit' => 10,
            'parking_zone_limit' => 10,
            'enabled_logged_history' => 1 ,
        ];
        \App\Models\Subscription::create($subscriptionData );
    }
}

