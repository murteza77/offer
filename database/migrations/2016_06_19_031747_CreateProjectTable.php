<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('details');
            $table->timestamps('date');
            $table->softDeletes(); 
        });
        DB::statement('ALTER TABLE projects ADD FULLTEXT search(title)');
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    public function down()
    {
      Schema::table('projects', function($table) {
            $table->dropIndex('search');
        });
        Schema::drop('projects');
    }
}
