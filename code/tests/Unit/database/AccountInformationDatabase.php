<?php
    namespace Tests\Unit\database;

    use App\Models\tables\CountryModel;
    use App\Models\tables\ZipCodeModel;


    class AccountInformationDatabase
        extends BaseUnit
    {

        public function test_add_countries()
        {
            CountryModel::factory()->count( 195 )->create();

            $this->assertTrue( true );
        }

        public function test_add_zipCodes()
        {
            $max = 195;

            for( $count = 1;
                 $count < $max;
                 $count++)
            {
                ZipCodeModel::factory()->create( [ 'country_id' => $count ] );
            }

            $this->assertTrue( true );
        }

    }
?>