<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string('comp_name')->unique()->nullable(false);
            $table->integer('comp_level');
            $table->timestamp('updated_at')->useCurrent('CURRENT_TIMESTAMP')->nullable();
            $table->timestamp('created_at')->useCurrent('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->nullable();
            //$table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            //$table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
}
