<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    return new class extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create(
                'account_states',
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

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            //
            Schema::dropIfExists( 'account_state' );
        }
    };
?>