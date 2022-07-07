<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License
        * (https://github.com/KentVejrupMadsen/EASV.Exam.2.Backend/blob/main/License.md)
        * (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    /**
     *
     */
    return new class extends Migration
    {
        // constants
        private const account_mail_table = 'account_emails';
        private const account_table = 'accounts';

        private const column_identity = 'identity';


        // create tables
        public function up(): void
        {
            // for data consistency as other services also make use of an accounts email
            Schema::create( 
                self::account_mail_table,
                function ( Blueprint $table ) 
                {
                    $table->id( self::column_identity );

                    $table->string( 'content' )
                          ->unique()
                          ->comment( 'email address. only unique mail addresses are allowed.' );
                }
            );


            // Base information for logging in
            Schema::create( 
                self::account_table,
                function( Blueprint $table )
                {
                    $table->id( self::column_identity );

                    $table->string( 'username' )
                          ->unique()
                          ->comment( 'Account username used as an identifier when logging in.' );
                    
                    $table->bigInteger( 'account_email_identity' )
                          ->unsigned()
                          ->unique()
                          ->comment( 'maps to the accounts email by id and newsletter email if the account has one' );

                    $table->timestamp( 'email_verified_at' )
                          ->nullable()
                          ->comment( 'At what point a client has verified his account though the api.' );

                    $table->string( 'password' )
                          ->comment( 'used when authenticating as a client.' );


                    $table->rememberToken();
                    $table->timestamps();

                    $table->json( 'settings' )
                          ->comment( 'User settings for their account. Used by frontend.' );

                    // References
                    $table->foreign( 'account_email_identity' )
                          ->references( 'identity' )
                          ->on( 'account_emails' );
                }
            );
        }

        // drop tables
        public function down(): void
        {
            Schema::dropIfExists( self::account_table );
            Schema::dropIfExists( self::account_mail_table );
        }
    };
?>
