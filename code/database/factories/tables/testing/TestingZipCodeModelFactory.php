<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables\testing;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\ZipCodeModel;


    /**
     *
     */
    class TestingZipCodeModelFactory
        extends Factory
    {
        // Variables
        protected $model        = ZipCodeModel::class;
        


        /**
         * @return array
         */
        public final function definition(): array
        {
            if( $this->getDebugState() )
            {
                return
                [
                    'area_name' => $this->faker
                                        ->unique()
                                        ->city,
                    'zip_number' => $this->faker
                                         ->unique()
                                         ->numerify,
                    'country_id' => 0
                ];
            }
            else
            {
                return
                [
                    'area_name'  => null,
                    'zip_number' => 0,
                    'country_id' => 0
                ];
            }
        }
    }
?>