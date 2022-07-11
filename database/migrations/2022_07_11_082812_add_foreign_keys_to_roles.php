<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_roles', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('merchant_id')->references('id')->on('merchants')->onDelete('CASCADE');
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_roles', function (Blueprint $table) {
            $table->dropForeign('user_roles_role_id_foreign');
            $table->dropForeign('user_roles_user_id_foreign');
            $table->dropForeign('user_roles_merchant_id_foreign');
            $table->dropForeign('user_roles_admin_id_foreign');
        });
    }
}
