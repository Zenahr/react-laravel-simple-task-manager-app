<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
      Schema::create('tasks', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->unsignedInteger('project_id');
        $table->boolean('is_completed')->default(0);
        $table->timestamps();
      });
    }
}
