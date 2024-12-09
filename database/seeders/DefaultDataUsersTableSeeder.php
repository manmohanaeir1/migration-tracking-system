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

            // for jobs 
            [
                'name' => 'manage job',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create job',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit job',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete job',
                'guard_name' => 'web',
            ],
            [
                'name' => 'show job',
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

            ['name' => 'manage account settings'],
            ['name' => 'manage account settings'],
            ['name' => 'manage password settings'],
            ['name' => 'manage general settings'],
            ['name' => 'manage company settings'],

            // fro employee 
            ['name' => 'manage employee'],
            ['name' => 'create employee'],
            ['name' => 'edit employee'],
            ['name' => 'delete employee'],  
            ['name' => 'show employee'],    

            ['name' => 'manage account settings'],
            ['name' => 'manage password settings'],
            ['name' => 'manage general settings'],
            ['name' => 'manage email settings'],
            ['name' => 'manage payment settings'],
            ['name' => 'manage seo settings'],
            ['name' => 'manage google recaptcha settings'],


            ['name' => 'delete user'],
            ['name' => 'manage role'],
            ['name' => 'create role'],
            ['name' => 'edit role'],

            ['name' => 'manage logged history'],
            ['name' => 'delete logged history'],

            // for jobs 
            ['name' => 'manage job'],
            ['name' => 'create job'],
            ['name' => 'edit job'],
            ['name' => 'delete job'],
            ['name' => 'show job'],
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
        $useroleData= [
            'name' => 'user',
            'parent_id' => $systemSuperAdmin->id,
        ];
        $systemUserRole = Role::create($useroleData);

        // Default Owner All Permissions
        $systemUserPermission = [
             
            ['name' => 'manage employee'],
            ['name' => 'create employee'],
            ['name' => 'edit employee'],
            ['name' => 'delete employee'],  
            ['name' => 'show employee'],   
            // show job 

             
            ['name' => 'show job'],

             
        ];
        $systemUserRole->givePermissionTo($systemUserPermission);

        // Default Owner Create
        $userData=    [
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123456'),
            'type' => 'user',
            'lang' => 'english',
            'profile' => 'avatar.png',
            'subscription' => 1,
            'parent_id' => $systemSuperAdmin->id,
        ];
        $systemUser = User::create($userData);
        // Default user Role Assign
        $systemUser->assignRole($systemUserRole);


        // Default Owner Role
        $managerRoleData=  [
            'name' => 'manager',
            'parent_id' => $systemUser->id,
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
            'parent_id' => $systemUser->id,
        ];
        $systemManager = User::create($managerData);
        // Default Manager Role Assign
        $systemManager->assignRole($systemManagerRole);


        // Subscription default data
         
        
    }
}

