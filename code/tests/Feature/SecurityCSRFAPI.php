<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace Tests\Feature;


    /**
     *
     */
    class SecurityCSRFAPI
        extends BaseFeature
    {

        public function test_example()
        {
            $response = $this->get('/');

            $response->assertStatus(200);
        }
    }
?>