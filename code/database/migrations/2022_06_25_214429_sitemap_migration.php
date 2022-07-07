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
	
	
	return new class extends Migration
	{
	    /**
	     * Run the migrations.
	     *
	     * @return void
	     */
	    public function up()
	    {
	        Schema::create
	        ('sitemap_urls',
		        function( Blueprint $table )
		        {
					$table->id( 'identity' );
					$table->string( 'url' );
		        }
			);
			
			Schema::create
            ( 'sitemap',
				function( Blueprint $table )
            	{
            	    $table->id( 'identity' );
					
					$table->bigInteger('url_identity')
									  ->unsigned();
					
					$table->timestamp('last_modified');
					
					$table->foreign( 'url_identity' )
                                     ->references( 'identity' )
                                     ->on( 'sitemap_urls' )
                                     ->onDelete( 'cascade' );
            	}
            );
	    }
	
	    /**
	     * Reverse the migrations.
	     *
	     * @return void
	     */
	    public function down()
	    {
	        //
	    }
	};
?>