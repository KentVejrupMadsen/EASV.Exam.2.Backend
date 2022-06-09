<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Requests\template;

    //
    use Illuminate\Foundation\Http\FormRequest;


    /**
     *
     */
    abstract class BaseRequest
        extends FormRequest
    {
        public const model_type = 'request';


    }
?>