<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectMetalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_metals', function (Blueprint $table) {
            $table->bigInteger('project_id')->unsigned();
            $table->bigInteger('metals_id')->unsigned();
            $table->primary(['project_id', 'metals_id']);

        });

        Schema::table('project_metals', function (Blueprint $table) {
            $table->foreign('project_id')
                ->references('id')
                ->on('projects')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('metals_id')
                ->references('id')
                ->on('metals')
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
        Schema::dropIfExists('project_metals');
    }
}
