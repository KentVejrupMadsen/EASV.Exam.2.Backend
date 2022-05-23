<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
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

                    $table->mediumText('error' )
                          ->nullable()
                          ->comment( '' );
                }
            );
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            //
            Schema::dropIfExists( 'security_recaptcha' );
        }
    };
?>
