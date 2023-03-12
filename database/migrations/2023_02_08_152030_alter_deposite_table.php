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
        Schema::table('deposite', function (Blueprint $table) {
            $table->string('type')->after('amount');
            $table->string('details')->after('type');
            $table->integer('transfer_id')->after('details')->nullable();
            $table->float('balance')->after('transfer_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
