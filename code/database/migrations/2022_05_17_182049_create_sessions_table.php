<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    /**
     *  TODO: Write a description
     */
    return new class extends Migration
    {
        public function up()
        {
            Schema::create(
                'sessions',
                function ( Blueprint $table )
                {
                    $table->id( 'index' );

                    $table->string( 'id' )
                          ->unique();
                    $table->foreignId( 'user_id' )
                          ->nullable()
                          ->index();
                    $table->ipAddress( 'ip_address' )
                          ->nullable();
                    $table->text( 'user_agent' )
                          ->nullable();
                    $table->text( 'payload' );
                    $table->integer( 'last_activity' )
                          ->index();
                }
            );
        }


        public function down()
        {
            Schema::dropIfExists( 'sessions' );
        }
    };
?>