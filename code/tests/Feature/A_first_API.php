<?php
    namespace Tests\Feature;

    use Illuminate\Foundation\Testing\RefreshDatabase;


    class A_first_API
        extends BaseFeature
    {
        use RefreshDatabase;

        public function reset()
        {
            $response = $this->get('/');

            $response->assertStatus(200);
        }
    }
?>