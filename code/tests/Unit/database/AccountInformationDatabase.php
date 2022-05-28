<?php
    namespace Tests\Unit\database;

    use App\Models\tables\AddressRoadNameModel;
    use App\Models\tables\CountryModel;
    use App\Models\tables\ZipCodeModel;
    use Tests\Unit\BaseUnit;


    /**
     *
     */
    final class AccountInformationDatabase
        extends BaseUnit
    {
        /**
         * @return void
         */
        public final function test_add_countries(): void
        {
            CountryModel::factory()->setDebugState( true );
            CountryModel::factory()->count(195)->create();
            CountryModel::factory()->setDebugState( false );

            $this->completed();
        }


        /**
         * @return void
         */
        public final function test_add_zipCodes(): void
        {
            $allCountries = CountryModel::all();
            ZipCodeModel::factory()->setDebugState( true );

            for( $idx = 0;
                 $idx < sizeof( $allCountries );
                 $idx++ )
            {
                $currentCountry = $allCountries[$idx];
                ZipCodeModel::factory()->create([ 'country_id' => $currentCountry->id ] );
            }

            ZipCodeModel::factory()->setDebugState( false );
            $this->completed();
        }


        /**
         * @return void
         */
        public final function test_add_address_roads(): void
        {
            AddressRoadNameModel::factory()->setDebugState( true );
            AddressRoadNameModel::factory()->count(2000)->create();
            AddressRoadNameModel::factory()->setDebugState( false );
            $this->completed();
        }
    }
?>