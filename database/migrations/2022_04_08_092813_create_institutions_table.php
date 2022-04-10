<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateinstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            //columns
            $table->id();
            $table->string('name', 85);
            $table->enum('type', [
                'gymnasium',
                'school'
            ]);
            $table->unsignedBigInteger('city_id');
            $table->timestamps();

            //relationships
            $table->foreign('city_id')->references('id')->on('cities')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}
