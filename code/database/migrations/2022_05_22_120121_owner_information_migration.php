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

          private const levels_table = 'apartment_levels';

          private const column_identity = 'identity';


          // create tables
          public function up(): void
          {
              Schema::create( self::countries_table,
                  function( Blueprint $table )
                  {
                      $table->id( self::column_identity );

                      $table->string( 'country_name' )
                            ->unique()
                            ->index()
                            ->comment( 'the accurate name of a specific country in english' );

                      $table->string( 'country_acronym', 25 )
                            ->index()
                            ->comment( 'the acronym for the given countries' );
                  }
              );

              Schema::create( self::zip_codes_table,
                  function( Blueprint $table )
                  {
                      $table->id( self::column_identity );

                      $table->string( 'area_name' )
                            ->index()
                            ->comment( '' );

                      $table->integer( 'zip_number' )
                            ->unsigned()
                            ->index()
                            ->comment( '' );

                      $table->bigInteger( 'country_identity' )
                            ->unsigned()
                            ->index()
                            ->comment( '' );

                        // References
                      $table->foreign( 'country_identity' )
                            ->references( self::column_identity )
                            ->on( 'countries' );
                  }
              );


              Schema::create( self::account_information_options_table,
                  function( Blueprint $table )
                  {
                      $table->id( self::column_identity );

                      $table->bigInteger( 'account_identity' )
                            ->unsigned()
                            ->unique()
                            ->comment( '' );

                      $table->json( 'settings' )
                            ->comment( '' );

                      $table->timestamps();

                        // References
                      $table->foreign( 'account_identity' )
                            ->references( self::column_identity )
                            ->on( 'accounts' )
                            ->onDelete( 'CASCADE' );
                  }
              );

              Schema::create( self::person_name_first_table,
                  function( Blueprint $table )
                  {
                        $table->id( self::column_identity );

                        $table->string( 'content' )
                              ->unique()
                              ->comment( 'a given persons firstname' );
                  }
              );

              Schema::create( self::person_name_middle_and_last_table,
                  function( Blueprint $table )
                  {
                      $table->id( self::column_identity );

                      $table->string( 'content' )
                            ->unique()
                            ->comment( 'a given persons surname or middle name' );
                  }
              );

              Schema::create( self::person_name_table,
                  function( Blueprint $table )
                  {
                      $table->id( self::column_identity );

                      $table->bigInteger( 'account_information_identity' )
                            ->unsigned()
                            ->unique()
                            ->comment( '' );

                      $table->bigInteger( 'person_name_first_identity' )
                            ->unsigned()
                            ->comment( '' );

                      $table->bigInteger( 'person_name_lastname_identity' )
                            ->unsigned()
                            ->nullable()
                            ->comment( '' );

                      $table->json( 'person_name_middlename' )
                            ->nullable()
                            ->comment( '' );

                        // References
                      $table->foreign( 'account_information_identity' )
                            ->references( self::column_identity )
                            ->on( 'account_information_options' )
                            ->onDelete( 'CASCADE' );

                      $table->foreign( 'person_name_first_identity' )
                            ->references( self::column_identity )
                            ->on( 'person_name_first' );

                      $table->foreign( 'person_name_lastname_identity' )
                            ->references( self::column_identity )
                            ->on( 'person_name_middle_and_last' );
                  }
              );

              Schema::create( self::address_road_name_table,
                  function( Blueprint $table )
                  {
                        $table->id( self::column_identity );

                        $table->string( 'content' )
                              ->unique()
                              ->comment( 'A given road address name.' );
                  }
              );

              Schema::create( self::levels_table,
                  function( Blueprint $table )
                  {
                        $table->id( self::column_identity );

                        $table->string( 'content' )
                              ->unique()
                              ->comment( 'which apartment level direction an given person lives in.' );
                  }
              );

              Schema::create( self::addresses_table,
                  function( Blueprint $table )
                  {
                        $table->id( self::column_identity );

                        $table->bigInteger( 'account_information_identity' )
                              ->unsigned()
                              ->unique()
                              ->comment( '' );

                        $table->bigInteger( 'road_name_identity' )
                              ->unsigned()
                              ->comment( '' );

                        $table->integer( 'road_number' )
                              ->comment( '' );

                        $table->bigInteger( 'level_identity' )
                              ->unsigned();

                        $table->bigInteger( 'country_identity' )
                              ->unsigned()
                              ->index()
                              ->comment( '' );

                        $table->bigInteger( 'zip_code_identity' )
                              ->unsigned()
                              ->index()
                              ->comment( '' );

                        // References
                        $table->foreign( 'country_identity' )
                              ->references( self::column_identity )
                              ->on( 'countries' );

                        $table->foreign( 'level_identity' )
                                ->references( self::column_identity )
                                ->on( self::levels_table );

                        $table->foreign( 'zip_code_identity' )
                              ->references( self::column_identity )
                              ->on( self::zip_codes_table );

                        $table->foreign( 'road_name_identity' )
                              ->references( self::column_identity )
                              ->on( self::address_road_name_table );

                        $table->foreign( 'account_information_identity' )
                              ->references( self::column_identity )
                              ->on( self::account_information_options_table )
                              ->onDelete( 'CASCADE' );
                  }
              );
          }


            // drop tables
          public function down(): void
          {
              Schema::dropIfExists( self::person_name_table );
              Schema::dropIfExists( self::addresses_table );

              Schema::dropIfExists( self::account_information_options_table );

              Schema::dropIfExists( self::person_name_first_table );
              Schema::dropIfExists( self::person_name_middle_and_last_table );

              Schema::dropIfExists( self::zip_codes_table );
              Schema::dropIfExists( self::countries_table );

              Schema::dropIfExists( self::address_road_name_table );
          }
     };
?>