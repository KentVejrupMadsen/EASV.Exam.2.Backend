<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace Database\Seeders;

    use App\Models\tables\AccountEmailModel;
    use App\Models\tables\User;

    use Carbon\Carbon;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;

    
    /**
     *
     */
    class DatabaseSeeder 
        extends Seeder
    {
        /**
         * @return void
         */
        public function run()
        {
            $this->makeBaseAccount();
        }

        /**
         * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Factories\HasFactory|\Illuminate\Database\Eloquent\Model|mixed
         */
        protected function createEmailEntity()
        {
            $modelEmail = AccountEmailModel::factory()->create(
                [
                    'content' => 'unknown'
                ]
            );
            return $modelEmail;
        }


        /**
         * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Factories\HasFactory|\Illuminate\Database\Eloquent\Model|mixed
         */
        protected function makeBaseEmail()
        {
            $model = AccountEmailModel::where( 'content', 'unknown' )->first();

            if( is_null( $model ) )
            {
                $model = $this->createEmailEntity();
            }

            return $model;
        }


        /**
         * @return void
         */
        public function makeBaseAccount()
        {
            $modelEmail = $this->makeBaseEmail();

            User::factory()->create(
                [
                    'username'          => 'admin',
                    'email_id'          => $modelEmail->id,
                    'email_verified_at' => null,
                    'password'          => Hash::make('admin' ),
                    'created_at'        => Carbon::now(),
                    'updated_at'        => Carbon::now(),
                    'settings'          => ''
                ]
            );


        }
    }
?>
