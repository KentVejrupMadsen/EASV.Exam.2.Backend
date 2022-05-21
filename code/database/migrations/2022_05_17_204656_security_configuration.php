<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Support\Str;


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
            Schema::create( 'security_configuration',
                function ( Blueprint $table )
                {
                    $table->id();

                    $table->string('key' )
                          ->index();

                    $table->string('value' )
                          ->nullable()
                          ->index();
                }
            );

            Schema::create( Str::lower('security_CSRF_Token'),
                function( Blueprint $table )
                {
                    $table->id();

                    $table->ipAddress('assigned_to');

                    $table->string('secure_token' )->index();
                    $table->string('secret_token' )->index();


                    $table->timestamp('issued')
                        ->useCurrent();

                    $table->timestamp('accessed')
                        ->nullable();

                    $table->boolean('activated' )
                        ->default( false );

                    $table->boolean('invalidated' )
                        ->default( false );
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
            Schema::dropIfExists( 'security_configuration' );
            Schema::dropIfExists( 'security_csrf_token' );
        }
    };
?>