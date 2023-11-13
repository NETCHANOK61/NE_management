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
        Schema::table('maintenance_cost', function (Blueprint $table) {
            //
            $table->text('detail')->nullable();
            $table->float('cost');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('maintenance_cost', function (Blueprint $table) {
            //
            $table->dropColumn('detail');
            $table->dropColumn('cost');
        });
    }
};
