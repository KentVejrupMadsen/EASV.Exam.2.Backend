<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    return new class extends Migration
    {
        
        public function up()
        {
            Schema::create( 'project_titles', 
                function ( Blueprint $table ) 
                {
                    $table->id();

                    $table->string( 'content' )
                          ->unqie();
                }
            );


            //
            Schema::create( 'projects', 
                function ( Blueprint $table ) 
                {
                    $table->id();
                    
                    $table->bigInteger( 'account_owner_id' )
                          ->unsigned();

                    $table->bigInteger( 'project_title_id' )
                          ->unsigned();

                    $table->longText( 'description' );
                    $table->json( 'tags' );

                    $table->timestamps();

                    $table->foreign( 'account_owner_id' )
                          ->references( 'id' )
                          ->on( 'accounts' )
                          ->onDelete( 'CASCADE' );

                    $table->foreign( 'project_title_id' )
                          ->references( 'id' )
                          ->on( 'project_titles' )
                          ->onDelete( 'CASCADE' );
                }
            );


            Schema::create( 'member_groups', 
                function ( Blueprint $table ) 
                {
                    $table->id();

                    $table->string( 'content' )
                          ->unique();   
                }
            );


            Schema::create( 'project_members', 
                function ( Blueprint $table ) 
                {
                    $table->id();
                    
                    $table->bigInteger( 'project_id' )
                          ->unsigned();

                    $table->bigInteger( 'account_id' )
                          ->unsigned();

                    $table->bigInteger( 'member_group_id' )
                          ->unsigned();

                    $table->foreign( 'project_id' )
                          ->references( 'id' )
                          ->on( 'projects' )
                          ->onDelete( 'CASCADE' );

                    $table->foreign( 'account_id' )
                          ->references( 'id' )
                          ->on( 'accounts' )
                          ->onDelete( 'CASCADE' );

                    $table->foreign( 'member_group_id' )
                          ->references( 'id' )
                          ->on( 'member_groups' )
                          ->onDelete( 'CASCADE' );
                    
                    
                }
            );
        }

        
        public function down()
        {
            //
            Schema::dropIfExists( 'project_members' );
            Schema::dropIfExists( 'member_groups' );
            Schema::dropIfExists( 'projects' );
            Schema::dropIfExists( 'projects_titles' );
        }
    };
?>