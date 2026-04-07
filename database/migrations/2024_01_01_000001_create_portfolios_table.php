<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description_1')->nullable();
            $table->text('description_2')->nullable();
            $table->string('client_name')->nullable();
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
            $table->string('location')->nullable();
            $table->string('project_date')->nullable();
            $table->string('status')->nullable();
            $table->string('duration')->nullable();
            $table->string('website_url')->nullable();
            $table->string('ios_url')->nullable();
            $table->string('android_url')->nullable();
            $table->text('what_we_built')->nullable();
            $table->text('why_it_was_built')->nullable();
            $table->json('technologies')->nullable();
            $table->string('thumbnail')->nullable();
            $table->json('gallery_images')->nullable();
            $table->integer('sort_order')->nullable()->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
