<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Config;

class CreateMarketPointsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('market_points', function(Blueprint $table) {
            $table->increments('id');
            $table->decimal('lat', 11, 7);
            $table->decimal('lng', 11, 7);
            $table->string('address');
            $table->string('name');

            $table->timestamps();
        });

        Schema::create('market_point_times', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('market_point_id')->unsigned();
            $table->date('date');
            $table->time('starts_at');
            $table->time('ends_at');

            $table->foreign('market_point_id')
                ->references('id')
                ->on('market_points')
                ->onDelete('cascade');
        });

        Schema::create('market_point_times_orders', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('market_point_time_id')->unsigned();
            $table->integer('order_id')->unsigned();

            $table->foreign('market_point_time_id')
                ->references('id')
                ->on('market_points')
                ->onDelete('cascade');
            $table->foreign('order_id')
                ->references('id')
                ->on(Config::get('market_points.orders_table'))
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('category_translations');
        Schema::drop('categories');
    }

}
