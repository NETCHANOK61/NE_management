<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('serial_number');
            $table->string('name');
            $table->string('brand');
            $table->string('category');
            $table->string('department');
            $table->string('user'); // This is a string, change if there's a 'users' table
            $table->integer('warrant_year');
            $table->dateTime('date_of_start_using');
            $table->string('place');
            $table->string('status'); // Consider using ENUM or a check constraint
            $table->longText('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipments');
    }
};
