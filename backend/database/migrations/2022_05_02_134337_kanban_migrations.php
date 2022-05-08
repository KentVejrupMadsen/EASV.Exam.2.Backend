<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    
    return new class extends Migration
    {
        
        public function up()
        {
            Schema::create( 'kanban_titles', 
                function ( Blueprint $table ) 
                {
                    $table->id();

                    $table->string( 'content' )
                          ->unique();
                    
                }
            );

            //
            Schema::create( 'kanbans', 
                function ( Blueprint $table ) 
                {
                    $table->id();

                    $table->bigInteger( 'kanban_title_id' )
                          ->unsigned();
                          
                    $table->bigInteger( 'project_id' )
                          ->unsigned();
                    
                    $table->timestamps();

                    $table->foreign( 'kanban_title_id' )
                          ->references( 'id' )
                          ->on( 'kanban_titles' )
                          ->onDelete( 'CASCADE' );

                    $table->foreign( 'project_id' )
                          ->references( 'id' )
                          ->on( 'projects' )
                          ->onDelete( 'CASCADE' );
                }
            );
        }

        
        public function down()
        {
            //
            Schema::dropIfExists( 'kanbans' );
            Schema::dropIfExists( 'kanban_titles' );
        }
    };
?>