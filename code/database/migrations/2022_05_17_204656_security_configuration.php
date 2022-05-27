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
     *
     */
    return new class extends Migration
    {
        public function up()
        {
            //
            Schema::create(
                'security_configuration',
                function ( Blueprint $table )
                {
                    $table->id();

                    $table->string( 'key' )
                          ->index()
                          ->comment( '' );

                    $table->json( 'value' )
                          ->nullable()
                          ->comment( '' );
                }
            );

            Schema::create(
                 'security_csrf_token',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->ipAddress( 'assigned_to' )
                          ->comment( '' );

                    $table->string( 'secure_token' )
                          ->index()
                          ->comment( '' );

                    $table->string( 'secret_token' )
                          ->index()
                          ->comment( '' );


                    $table->timestamp( 'issued' )
                          ->useCurrent()
                          ->comment( '' );

                    $table->timestamp( 'accessed' )
                          ->nullable()
                          ->comment( '' );

                    $table->boolean( 'activated' )
                          ->default( false )
                          ->comment( '' );

                    $table->boolean('invalidated' )
                          ->default( false )
                          ->comment( '' );
                }
            );

        }


        public function down()
        {
            //
            Schema::dropIfExists( 'security_configuration' );
            Schema::dropIfExists( 'security_csrf_token' );
        }
    };
?>