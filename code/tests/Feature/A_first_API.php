<?php
    namespace Tests\Feature;

    use Illuminate\Foundation\Testing\RefreshDatabase;


    class A_first_API
        extends BaseFeature
    {
        use RefreshDatabase;

        public function reset()
        {
            $response = $this->getJson('/api/1.0.0/' );
            $response->assertStatus(200);
        }
    }
?>