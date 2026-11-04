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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained()->restrictOnDelete();

            $table->string('title', 180);
            $table->string('slug', 220)->unique();
            $table->longText('description');
            $table->string('brand', 120)->nullable();
            $table->string('model', 160)->nullable();
            $table->string('condition', 30)->default('good');

            $table->decimal('price_per_day', 12, 2);
            $table->decimal('deposit', 12, 2)->nullable()->default(0);

            $table->string('pickup_address', 255);
            $table->string('city', 100)->nullable()->index();
            $table->string('district', 100)->nullable();

            $table->text('accessories')->nullable();
            $table->text('rental_rules')->nullable();

            $table->string('status', 20)->default('draft')->index();
            $table->timestamp('published_at')->nullable()->index();
            $table->timestamps();

            $table->index(['category_id', 'status']);
            $table->index(['user_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
