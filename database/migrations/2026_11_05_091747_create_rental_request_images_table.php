<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rental_request_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rental_request_id')
                ->constrained('rental_requests')
                ->cascadeOnDelete();
            $table->string('image_path', 255);
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->timestamps();

            $table->index(['rental_request_id', 'sort_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rental_request_images');
    }
};
