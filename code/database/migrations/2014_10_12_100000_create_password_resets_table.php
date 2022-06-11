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
        private const table_name = 'password_resets';

        // create table
        public function up(): void
        {
            Schema::create(
                self::table_name,
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

        // drop table
        public function down(): void
        {
            Schema::dropIfExists( self::table_name );
        }
    };
?>
