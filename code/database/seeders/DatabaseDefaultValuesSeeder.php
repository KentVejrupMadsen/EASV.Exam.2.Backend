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
    namespace Database\Seeders;

    use App\Models\tables\AddressModel;
    use App\Models\tables\CountryModel;
    use App\Models\tables\PersonFirstnameModel;
    use App\Models\tables\PersonSurnameModel;
    use App\Models\tables\ZipCodeModel;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;


    class DatabaseDefaultValuesSeeder
        extends Seeder
    {
        public function run()
        {
            //
            PersonFirstnameModel::factory()->create( [ 'content' => 'unknown' ] );
            PersonSurnameModel::factory()->create( [ 'content' => 'unknown' ] );
            AddressModel::factory()->create( [ 'content' => 'unknown' ] );

            $C = CountryModel::factory()->create( [ 'country_name' => 'unknown',
                                                    'country_acronym' => 'unknown' ] );

            ZipCodeModel::factory()->create(
                [
                  'area_name'  => 'unknown',
                  'zip_number' => 0 ,
                  $C->id
                ]
            );
        }
    }
?>
