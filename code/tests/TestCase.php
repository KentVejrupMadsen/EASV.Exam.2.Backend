<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace Tests;

    use Illuminate\Foundation\Testing\TestCase
        as BaseTestCase;


    abstract class TestCase 
        extends BaseTestCase
    {
        use CreatesApplication;
    }
?>
