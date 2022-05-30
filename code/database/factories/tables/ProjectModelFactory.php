<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries
    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\ProjectModel;


    /**
     *
     */
    final class ProjectModelFactory
        extends Factory
    {
        // Variables
        protected $model      = ProjectModel::class;
        private static $debug = false;

        // Accessors
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


        //
        /**
         * @return array
         */
        public final function definition(): array
        {
            if( $this->getDebugState() )
            {
                return
                    [
                        //
                        'account_owner_id' => 0,
                        'project_title_id' => 0,
                        'description' => $this->faker
                                              ->realText,
                        'tags' => '{ }',
                        'created_at' => $this->faker
                                             ->dateTime,
                        'updated_at' => $this->faker
                                             ->dateTime
                    ];
            }
            else
            {
                return
                    [
                        //
                        'account_owner_id' => 0,
                        'project_title_id' => 0,
                        'description' => null,
                        'tags' => null,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ];
            }
        }
    }
?>