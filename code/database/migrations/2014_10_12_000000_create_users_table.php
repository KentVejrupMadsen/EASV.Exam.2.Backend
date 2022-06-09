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
                    $table->id();

                    $table->string( 'content' )
                          ->unique();
                }
            );


            // Base information for logging in
            Schema::create( 
                'accounts', 
                function( Blueprint $table )
                {
                    $table->id();

                    $table->string( 'username' )
                          ->unique()
                          ->comment('');
                    
                    $table->bigInteger( 'email_id' )
                          ->unsigned()
                          ->unique()
                          ->comment('');

                    $table->timestamp( 'email_verified_at' )
                          ->nullable();

                    $table->string( 'password' )
                          ->comment( '' );
                    
                    $table->rememberToken();
                    $table->timestamps();

                    $table->json( 'settings' )
                          ->comment( '' );

                    // References
                    $table->foreign( 'email_id' )
                          ->references( 'id' )
                          ->on( 'account_emails' );
                }
            );
        }

        
        public function down()
        {
            Schema::dropDatabaseIfExists(env('DB_DATABASE'));
            Schema::dropIfExists( 'accounts' );
            Schema::dropIfExists( 'account_emails' );
        }
    };
?>
