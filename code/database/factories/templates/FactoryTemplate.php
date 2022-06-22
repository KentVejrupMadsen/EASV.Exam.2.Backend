<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace Database\Factories\templates;

    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    abstract class FactoryTemplate
        extends Factory
    {
        public abstract function getDebugState(): bool;
        public abstract function setDebugState( bool $value ): void;

        public final function definition()
        {
            if( $this->getDebugState() )
            {
                return $this->TestDefinition();
            }
            else
            {
                return $this->DefaultDefinition();
            }
        }

        protected abstract function TestDefinition(): array;
        protected abstract function DefaultDefinition(): array;
    }

?>
