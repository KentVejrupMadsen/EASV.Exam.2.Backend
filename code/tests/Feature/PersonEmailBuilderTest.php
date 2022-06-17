<?php
    /**
     *
     */
    namespace Tests\Feature;

    // External libraries
    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Illuminate\Foundation\Testing\DatabaseMigrations;

    use Tests\TestCase;

    // Internal libraries
    use App\Http\Controllers\schemas\account\entities\email\packages\PersonEmailBuilder
        as Builder;

    /**
     *
     */
    class PersonEmailBuilderTest
        extends TestCase
    {

        //
        use DatabaseMigrations;

        /**
         *
         * @return void
         */
        public function test_insertion_of_emails(): void
        {
            $is_functional = true;

            $builder = Builder::getSingleton();

            $inputArray =
            [
                'kent.vejrup.madsen@outlook.com',
                'blindedhollow@gmail.com',
                'fracturer@outlook.com',
                'kent.vejrup.madsen@protonmail.com',
                'fracturerdev@gmail.com'
            ];

            $builder->creationOfModels( $inputArray );

            $this->assertTrue( $is_functional );
        }


        /**
         * @return void
         */
        public function test_insertion_of_email(): void
        {
            $is_functional = true;

            $builder = Builder::getSingleton();

            $form = array();
            $form[ $builder->getContentField() ] = 'kent.vejrup.madsen@goalpioneers.com';

            $builder->createModel( $form );

            $this->assertTrue( $is_functional );
        }
    }
?>