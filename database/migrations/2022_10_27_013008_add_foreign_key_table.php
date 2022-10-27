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
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable()->unique();
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
        });

        Schema::table('feedback', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->unique();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });

        Schema::table('report', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id')->nullable()->unique();
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');

        });

        Schema::table('transaction', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->unique();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');

        });

        Schema::table('transaction', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id')->nullable()->unique();
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');

        });

        Schema::table('transaction_detail', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id')->nullable()->unique();
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');

        });
    }
};
