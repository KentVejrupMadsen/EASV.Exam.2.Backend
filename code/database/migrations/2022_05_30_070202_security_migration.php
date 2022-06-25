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
        private const table_names = 'account_states';
        private const column_identity = 'identity';


        // create tables
        public function up(): void
        {
            Schema::create(
                self::table_names,
                function( Blueprint $table )
                {
                    $table->id( self::column_identity );

                    $table->bigInteger( 'account_identity' )
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
                    $table->foreign( 'account_identity' )
                          ->references( self::column_identity )
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
