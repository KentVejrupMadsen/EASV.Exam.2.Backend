<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace Tests\Feature;

    use Tests\TestCase;


    /**
     *
     */
    class KanbanAPI
        extends TestCase
    {
        public function test_example()
        {
            $response = $this->get('/');

            $response->assertStatus(200);
        }

    }
?>