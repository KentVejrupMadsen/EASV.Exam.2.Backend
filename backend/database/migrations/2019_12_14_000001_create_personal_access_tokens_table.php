<?php

<<<<<<< HEAD
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;



    return new class extends Migration
    {
        
        public function up()
        {
            Schema::create( 'personal_access_tokens', 
                function ( Blueprint $table ) 
                {
                    $table->id();
                    $table->morphs( 'tokenable' );
                    $table->string( 'name' );
                    $table->string( 'token', 64)->unique();
                    $table->text( 'abilities' )->nullable();
                    $table->timestamp( 'last_used_at' )->nullable();
                    $table->timestamps();
                }
            );
        }

        
        public function down()
        {
            Schema::dropIfExists( 'personal_access_tokens' );
        }
    };
=======
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
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
>>>>>>> a17ee82b33bb976bbf37d38de9021d162f25cc15
