<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('package_tours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_category_id')->index()->constrained();
            $table->string('title');
            $table->string('slug');
            $table->longText('price');
            $table->longText('itinerary');
            $table->longText('desc');
            $table->string('img');
            $table->integer('views')->default(0);
            $table->string('status');
            $table->date('publish_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_tours');
    }
};
