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
            //
            Schema::create(
                'board_titles',
                function ( Blueprint $table ) 
                {
                    $table->id();
                    
                    $table->string( 'content' )
                          ->unique()
                          ->comment('');
                }
            );

            Schema::create(
                'boards',
                function ( Blueprint $table ) 
                {
                    $table->id();
                    
                    $table->bigInteger( 'kanban_id' )
                          ->unsigned()
                          ->comment('');

                    $table->bigInteger( 'board_title_id' )
                          ->unsigned()
                          ->comment('');

                    $table->mediumText( 'body' )
                          ->comment( '' );
                    
                    $table->timestamps();


                    // References
                    $table->foreign( 'kanban_id' )
                          ->references( 'id' )
                          ->on( 'kanbans' )
                          ->onDelete( 'cascade' );

                    $table->foreign( 'board_title_id' )
                          ->references( 'id' )
                          ->on( 'board_titles' );
                }
            );


            Schema::create(
                'tasks',
                function ( Blueprint $table ) 
                {
                    $table->id();

                    $table->bigInteger( 'board_id' )
                          ->unsigned()
                          ->comment('');

                    $table->longText( 'content' )
                          ->comment('');

                    // References
                    $table->foreign( 'board_id' )
                          ->references( 'id' )
                          ->on( 'boards' )
                          ->onDelete( 'cascade');
                }
            );
        }

        
        public function down()
        {
            //
            Schema::dropIfExists( 'tasks' );
            Schema::dropIfExists( 'boards' );
            Schema::dropIfExists( 'board_titles' );
        }
    };
?>