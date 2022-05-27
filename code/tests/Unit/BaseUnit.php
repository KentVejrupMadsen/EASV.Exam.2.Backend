<?php
    namespace Tests\Unit;

    use Tests\TestCase;


    abstract class BaseUnit
        extends TestCase
    {
        protected final function output( string $text = '',
                                         bool $isWriteOptional = true ): void
        {
            if( $isWriteOptional )
            {
                $output = '-------- ' . $text . "\r\n";
                fwrite( STDERR, print_r( $output, true ) );
                return;
            }
            else
            {
                return;
            }
        }

        protected final function completed()
        {
            $this->assertTrue( true );
        }
    }
?>