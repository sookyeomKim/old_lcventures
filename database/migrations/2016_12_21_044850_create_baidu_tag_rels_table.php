<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaiduTagRelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baidu_tag_rels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('baidu_id')->unsigned();
            $table->foreign('baidu_id')
                ->references('id')->on('baidus')
                ->onDelete('cascade');
            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id')
                ->references('id')->on('baidu_tags')
                ->onDelete('cascade');
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
        Schema::dropIfExists('baidu_tag_rels');
    }
}
