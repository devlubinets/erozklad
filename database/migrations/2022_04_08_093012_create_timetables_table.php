<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            //columns
            $table->id();
            $table->unsignedBigInteger('institution_id');
            $table->unsignedBigInteger('school_class_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('rule_education_process_id');
            $table->enum('day',[
                'monday',
                'tuesday',
                'wednesday',
                'thursday',
                'friday',
                'saturday',
                'sunday',
            ]);
            $table->dateTimeTz('start_time');
            $table->enum('status', [
                'lesson has begun',
                'lesson canceled'
            ]);
            $table->timestamps();

            //relationships
            $table->foreign('institution_id')->references('id')
                ->on('institutions')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreign('school_class_id')->references('id')
                ->on('school_classes')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreign('subject_id')->references('id')
                ->on('subjects')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreign('rule_education_process_id')->references('id')
                ->on('rule_education_processes')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timetables');
    }
}
