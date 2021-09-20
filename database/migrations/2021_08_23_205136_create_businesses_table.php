<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('__id', 50)->unique();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('category_id')->constrained();
            $table->string('business_name', 100);
            $table->string('address', 150);
            $table->string('city', 100);
            $table->string('state', 100);
            $table->string('postal_code', 10)->nullable();
            $table->decimal('latitude', 11, 9);
            $table->decimal('longitude', 12, 9);
            $table->string('location', 150);
            $table->string('geohash', 20)->nullable();
            $table->string('telephone_number', 20)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('website', 50)->nullable();
            $table->string('image_url')->nullable();
            $table->string('header_image')->nullable();
            $table->unsignedTinyInteger('is_open')->nullable()->default(1);
            $table->unsignedTinyInteger('verified')->nullable()->default(0);
            $table->unsignedTinyInteger('claimed')->nullable()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
}
