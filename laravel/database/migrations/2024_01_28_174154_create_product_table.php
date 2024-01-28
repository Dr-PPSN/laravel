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
        Schema::create('product', function (Blueprint $table) {
            //https://laravel.com/docs/10.x/migrations#available-column-types
            $table->increments('id');
            $table->string("name")->unique();
            $table->integer("price");
            $table->boolean("is_available")->default(true);
            $table->timestamps();
            //$table->primary("id");    Ist schon in der increments() Methode enthalten
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
