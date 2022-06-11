<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables\templates;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    use Illuminate\Foundation\Auth\User
        as Authenticatable;

    use Illuminate\Notifications\Notifiable;
    use Laravel\Sanctum\HasApiTokens;


/**
     *
     */
    abstract class AccountModel
        extends Authenticatable
    {
        use HasApiTokens,
            HasFactory,
            Notifiable;

        protected const model_type = 'account';

        protected  const typeString = 'string';
        protected const typeInteger = 'integer';
        protected const typeDouble = 'double';
        protected const typeFloat = 'float';
        protected const typeArray = 'array';
        protected const typeBoolean = 'boolean';

        protected const typeDatetime = 'datetime';
        protected const typeTimestamp = 'timestamp';

        // Various use cases of datetime
    }
?>
