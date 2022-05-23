<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\factories;

    use App\Http\Controllers\Controller;
    use App\Models\tables\AccountEmailModel;


    /**
     *
     */
    class AccountEmailFactoryController
        extends Controller
    {
        public function __construct()
        {
            parent::__construct();

        }

        private const column_content = 'content';

        /**
         * @param String $email
         * @return bool
         */
        public function exist( String $email ): bool
        {
            if( !is_null( $this->find( $email ) ) )
            {
                return true;
            }

            return false;
        }


        /**
         * @param String $email
         * @return AccountEmailModel|null
         */
        public function find( String $email ): ?AccountEmailModel
        {
            $emailFound = AccountEmailModel::where( self::column_content, $email )->first();
            return $emailFound;
        }


        /**
         * @param string $by
         * @return array
         */
        public function search( string $by ): array
        {
            $return = array();


            return $return;
        }


        /**
         * @param String $email
         * @return AccountEmailModel|null
         */
        public function create( String $email ): ?AccountEmailModel
        {
            $fields = array();
            $fields['content'] = $email;

            $model = AccountEmailModel::create( $fields );

            return $model;
        }


        /**
         * @param int $id
         * @param string $mail
         * @return bool
         */
        public function update( int $id, string $mail ): bool
        {
            $return = false;

            $model = AccountEmailModel::find( $id );

            if( !is_null( $model ) )
            {
                $model->content = $mail;
                $model->save();

                $return = true;
            }

            return $return;
        }


        /**
         * @param int $id
         * @return bool
         */
        public function deleteById( int $id ): bool
        {
            $return = false;
            $model = AccountEmailModel::find( $id )->first();

            if( !is_null( $model ) )
            {
                $model->delete();
                $return = true;
            }

            return $return;
        }


        /**
         * @param String $mail
         * @return bool
         */
        public function deleteByName( String $mail ): bool
        {
            $return = false;
            $model = AccountEmailModel::where( self::column_content, $mail );

            if( !is_null( $model ) )
            {
                $model->delete();
                $return = true;
            }

            return $return;
        }
    }
?>
