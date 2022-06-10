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
          private const account_information_options_table = 'account_information_options';

          private const countries_table = 'countries';
          private const zip_codes_table = 'zip_codes';

          private const person_name_first_table = 'person_name_first';
          private const person_name_middle_and_last_table = 'person_name_middle_and_last';
          private const person_name_table = 'person_name';

          private const address_road_name_table = 'address_road_names';
          private const addresses_table = 'addresses';


            // create tables
            public function up(): void
            {
                  //
                  Schema::create( self::countries_table,
                        function( Blueprint $table )
                        {
                        $table->id();

                        $table->string( 'country_name' )
                              ->unique()
                              ->index()
                              ->comment('');

                        $table->string( 'country_acronym', 25 )
                              ->index()
                              ->comment('');
                        }
                  );

                  Schema::create( self::zip_codes_table,
                        function( Blueprint $table )
                        {
                        $table->id();

                        $table->string( 'area_name' )
                              ->index()
                              ->comment( '' );

                        $table->integer( 'zip_number' )
                              ->unsigned()
                              ->index()
                              ->comment( '' );

                        $table->bigInteger( 'country_id' )
                              ->unsigned()
                              ->index()
                              ->comment( '' );

                        // References
                        $table->foreign( 'country_id' )
                              ->references( 'id' )
                              ->on( 'countries' );
                        }
                  );


                  Schema::create( self::account_information_options_table,
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

                  Schema::create( self::person_name_first_table,
                        function( Blueprint $table )
                        {
                        $table->id();

                        $table->string( 'content' )
                              ->unique()
                              ->comment( '' );
                        }
                  );

                  Schema::create( self::person_name_middle_and_last_table,
                        function( Blueprint $table )
                        {
                        $table->id();

                        $table->string( 'content' )
                              ->unique()
                              ->comment( '' );
                        }
                  );

                  Schema::create( self::person_name_table,
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
                              ->nullable()
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

                  Schema::create( self::address_road_name_table,
                        function( Blueprint $table )
                        {
                        $table->id();

                        $table->string( 'content' )
                              ->unique()
                              ->comment( '' );
                        }
                  );

                  Schema::create( self::addresses_table,
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


            // drop tables
            public function down(): void
            {
                Schema::dropIfExists( self::account_information_options_table );

                Schema::dropIfExists( self::person_name_table );
                Schema::dropIfExists( self::person_name_first_table );
                Schema::dropIfExists( self::person_name_middle_and_last_table );

                Schema::dropIfExists( self::zip_codes_table );
                Schema::dropIfExists( self::countries_table );

                Schema::dropIfExists( self::addresses_table );
                Schema::dropIfExists( self::address_road_name_table );
            }
      };
?>