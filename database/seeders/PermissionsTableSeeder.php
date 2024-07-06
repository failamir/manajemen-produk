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
                'title' => 'provinsi_create',
            ],
            [
                'id'    => 30,
                'title' => 'provinsi_edit',
            ],
            [
                'id'    => 31,
                'title' => 'provinsi_show',
            ],
            [
                'id'    => 32,
                'title' => 'provinsi_delete',
            ],
            [
                'id'    => 33,
                'title' => 'provinsi_access',
            ],
            [
                'id'    => 34,
                'title' => 'kabupaten_create',
            ],
            [
                'id'    => 35,
                'title' => 'kabupaten_edit',
            ],
            [
                'id'    => 36,
                'title' => 'kabupaten_show',
            ],
            [
                'id'    => 37,
                'title' => 'kabupaten_delete',
            ],
            [
                'id'    => 38,
                'title' => 'kabupaten_access',
            ],
            [
                'id'    => 39,
                'title' => 'penduduk_create',
            ],
            [
                'id'    => 40,
                'title' => 'penduduk_edit',
            ],
            [
                'id'    => 41,
                'title' => 'penduduk_show',
            ],
            [
                'id'    => 42,
                'title' => 'penduduk_delete',
            ],
            [
                'id'    => 43,
                'title' => 'penduduk_access',
            ],
            [
                'id'    => 44,
                'title' => 'ms_category_create',
            ],
            [
                'id'    => 45,
                'title' => 'ms_category_edit',
            ],
            [
                'id'    => 46,
                'title' => 'ms_category_show',
            ],
            [
                'id'    => 47,
                'title' => 'ms_category_delete',
            ],
            [
                'id'    => 48,
                'title' => 'ms_category_access',
            ],
            [
                'id'    => 49,
                'title' => 'transaction_detail_create',
            ],
            [
                'id'    => 50,
                'title' => 'transaction_detail_edit',
            ],
            [
                'id'    => 51,
                'title' => 'transaction_detail_show',
            ],
            [
                'id'    => 52,
                'title' => 'transaction_detail_delete',
            ],
            [
                'id'    => 53,
                'title' => 'transaction_detail_access',
            ],
            [
                'id'    => 54,
                'title' => 'transaction_header_create',
            ],
            [
                'id'    => 55,
                'title' => 'transaction_header_edit',
            ],
            [
                'id'    => 56,
                'title' => 'transaction_header_show',
            ],
            [
                'id'    => 57,
                'title' => 'transaction_header_delete',
            ],
            [
                'id'    => 58,
                'title' => 'transaction_header_access',
            ],
        ];

        Permission::insert($permissions);
    }
}