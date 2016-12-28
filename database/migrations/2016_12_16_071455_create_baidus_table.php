<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaidusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baidus', function (Blueprint $table) {
            $table->increments('id');

            $table->enum('c_i_level', ['standard', 'silver', 'gold', 'premium'])->default('standard');
            $table->string('c_name');
            $table->string('c_addr');
            $table->string('c_m_name');
            $table->string('c_m_phone');
            $table->string('c_m_email');
            $table->string('c_first_cob');
            $table->string('c_second_cob');
            $table->string('c_crn');
            $table->string('c_rep_name');
            $table->string('c_rep_phone');
            $table->text('c_intro');
            $table->string('weekdays_times');
            $table->string('weekend_times');
            $table->string('holiday_times');
            $table->string('c_holiday');
            $table->string('c_avg_price');
            $table->string('c_traffic');
            $table->string('c_homepage_url')->nullable();
            $table->string('c_log_img');
            $table->string('c_bl_img');
            $table->string('c_rep_img')->nullable();
            $table->string('c_add_img1')->nullable();
            $table->string('c_add_img2')->nullable();
            $table->string('c_add_img3')->nullable();
            $table->string('c_add_img4')->nullable();
            $table->string('c_add_img5')->nullable();
            $table->string('c_add_img6')->nullable();
            $table->string('c_add_img7')->nullable();
            $table->string('c_add_img8')->nullable();
            $table->string('c_add_video')->nullable();
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
        Schema::dropIfExists('baidus');
    }
}
