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
        
        public function up()
        {
            Schema::create( 
                'account_emails', 
                function ( Blueprint $table ) 
                {
                    $table->id( 'identity' )
                          ->primary();

                    $table->string( 'content' )
                          ->unique();
                }
            );


            // Base information for logging in
            Schema::create( 
                'accounts', 
                function( Blueprint $table )
                {
                    $table->id( 'identity' )
                          ->primary();

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

        
        public function down()
        {
            Schema::dropIfExists( 'accounts' );
            Schema::dropIfExists( 'account_emails' );
        }
    };
?>
