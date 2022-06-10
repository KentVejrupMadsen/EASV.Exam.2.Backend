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

                    $table->bigInteger( 'email_id' )
                          ->unsigned()
                          ->index()
                          ->comment('');

                    $table->bigInteger( 'account_id' )
                          ->unsigned()
                          ->nullable();

                    $table->json( 'options' )
                          ->comment( '' );

                    //
                    $table->foreign( 'account_id' )
                          ->references( 'id' )
                          ->on( 'accounts' );

                    $table->foreign( 'email_id' )
                          ->references( 'id' )
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