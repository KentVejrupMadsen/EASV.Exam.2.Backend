<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace Tests\Feature;

    use Illuminate\Foundation\Testing\WithoutMiddleware;

    /**
     *
     */
    class SecurityCSRFAPI
        extends BaseFeature
    {

        public function test_csrf_create()
        {
            $response = $this->getJson('/');
            $response->assertStatus(200);
        }
    }
?>