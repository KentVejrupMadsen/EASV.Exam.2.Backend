<?php
    /**
     *
     */
    namespace Tests\Feature;

    //
    use Tests\TestCase;

    use App\Http\Controllers\schemas\account\entities\email\packages\PersonEmailBuilder
        as Builder;

    use Illuminate\Foundation\Testing\RefreshDatabase;


    /**
     *
     */
    class PersonEmailBuilderTest
        extends TestCase
    {
        use RefreshDatabase;

        /**
         * A basic unit test example.
         *
         * @return void
         */
        public function test_insertion_of_emails()
        {
            $is_functional = true;

            $builder = Builder::getSingleton();

            $inputArray =
            [
                $builder->getCreateOperation() =>
                [
                    'kent.vejrup.madsen@outlook.com',
                    'blindedhollow@gmail.com',
                    'fracturer@outlook.com',
                    'kent.vejrup.madsen@protonmail.com',
                    'fracturerdev@gmail.com'
                ]
            ];

            $builder->creationOfModels( $inputArray );

            $this->assertTrue( $is_functional );
        }
    }
?>