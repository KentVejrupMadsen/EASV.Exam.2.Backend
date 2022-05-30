<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\AccountEmailModel;


    /**
     *
     */
    final class AccountEmailModelFactory
        extends Factory
    {
        protected $model        = AccountEmailModel::class;
        private static $debug   = false;


        // Accessor
        /**
         * @return bool
         */
        public final function getDebugState(): bool
        {
            return self::$debug;
        }

        /**
         * @param bool $value
         * @return void
         */
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