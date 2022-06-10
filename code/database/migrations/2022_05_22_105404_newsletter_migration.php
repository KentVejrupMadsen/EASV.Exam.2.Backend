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
        //
        private const table_name = 'newsletter_users';

        // create tables
        public function up(): void
        {
            //
            Schema::create(
                self::table_name,
                function( Blueprint $table )
                {
                    $table->id();

                    $table->bigInteger( 'email_identity' )
                          ->unsigned()
                          ->index()
                          ->comment( 'which email has been assigned to the newsletter system' );

                    $table->bigInteger( 'account_identity' )
                          ->unsigned()
                          ->nullable()
                          ->comment( 'if the email has an account associated. the user has the ' .
                                     'option to set it though his settings and the "newsletter" will be associated' .
                                     'with his account' );

                    $table->json( 'options' )
                          ->comment( '' );

                    //
                    $table->foreign( 'account_identity' )
                          ->references( 'identity' )
                          ->on( 'accounts' );

                    $table->foreign( 'email_identity' )
                          ->references( 'identity' )
                          ->on( 'account_emails' );
                }
            );
        }


        // drop tables
        public function down(): void
        {
            Schema::dropIfExists( self::table_name );
        }
    };
?>