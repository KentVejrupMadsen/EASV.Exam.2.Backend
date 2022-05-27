<?php
    namespace Tests\Unit\database;

    use App\Models\tables\AccountEmailModel;
    use App\Models\tables\NewsletterSubscriptionModel;
    use App\Models\tables\User;

    use Tests\Unit\BaseUnit;


    /**
     *
     */
    final class AccountDatabase
        extends BaseUnit
    {
        private const showConsole = false;

        /**
         * @return void
         */
        protected final function isDebuggingNewsletter(): void
        {
            NewsletterSubscriptionModel::factory()->setDebugState( true );
        }

        /**
         * @return void
         */
        protected final function isDoneNewsletter(): void
        {
            NewsletterSubscriptionModel::factory()->setDebugState( false );
            $this->completed();
        }

        /**
         * @return void
         */
        protected final function isDebuggingEmail(): void
        {
            AccountEmailModel::factory()->setDebugState( true );
        }

        /**
         * @param bool $completely
         * @return void
         */
        protected final function isDoneEmail( bool $completely = true ): void
        {
            AccountEmailModel::factory()->setDebugState( false );

            if( $completely )
            {
                $this->completed();
            }
        }

        /**
         * @return void
         */
        protected final function isDebuggingAccount(): void
        {
            User::factory()->setDebugState( true );
        }

        /**
         * @param bool $completely
         * @return void
         */
        protected final function isDoneAccount( bool $completely = true ): void
        {
            User::factory()->setDebugState( false );

            if( $completely )
            {
                $this->completed();
            }
        }


        /**
         * @return void
         */
        public function test_add_mail(): void
        {
            $this->isDebuggingEmail();
            $sampleSize = 2500;

            $emails = AccountEmailModel::factory()->count( $sampleSize )->create();
            $size_of_emails = sizeof( $emails );

            if( !self::showConsole )
            {
                goto escape;
            }

            $idx = 0;
            for( $idx = 0;
                 $idx < $size_of_emails;
                 $idx ++ )
            {
                $current = $emails[$idx];
                $this->output( $current->content, self::showConsole );
            }

            escape:
            $this->isDoneEmail();
        }


        /**
         * @return void
         * @throws \Exception
         */
        public final function test_create_account(): void
        {
            $this->isDebuggingAccount();

            $idxEmail = 0;

            $modelsEmails = AccountEmailModel::all();
            $sampleSize = 200;

            for( $idxEmail = 0;
                 $idxEmail < $sampleSize;
                 $idxEmail++ )
            {
                $current = $modelsEmails[$idxEmail];

                $madeAccount = User::factory()->create( [ 'email_id' => $current->id ] );
                $this->output( $madeAccount->username, self::showConsole );
            }

            $this->isDoneAccount();
        }


        /**
         * @return void
         */
        public final function test_create_newsletters(): void
        {
            $this->isDebuggingNewsletter();

            $emails = AccountEmailModel::all();

            $idxNewsletter = 0;
            $sampleSize = 250;


            for( $idxNewsletter = 0;
                 $idxNewsletter < $sampleSize;
                 $idxNewsletter ++ )
            {
                $modelEmail = $emails[$idxNewsletter];
                $newsletterModel = NewsletterSubscriptionModel::factory()->create( [ 'email_id' => $modelEmail->id ] );
                $this->output( $modelEmail->content, self::showConsole );
            }

            $this->isDoneNewsletter();
        }
    }
?>