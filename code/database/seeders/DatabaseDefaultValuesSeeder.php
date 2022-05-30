<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Seeders;

    use App\Models\tables\AddressModel;
    use App\Models\tables\CountryModel;
    use App\Models\tables\KanbanTitleModel;
    use App\Models\tables\MemberGroupModel;
    use App\Models\tables\PersonFirstnameModel;
    use App\Models\tables\PersonSurnameModel;
    use App\Models\tables\ProjectTitleModel;
    use App\Models\tables\ZipCodeModel;
    use App\Models\tables\BoardTitleModel;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;


    class DatabaseDefaultValuesSeeder
        extends Seeder
    {
        public function run()
        {
            //
            BoardTitleModel::factory()->create( [ 'content' => 'unknown' ] );
            PersonFirstnameModel::factory()->create( [ 'content' => 'unknown' ] );
            PersonSurnameModel::factory()->create( [ 'content' => 'unknown' ] );
            ProjectTitleModel::factory()->create( [ 'content' => 'unknown' ] );
            MemberGroupModel::factory()->create( [ 'content' => 'unknown' ] );
            KanbanTitleModel::factory()->create( [ 'content' => 'unknown' ] );
            BoardTitleModel::factory()->create( [ 'content' => 'unknown' ] );
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
