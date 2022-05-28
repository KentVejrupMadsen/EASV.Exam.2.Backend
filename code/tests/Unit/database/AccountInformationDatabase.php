<?php
    namespace Tests\Unit\database;

    use App\Models\tables\AccountInformationModel;
    use App\Models\tables\AddressModel;
    use App\Models\tables\AddressRoadNameModel;
    use App\Models\tables\CountryModel;
    use App\Models\tables\PersonFirstnameModel;
    use App\Models\tables\PersonNameModel;
    use App\Models\tables\PersonSurnameModel;
    use App\Models\tables\User;
    use App\Models\tables\ZipCodeModel;

    use PHPUnit\Exception;
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


        /**
         * @return void
         */
        public function test_make_information_options(): void
        {
            $accounts = User::all();
            AccountInformationModel::factory()->setDebugState( true );

            for( $idx = 0;
                 $idx < sizeof( $accounts );
                 $idx++ )
            {
                $currentAccount = $accounts[ $idx ];
                AccountInformationModel::factory()->create([ 'account_id' => $currentAccount->id ]);
            }

            AccountInformationModel::factory()->setDebugState( false );
            $this->completed();
        }

        /**
         * @return array|null
         */
        protected function getAccountInformation(): ?array
        {
            $arr = AccountInformationModel::all()->all();
            return  $arr;
        }


        /**
         * @return array|null
         */
        protected function getZipCodes(): ?array
        {
            $arr = ZipCodeModel::all()->all();
            return $arr;
        }


        /**
         * @return array|null
         */
        protected function getCountries(): ?array
        {
            $arr = CountryModel::all()->all();
            return $arr;
        }

        /**
         * @return array|null
         */
        protected function getAddressRoadNames():?array
        {
            $arr = AddressRoadNameModel::all()->all();
            return $arr;
        }


        /**
         * @param $array
         * @return int
         * @throws \Exception
         */
        protected final function shuffleArray( $array ): int
        {
            $ret = 0;

            $array_start = 0;
            $max = count( $array ) - 1;

            try
            {
                $chosen = random_int( $array_start, $max );
                $ret = $chosen;
                return $ret;
            }
            catch ( Exception $exception )
            {
                $this->output( $exception->getMessage() );
                $ret = -1;
            }

            return $ret;
        }


        /**
         * @return void
         * @throws \Exception
         */
        public final function test_make_addresses(): void
        {
            AddressModel::factory()->setDebugState( true );
            $accountInformation = $this->getAccountInformation();
            $countries = $this->getCountries();
            $zip_codes = $this->getZipCodes();
            $address_road_names = $this->getAddressRoadNames();

            for( $idx = 0;
                 $idx < sizeof( $accountInformation );
                 $idx++ )
            {
                $current = $accountInformation[$idx];

                $country_id = $this->shuffleArray( $countries );
                $countryModel = $countries[$country_id];

                $zip_code_id = $this->shuffleArray( $zip_codes );
                $zip_code_model = $zip_codes[$zip_code_id];

                $address_roadname_id = $this->shuffleArray( $address_road_names );
                $address_road_name_model = $address_road_names[$address_roadname_id];

                AddressModel::factory()->create( [ 'account_information_id' => $current->id,
                                                   'road_name_id' => $address_road_name_model->id,
                                                   'country_id' => $countryModel->id,
                                                   'zip_code_id' => $zip_code_model->id ] );
            }

            AddressModel::factory()->setDebugState( false );
            $this->completed();
        }


        public final function test_add_firstnames()
        {
            PersonFirstnameModel::factory()->setDebugState(true);
            PersonFirstnameModel::factory()->count(200 )->create();
            PersonFirstnameModel::factory()->setDebugState(false);
            $this->completed();
        }


        public final function test_add_middle_and_lastnames_names()
        {
            PersonSurnameModel::factory()->setDebugState( true );
            PersonSurnameModel::factory()->count( 200 )->create();
            PersonSurnameModel::factory()->setDebugState( false );
            $this->completed();
        }

        public final function test_add_person_names()
        {
            PersonNameModel::factory()->setDebugState( true );

            $info = $this->getAccountInformation();
            $maxInfo = sizeof( $info );

            $allFirstNames = PersonFirstnameModel::all()->all();
            $allSurnames = PersonSurnameModel::all()->all();

            for( $idxInfo = 0;
                 $idxInfo < $maxInfo;
                 $idxInfo++ )
            {
                $currentInformation = $info[ $idxInfo ];

                $randomFirstName = $this->shuffleArray( $allFirstNames );
                $randomFirstnameModel = $allFirstNames[ $randomFirstName ];

                $randomSurname = $this->shuffleArray( $allSurnames );
                $randomSurnameModel = $allSurnames[ $randomSurname ];

                PersonNameModel::factory()->create( [ 'account_information_id'  => $currentInformation->id,
                                                      'person_name_first_id'    => $randomFirstnameModel->id,
                                                      'person_name_lastname_id' => $randomSurnameModel->id ] );
            }

            PersonNameModel::factory()->setDebugState( false );
            $this->completed();
        }
    }
?>