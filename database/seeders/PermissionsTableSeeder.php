<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'team_create',
            ],
            [
                'id'    => 20,
                'title' => 'team_edit',
            ],
            [
                'id'    => 21,
                'title' => 'team_show',
            ],
            [
                'id'    => 22,
                'title' => 'team_delete',
            ],
            [
                'id'    => 23,
                'title' => 'team_access',
            ],
            [
                'id'    => 24,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 25,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 26,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 27,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 28,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 29,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 30,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 31,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 32,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 33,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 34,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 35,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 36,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 37,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 38,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 39,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 40,
                'title' => 'product_create',
            ],
            [
                'id'    => 41,
                'title' => 'product_edit',
            ],
            [
                'id'    => 42,
                'title' => 'product_show',
            ],
            [
                'id'    => 43,
                'title' => 'product_delete',
            ],
            [
                'id'    => 44,
                'title' => 'product_access',
            ]
        ];

        Permission::insert($permissions);
    }
}