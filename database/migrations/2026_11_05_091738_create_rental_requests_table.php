<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rental_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained()->restrictOnDelete();

            $table->string('title', 180);
            $table->unsignedSmallInteger('quantity')->default(1);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            $table->string('city', 100)->nullable()->index();
            $table->string('district', 100)->nullable();
            $table->unsignedSmallInteger('location_radius')->nullable();
            $table->string('pickup_mode', 20)->default('direct');

            $table->decimal('min_daily_budget', 12, 2)->nullable();
            $table->decimal('max_daily_budget', 12, 2)->nullable();
            $table->decimal('total_budget', 12, 2)->nullable();

            $table->longText('description');
            $table->string('status', 20)->default('draft')->index();
            $table->timestamp('published_at')->nullable()->index();
            $table->timestamps();

            $table->index(['user_id', 'status']);
            $table->index(['category_id', 'status']);
            $table->index(['start_date', 'end_date']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rental_requests');
    }
};
