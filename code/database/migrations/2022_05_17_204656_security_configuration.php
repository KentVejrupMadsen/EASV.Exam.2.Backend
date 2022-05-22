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
            Schema::create(
                'security_configuration',
                function ( Blueprint $table )
                {
                    $table->id();

                    $table->string('key' )
                          ->index()
                          ->comment('');

                    $table->string('value' )
                          ->nullable()
                          ->index()
                          ->comment('');
                }
            );

            Schema::create(
                Str::lower('security_CSRF_Token'),
                function( Blueprint $table )
                {
                    $table->id();

                    $table->ipAddress('assigned_to')
                          ->comment('');

                    $table->string('secure_token' )
                          ->index()
                          ->comment('');

                    $table->string('secret_token' )
                          ->index()
                          ->comment('');


                    $table->timestamp('issued')
                          ->useCurrent()
                          ->comment('');

                    $table->timestamp('accessed')
                          ->nullable()
                          ->comment('');

                    $table->boolean('activated' )
                          ->default( false )
                          ->comment('');

                    $table->boolean('invalidated' )
                          ->default( false )
                          ->comment('');
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