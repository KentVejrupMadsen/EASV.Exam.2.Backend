<?php
    namespace Tests\Feature;

    use Illuminate\Foundation\Testing\WithFaker;


    class BoardAPI
        extends BaseFeature
    {
        /**
         * A basic feature test example.
         *
         * @return void
         */
        public function test_example()
        {
            $response = $this->get('/');

            $response->assertStatus(200);
        }
    }
?>