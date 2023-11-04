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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipment_id')->constrained('equipments');
            $table->string('repair_type');
            $table->string('issue_type');
            $table->string('urgency');
            $table->string('issue');
            $table->string('attach_file')->nullable();
            $table->foreignId('technician')->constrained('users');
            $table->string('status');
            $table->string('technician_attach_file')->nullable();
            $table->dateTime('service_date')->nullable();
            $table->dateTime('done_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
