<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License
        * (https://github.com/KentVejrupMadsen/EASV.Exam.2.Backend/blob/main/License.md)
        * (https://opensource.org/licenses/MIT)
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
        private const table_name = 'failed_jobs';

        // create tables
        public function up(): void
        {
            Schema::create(
                self::table_name,
                function ( Blueprint $table ) 
                {
                    $table->id();
                    
                    $table->string( 'uuid' )
                          ->unique();
                    
                    $table->text( 'connection' );
                    $table->text( 'queue' );
                    
                    $table->longText( 'payload' );
                    $table->longText( 'exception' );

                    $table->timestamp( 'failed_at' )
                          ->useCurrent();
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
