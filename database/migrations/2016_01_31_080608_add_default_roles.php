<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Role;

class AddDefaultRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $roles = [
            'manager' => [
                'users.create', 'users.delete', 'users.read', 'users.update',
                'invoices.read', 'invoices.create', 'invoices.delete', 'invoices.update',
                'reports.read', 'reports.update', 'reports.delete'
            ],
            'user' => [
                'invoices.read', 'invoices.create',
                'reports.read'
            ]
        ];

        foreach ($roles as $key => $value) {
            Role::create([
                'role_name' => $key,
                'permissions' => json_encode($value)
            ]);
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Role::truncate();
    }
}
