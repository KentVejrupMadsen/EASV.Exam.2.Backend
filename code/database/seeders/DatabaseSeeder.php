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


    class DatabaseSeeder 
        extends Seeder
    {
        public function run()
        {
            $this->makeBaseAccount();
        }

        public function makeBaseAccount()
        {
            $modelEmail = AccountEmailModel::factory()->create( [ 'content' => 'unknown' ] );

            User::factory()->create(
                [ 'username' => 'admin',
                  'email_id' => $modelEmail->id,
                  'email_verified_at' => null,
                  'password'=> Hash::make('admin' ),
                  'created_at'=>Carbon::now(),
                  'updated_at'=>Carbon::now(),
                  'settings'=>'' ] );

        }
    }
?>
