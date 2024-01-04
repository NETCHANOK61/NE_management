<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Drop the foreign key constraint
        // Schema::table('tickets', function (Blueprint $table) {
        //     $table->dropForeign('tickets_technician_foreign');
        // });

        // Drop the existing 'technician' column
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropColumn('technician');
        });

        // Add a new nullable 'technician' column
        Schema::table('tickets', function (Blueprint $table) {
            $table->string('technician')->nullable();
        });

        // Recreate the foreign key constraint
        // Schema::table('tickets', function (Blueprint $table) {
        //     $table->foreign('technician')->references('id')->on('users');
        //     // Replace 'id' and 'users' with your actual referenced column and table.
        // });
    }

    public function down()
    {
        // Drop the foreign key constraint
        // Schema::table('tickets', function (Blueprint $table) {
        //     $table->dropForeign('tickets_technician_foreign');
        // });

        // Drop the 'technician' column
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropColumn('technician');
        });

        // Recreate the original 'technician' column
        Schema::table('tickets', function (Blueprint $table) {
            $table->string('technician');
        });

        // Recreate the foreign key constraint
        Schema::table('tickets', function (Blueprint $table) {
            $table->foreign('technician')->references('id')->on('users');
            // Replace 'id' and 'users' with your actual referenced column and table.
        });
    }
};

