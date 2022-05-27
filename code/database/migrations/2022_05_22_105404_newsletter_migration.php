<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    /**
     *  TODO: Write a description
     */
    return new class extends Migration
    {
        /**
         * @return void
         */
        public function up()
        {
            //
            Schema::create(
                'newsletter_users',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->bigInteger( 'email_id' )
                          ->unsigned()
                          ->index()
                          ->comment('');

                    $table->json('options' )
                          ->comment( '' );

                    //
                    $table->foreign( 'email_id' )
                          ->references( 'id' )
                          ->on( 'account_emails' );
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
            Schema::dropIfExists( 'newsletter_users' );
        }
    };
?>