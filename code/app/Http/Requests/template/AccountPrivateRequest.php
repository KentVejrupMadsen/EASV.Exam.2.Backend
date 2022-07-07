<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License
        * (https://github.com/KentVejrupMadsen/EASV.Exam.2.Backend/blob/main/License.md)
        * (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Http\Requests\template;

    //
    use Illuminate\Foundation\Http\FormRequest;


    /**
     *
     */
    abstract class AccountPrivateRequest
        extends FormRequest
    {
        public const model_type = 'request';


    }
?>
