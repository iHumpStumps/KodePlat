<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_tags', function (Blueprint $table) {
            $table->bigInteger('project_id')->unsigned();
            $table->bigInteger('tags_id')->unsigned();
            $table->primary(['project_id', 'tags_id']);
        });

        Schema::table('project_tags', function (Blueprint $table) {
            $table->foreign('project_id')
                ->references('id')
                ->on('projects')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('tags_id')
                ->references('id')
                ->on('tags')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_tags');
    }
}
