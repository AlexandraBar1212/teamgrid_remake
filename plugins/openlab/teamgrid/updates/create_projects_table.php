<?php namespace Openlab\Teamgrid\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('openlab_teamgrid_projects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string("name");
            $table->string("customer");
            $table->string("project_manager");

            $table->timestamp('due_date')->nullable();

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('openlab_teamgrid_projects');
    }
}
