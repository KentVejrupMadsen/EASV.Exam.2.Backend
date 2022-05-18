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


            Schema::create( 'accounts', 
                function( Blueprint $table )
                {
                    $table->id();

                    $table->string( 'username' )->unique();
                    $table->string( 'name' );
                    
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
                          ->on( 'account_emails' )
                          ->onDelete( 'CASCADE' );
                }
            );


            Schema::create( Str::lower('security_CSRF_Token'),
                function( Blueprint $table )
                {
                    $table->id();

                    $table->ipAddress('assigned_to');

                    $table->string('secure_token' )->index();
                    $table->string('secret_token' )->index();


                    $table->timestamp('issued')
                          ->useCurrent();

                    $table->timestamp('accessed')
                          ->nullable();

                    $table->boolean('activated' )
                          ->default( false );

                    $table->boolean('invalidated' )
                          ->default( false );
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
                        ->on( 'account_emails' )
                        ->onDelete( 'CASCADE' );
                }
            );
        }

        
        public function down()
        {
            Schema::dropIfExists( 'accounts' );
            Schema::dropIfExists( 'newsletter_users' );
            Schema::dropIfExists( 'account_emails' );
            Schema::dropIfExists( 'security_csrf_token' );
        }
    };
?>
