<?php
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
            Schema::create( 'security_recaptcha',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->boolean('success' );
                    $table->double('score' );

                    $table->timestamp('at_date' );

                    $table->string('hostname' );

                    $table->mediumText('error' )
                          ->nullable();
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
