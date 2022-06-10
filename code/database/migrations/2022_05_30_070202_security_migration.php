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
        private const table_names = 'account_states';

        // create tables
        public function up(): void
        {
            Schema::create(
                self::table_names,
                function( Blueprint $table )
                {
                    $table->id();

                    $table->bigInteger( 'account_id' )
                          ->unsigned()
                          ->unique()
                          ->comment( '' );

                    $table->boolean( 'deactivated' )
                          ->default( false )
                          ->comment( '' );

                    $table->boolean( 'writeable_disabled' )
                          ->default( false )
                          ->comment( '' );

                    $table->boolean( 'locked' )
                          ->default( false )
                          ->comment( '' );

                    $table->boolean( 'archived' )
                          ->default( false )
                          ->comment( '' );

                    //
                    $table->foreign( 'account_id' )
                          ->references( 'id' )
                          ->on( 'accounts' )
                          ->onDelete( 'cascade' );
                }
            );
        }

        // drop tables
        public function down(): void
        {
            Schema::dropIfExists( self::table_names );
        }
    };
?>