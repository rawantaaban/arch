<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Export extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('docs', function (Blueprint $table) {
            $table->id();
            $table->integer('type')->nullable();
            $table->string('doc_no')->nullable();
            $table->date('doc_date')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('subject')->nullable();
            $table->String('hamish')->nullable();
            $table->integer('importance')->nullable();
            $table->String('also_send_to')->nullable();
            $table->string('exp_imp_no')->nullable();
            $table->date('exp_imp_date')->nullable();
            $table->string('attach')->nullable();
            $table->string('notes')->nullable();
            $table->string('created_by')->nullable();
            $table->string('is_updated')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('is_deleted')->nullable();
            $table->string('deleted_by')->nullable();
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
            Schema::dropIfExists('docs');

    }
}
