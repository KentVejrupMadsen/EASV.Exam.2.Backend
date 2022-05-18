<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace Tests\Feature;

    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Tests\TestCase;


    /**
     *
     */
    class ProjectMembersTest
        extends TestCase
    {
        
        public function test_the_application_returns_a_successful_response()
        {
            $response = $this->get('/');

            $response->assertStatus(200);
        }
    }
?>