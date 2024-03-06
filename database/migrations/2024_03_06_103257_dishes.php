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
        $table->string(„name”);
        $table->id();
        $table->float(„price”);
        $table->string(„description”);
        $table->string(„type”);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->drop();
    }
};
