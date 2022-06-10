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
                'password_resets',
                function( Blueprint $table )
                {
                    $table->id();
                    
                    $table->bigInteger( 'email_identity' )
                          ->unsigned()
                          ->index()
                          ->comment( 'Which e-mail address requested that they had forgot their password' );

                    $table->string( 'token' )
                          ->index()
                          ->comment( '' );
                    
                    $table->timestamp( 'created_at' )
                          ->nullable()
                          ->comment( 'at which point the request was created.' );

                    // References
                    $table->foreign( 'email_identity' )
                          ->references( 'identity' )
                          ->on( 'account_emails' );
                }
            );
        }
        
        public function down()
        {
            Schema::dropIfExists( 'password_resets' );
        }
    };
?>
