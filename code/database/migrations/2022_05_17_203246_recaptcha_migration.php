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
     *  TODO: Write a description
     */
    return new class extends Migration
    {
        public function up()
        {
            //
            Schema::create(
                'security_recaptcha',
                function( Blueprint $table )
                {
                    $table->id()
                          ->comment( '' );

                    $table->boolean( 'success' )
                          ->comment( '' );

                    $table->double( 'score' )
                          ->comment( '' );

                    $table->timestamp( 'at_date' )
                          ->comment( '' );

                    $table->string( 'hostname' )
                          ->comment( '' );

                    $table->mediumText( 'error' )
                          ->nullable()
                          ->comment( '' );
                }
            );
        }

        
        public function down()
        {
            //
            Schema::dropIfExists( 'security_recaptcha' );
        }
    };
?>
