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
        private const table_name = 'personal_access_tokens';

        // create tables
        public function up(): void
        {
            Schema::create(
                self::table_name,
                function ( Blueprint $table ) 
                {
                    $table->id();

                    $table->morphs( 'tokenable' );
                    $table->string( 'name' );

                    $table->string( 'token', 64 )
                          ->unique();

                    $table->text( 'abilities' )
                          ->nullable();

                    $table->timestamp( 'last_used_at' )
                          ->nullable();
                          
                    $table->timestamps();
                }
            );
        }

        // drop tables
        public function down(): void
        {
            Schema::dropIfExists( self::table_name );
        }
    };
?>