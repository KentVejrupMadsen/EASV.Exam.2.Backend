<?php
      use Illuminate\Database\Migrations\Migration;
      use Illuminate\Database\Schema\Blueprint;
      use Illuminate\Support\Facades\Schema;


      return new class extends Migration
      {
            public function up()
            {
                  //
                  Schema::create( 'countries',
                        function( Blueprint $table )
                        {
                        $table->id();

                        $table->string( 'country_name' )
                              ->unique()
                              ->index();

                        $table->string( 'country_acronym', 25 )
                              ->index();
                        }
                  );

                  Schema::create( 'zip_codes',
                        function( Blueprint $table )
                        {
                        $table->id();

                        $table->string( 'area_name' )
                              ->comment( '' );

                        $table->integer( 'zip_number' )
                              ->unsigned()
                              ->comment( '' );

                        $table->bigInteger( 'country_id' )
                              ->unsigned()
                              ->comment( '' );

                        // References
                        $table->foreign( 'country_id' )
                              ->references( 'id' )
                              ->on( 'countries' );
                        }
                  );


                  Schema::create( 'account_information_options',
                        function( Blueprint $table )
                        {
                        $table->id();

                        $table->bigInteger( 'account_id' )
                              ->unsigned()
                              ->unique()
                              ->comment( '' );

                        $table->json( 'settings' )
                              ->comment( '' );

                        $table->timestamps();

                        // References
                        $table->foreign( 'account_id' )
                              ->references( 'id' )
                              ->on( 'accounts' )
                              ->onDelete( 'CASCADE' );
                        }
                  );

                  Schema::create( 'person_name_first',
                        function( Blueprint $table )
                        {
                        $table->id();

                        $table->string( 'content' )
                              ->unique()
                              ->comment( '' );
                        }
                  );

                  Schema::create( 'person_name_middle_and_last',
                        function( Blueprint $table )
                        {
                        $table->id();

                        $table->string( 'content' )
                              ->unique()
                              ->comment( '' );
                        }
                  );

                  Schema::create( 'person_name',
                        function( Blueprint $table )
                        {
                        $table->id();

                        $table->bigInteger( 'account_information_id' )
                              ->unsigned()
                              ->unique()
                              ->comment( '' );

                        $table->bigInteger( 'person_name_first_id' )
                              ->unsigned()
                              ->comment( '' );

                        $table->bigInteger( 'person_name_lastname_id' )
                              ->unsigned()
                              ->comment( '' );

                        $table->json( 'person_name_middlename' )
                              ->nullable()
                              ->comment( '' );

                        // References
                        $table->foreign( 'account_information_id' )
                              ->references( 'id' )
                              ->on( 'account_information_options' )
                              ->onDelete( 'CASCADE' );

                        $table->foreign( 'person_name_first_id' )
                              ->references( 'id' )
                              ->on( 'person_name_first' );

                        $table->foreign( 'person_name_lastname_id' )
                              ->references( 'id' )
                              ->on( 'person_name_middle_and_last' );
                        }
                  );

                  Schema::create( 'address_road_names',
                        function( Blueprint $table )
                        {
                        $table->id();

                        $table->string( 'content' )
                              ->unique()
                              ->comment( '' );
                        }
                  );

                  Schema::create( 'addresses',
                        function( Blueprint $table )
                        {
                        $table->id();

                        $table->bigInteger( 'account_information_id' )
                              ->unsigned()
                              ->unique()
                              ->comment( '' );

                        $table->bigInteger( 'road_name_id' )
                              ->unsigned()
                              ->comment( '' );

                        $table->integer( 'road_number' )
                              ->comment( '' );

                        $table->string( 'levels' )
                              ->index()
                              ->comment( '' );

                        $table->bigInteger( 'country_id' )
                              ->unsigned()
                              ->index()
                              ->comment( '' );

                        $table->bigInteger( 'zip_code_id' )
                              ->unsigned()
                              ->index()
                              ->comment( '' );

                        // References
                        $table->foreign( 'country_id' )
                              ->references( 'id' )
                              ->on( 'countries' );

                        $table->foreign( 'zip_code_id' )
                              ->references( 'id' )
                              ->on( 'zip_codes' );

                        $table->foreign( 'road_name_id' )
                              ->references( 'id' )
                              ->on( 'address_road_names' );

                        $table->foreign( 'account_information_id' )
                              ->references( 'id' )
                              ->on( 'account_information_options' )
                              ->onDelete( 'CASCADE' );
                        }
                  );
            }


            public function down()
            {
                  //
                  Schema::dropIfExists( 'account_information_options' );
                  Schema::dropIfExists( 'countries' );
                  Schema::dropIfExists( 'addresses' );
                  Schema::dropIfExists( 'zip_codes' );
            }
      };
?>