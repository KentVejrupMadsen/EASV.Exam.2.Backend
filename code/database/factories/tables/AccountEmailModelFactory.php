<?php
    namespace Database\Factories\tables;

    use App\Models\tables\AccountEmailModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class AccountEmailModelFactory
        extends Factory
    {
        protected $model = AccountEmailModel::class;

        private static $debug = false;

        public final function getDebugState(): bool
        {
            return self::$debug;
        }

        public final function setDebugState( bool $value ): void
        {
            self::$debug = $value;
        }


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