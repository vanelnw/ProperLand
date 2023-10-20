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
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->timestamps();
        });

        Schema::table('pictures', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Property::class)->nullable()->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pictures');
        Schema::table('pictures', function (Blueprint $table) {
            $table->dropForeignIdFor(\App\Models\Property::class);
        });
    }
};
