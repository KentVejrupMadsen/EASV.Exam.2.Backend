<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    use Illuminate\Support\Str;

    
    return new class extends Migration
    {
        
        public function up()
        {
            Schema::create( 'account_emails', 
                function ( Blueprint $table ) 
                {
                    $table->id();

                    $table->string('content')
                          ->unique();
                }
            );


            // Base information for logging in
            Schema::create( 'accounts', 
                function( Blueprint $table )
                {
                    $table->id();

                    $table->string( 'username' )
                          ->unique();
                    
                    $table->bigInteger( 'email_id' )
                          ->unsigned()
                          ->unique();

                    $table->timestamp( 'email_verified_at' )
                          ->nullable();

                    $table->string( 'password' );
                    
                    $table->rememberToken();
                    
                    $table->timestamps();

                    $table->foreign( 'email_id' )
                          ->references( 'id' )
                          ->on( 'account_emails' );
                }
            );


            Schema::create( 'countries',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->string('country_name' )
                        ->unique()
                        ->index();

                    $table->string('country_acronym', 25 )
                          ->index();

                }
            );


            Schema::create( 'zip_codes',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->string('area_name' );
                    $table->integer('zip_number' )
                          ->unsigned();

                    $table->bigInteger('country_id' )
                          ->unsigned();

                    $table->foreign( 'country_id' )
                          ->references( 'id' )
                          ->on( 'countries' );
                }
            );

            /** Used for additional information */
            Schema::create( 'account_informations',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->bigInteger( 'account_id' )
                          ->unsigned()
                          ->unique();

                    $table->timestamps();

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

                    $table->string('content')
                          ->unique();
                }
            );

            Schema::create( 'person_name_middle_and_last',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->string('content')
                          ->unique();
                }
            );

            Schema::create( 'person_name',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->bigInteger( 'account_information_id' )
                          ->unsigned()
                          ->unique();

                    $table->bigInteger('person_name_first_id' )
                          ->unsigned();

                    $table->bigInteger('person_name_lastname_id' )
                          ->unsigned();

                    $table->json('person_name_middlename' )
                          ->nullable();

                    $table->foreign( 'account_information_id' )
                          ->references( 'id' )
                          ->on( 'account_informations' )
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

                    $table->string('content')
                          ->unique();
                }
            );


            Schema::create( 'addresses',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->bigInteger('account_information_id' )
                          ->unsigned()
                          ->unique();

                    $table->bigInteger('road_name_id' )
                          ->unsigned();

                    $table->integer('road_number' );

                    $table->string('levels' );

                    $table->bigInteger('country_id')
                          ->unsigned();

                    $table->bigInteger('zip_code_id')
                          ->unsigned();

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
                          ->on( 'account_informations' )
                          ->onDelete( 'CASCADE' );
                }
            );


            Schema::create( 'newsletter_users',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->bigInteger('email_id' )
                          ->unsigned()
                          ->index();

                    $table->foreign( 'email_id' )
                          ->references( 'id' )
                          ->on( 'account_emails' );
                }
            );
        }

        
        public function down()
        {
            Schema::dropIfExists( 'newsletter_users' );
            Schema::dropIfExists( 'accounts_information' );
            Schema::dropIfExists( 'countries' );
            Schema::dropIfExists( 'addresses' );
            Schema::dropIfExists( 'zip_codes' );
            Schema::dropIfExists( 'accounts' );
            Schema::dropIfExists( 'account_emails' );
        }
    };
?>
