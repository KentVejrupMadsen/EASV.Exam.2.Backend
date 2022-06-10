<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
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
        private const security_configuration_table = 'security_configuration';
        private const security_csrf = 'security_csrf_token';

        // create tables
        public function up(): void
        {
            //
            Schema::create(
                self::security_configuration_table,
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
                 self::security_csrf,
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


        // drop tables
        public function down(): void
        {
            Schema::dropIfExists( self::security_configuration_table );
            Schema::dropIfExists( self::security_csrf );
        }
    };
?>