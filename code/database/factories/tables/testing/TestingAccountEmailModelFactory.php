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
    use App\Models\tables\AccountEmailModel;


    /**
     *
     */
    class TestingAccountEmailModelFactory
        extends Factory
    {
        protected $model        = AccountEmailModel::class;



        /**
         * @return array
         */
        public final function definition(): array
        {
            if( $this->getDebugState() )
            {
                return $this->fakeDefinition();
            }
            else
            {
                return $this->normalDefinition();
            }
        }


        /**
         * @return null[]
         */
        protected function fakeDefinition(): array
        {
            return
            [
                'content' =>  $this -> faker
                                    -> unique()
                                    -> safeEmail
            ];
        }


        /**
         * @return null[]
         */
        protected function normalDefinition(): array
        {
            return
            [
                'content' => null
            ];
        }
    }
?>