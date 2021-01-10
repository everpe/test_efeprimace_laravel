<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->longText('description')->nullable();
            $table->year('relase_year')->nullable();
            $table->time('rental_duration')->default('00:00:00');
            $table->float('rental_rate', 4, 2);
            $table->tinyInteger('length')->nullable();
            $table->float('replacement_cost', 5, 2);
            $table->string('rating', 10)->nullable();
            $table->string('special_features', 100)->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreignId('lenguaje_id')->constrained() //Film Lenguaje
                                            ->onUpdate('cascade')
                                            ->onDelete('cascade'); 

            $table->foreignId('original_lenguaje_id')->constrained('lenguajes') // Original film lenguaje
                                                    ->nullable()  
                                                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
