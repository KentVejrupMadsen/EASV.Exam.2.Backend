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
     *  TODO: Write a description
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
                    
                    $table->bigInteger( 'email_id' )
                          ->unsigned()
                          ->index()
                          ->comment( '' );

                    $table->string( 'token' )
                          ->index()
                          ->comment( '' );
                    
                    $table->timestamp( 'created_at' )
                          ->nullable()
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
            Schema::dropIfExists( 'password_resets' );
        }
    };

?>
