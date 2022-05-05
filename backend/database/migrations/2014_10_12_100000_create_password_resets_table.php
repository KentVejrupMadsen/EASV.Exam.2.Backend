<?php

<<<<<<< HEAD
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;



    return new class extends Migration
    {
        
        public function up()
        {
            Schema::create( 'password_resets', 
                function (Blueprint $table) 
                {
                    $table->bigInteger( 'email_id' )->unsigned()->index();
                    $table->string( 'token' );
                    $table->timestamp( 'created_at' )->nullable();
                }
            );
        }


        
        public function down()
        {
            Schema::dropIfExists( 'password_resets' );
        }
    };

?>
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
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
};
>>>>>>> a17ee82b33bb976bbf37d38de9021d162f25cc15
