<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIjazasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'ijazas', function ( Blueprint $table ) {
            $table->id();
            $table->unsignedBigInteger( 'mujaz_id' );
            $table->unsignedBigInteger( 'mujeez_id' );
            $table->foreign( 'mujaz_id' )->references( 'id' )->on( 'mujazs' );
            $table->foreign( 'mujeez_id' )->references( 'id' )->on( 'mujazs' );
            $table->string( 'document' )->nullable();
            $table->longText( 'location' )->nullable();
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
        Schema::dropIfExists( 'ijazas' );
    }
}
