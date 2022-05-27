<?php
    namespace Tests\Unit\database;

    use App\Models\tables\AccountEmailModel;
    use App\Models\tables\User;


    class AccountDatabase
        extends BaseUnit
    {
        public function __construct(?string $name = null, array $data = [], $dataName = '')
        {
            parent::__construct($name, $data, $dataName);
            $this->setMax(random_int(0, 200));
        }

        public function getMax()
        {
            return self::$maxCount;
        }

        public function setMax($var)
        {
            self::$maxCount = $var;
        }

        private static $maxCount = null;



        public function test_add_mail()
        {
            AccountEmailModel::factory()->count( $this->getMax() )->create();

            $this->assertTrue(true );
        }

        public function test_create_account()
        {
            User::factory()->count( $this->getMax() )->create();
            $this->assertTrue(true );
        }

        public function test_subscribe()
        {
            $this->assertTrue(true );
        }
    }
?>