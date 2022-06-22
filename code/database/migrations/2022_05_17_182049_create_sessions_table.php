<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    /**
     *
     */
    return new class extends Migration
    {
        private const table_name = 'sessions';

        // create tables
        public function up(): void
        {
            Schema::create(
                self::table_name,
                function ( Blueprint $table )
                {
                    $table->id( 'index' );

                    $table->string( 'id' )
                          ->unique();

                    $table->foreignId( 'user_id' )
                          ->nullable()
                          ->index();

                    $table->ipAddress( 'ip_address' )
                          ->nullable();

                    $table->text( 'user_agent' )
                          ->nullable();

                    $table->text( 'payload' );

                    $table->integer( 'last_activity' )
                          ->index();
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
