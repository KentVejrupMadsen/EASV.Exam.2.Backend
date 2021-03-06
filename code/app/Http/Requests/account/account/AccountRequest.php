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
    namespace App\Http\Requests\account\account;

    // External
    use OpenApi\Attributes 
    	as OA;

    // Internal
    use App\Http\Requests\template\BaseRequest;
    use App\Http\Requests\template\PublicRequest;
    use App\Http\Requests\template\RequestDefaults;


    /**
     *
     */
    #[OA\Schema( title: 'Account Request',
                 description: '',
                 type: BaseRequest::model_type,
                 deprecated: false )]
    class AccountRequest
        extends PublicRequest
    {
        /**
         * @return bool
         */
        private function allowedMethods(): bool
        {
            return $this->CRUDRoutes();
        }


        /**
		 * @return bool
		 */
        public final function authorize(): bool
        {
            $retVal = false;

            // Is Https connection
            if( $this->RequireSecureConnection() )
            {
                $retVal = true;
            }

            // retrieves which formats are allowed. application/json, application/xml etc.
            if( $this->accepts( RequestDefaults::getAllowedFormats() ) )
            {
                $retVal = true;
            }

            // which http methods are allowed
            if( !$this->allowedMethods() )
            {
                abort( 405, 'is not a valid http method' );
            }

            return $retVal;
        }


        /**
		  * @return string[]
		  */
        public final function rules(): array
        {
        	switch ( $this->getOperationState() )
        	{
        		default:
        			return [];
        			
				case 'login':
					return $this->validateLogin();
					
				case 'create':
					return $this->validateCreate();
        	}
        }
        
        
        /**
		 * @return array
		 */
        protected final function validateLogin(): array
        {
        	return 
        	[
        		'account.username' => 'required|min:2|max:20',
        		'account.security.password' => 'required|min:6|max:16',
			];
        }
        
        
        /**
		 * @return array
		 */
        protected final function validateCreate(): array 
        {
        	return
			[
				'account.username' => 'required|min:2|max:20',
											
				'account.security.password' => 'required|min:6|max:16',
				'account.security.confirm'  => 'required|same:account.security.password',
											
				'account.person.email' 		=> 'required|email:rfc,dns'
            ];
        }
    }
?>
