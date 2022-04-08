<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuleEducationProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rule_education_processes', function (Blueprint $table) {
            //Порядок проведення навчального процесу
            //columns
            $table->id();
            $table->enum('even_odd', [
                'парні',
                'непарні',
                'ні'
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rule_education_processes');
    }
}
