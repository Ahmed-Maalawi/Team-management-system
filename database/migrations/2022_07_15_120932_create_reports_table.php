<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id');
            $table->integer('unFilter');
//            -------------------  man ---------------------------
            $table->integer('m_home_clothes_C');
            $table->integer('m_home_clothes_B');
            $table->integer('m_clothes_go_outs_C');
            $table->integer('m_clothes_go_outs_B');
            $table->integer('m_trouser');
            $table->integer('m_A_Class');
            $table->integer('m_suit');
//            --------------------  woman   -------------------
            $table->integer('w_abaya');
            $table->integer('w_home_clothes_C');
            $table->integer('w_home_clothes_B');
            $table->integer('w_clothes_go_outs_C');
            $table->integer('w_clothes_go_outs_B');
            $table->integer('w_headscarf');
            $table->integer('w_A_Class');
//            --------------    children    ---------------------
            $table->integer('c_big_C');
            $table->integer('c_big_B');
            $table->integer('baby');
            $table->integer('c_A_Class');
//            -----------------    other ------------------
            $table->integer('shoes');
            $table->integer('other');
            $table->integer('bags');
            $table->integer('Toys');
            $table->integer('Furniture');
            $table->integer('brides');
            $table->timestamps('');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
};
