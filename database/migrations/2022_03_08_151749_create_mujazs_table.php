<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMujazsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'mujazs', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'first_name' );
            $table->string( 'last_name' );
            $table->string( 'nickname' )->nullable();
            $table->string( 'generation' )->nullable();
            $table->char( 'sex' );
            $table->string( 'birth_date' )->nullable();
            $table->string( 'death_date' )->nullable();
            $table->longText( 'notes' )->nullable();
            $table->longText( 'biography' )->nullable();
            $table->unsignedBigInteger( 'country_id' )->nullable();
            $table->unsignedBigInteger( 'admin_id' );
            $table->integer( 'mujeez_id' )->nullable();
            $table->foreign( 'country_id' )->references( 'id' )->on( 'countries' );
            $table->foreign( 'admin_id' )->references( 'id' )->on( 'admins' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'mujazs' );
    }
}
