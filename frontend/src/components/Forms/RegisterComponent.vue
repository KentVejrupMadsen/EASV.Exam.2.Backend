<script>
    import ButtonComponent from "../ButtonComponent.vue";
    import PageLogoComponent from "../PageLogoComponent.vue";

    import MainHeader from "@/components/MainHeader.vue";
    import axios from 'axios';

    export default 
    {
        name: "RegisterComponent",
        props: 
        {
            introductionMessage : String,

            person_email : String,
            person_name  : String,

            username : String,

            password         : String,
            confirm_password : String
        },
        components: 
        { 
            ButtonComponent, 
            PageLogoComponent, 
            MainHeader 
        },
        methods:
        {
            Send()
            {
                if( this.Security() )
                {
                    const obj = JSON.stringify(
                        {                           
                            "account":
                            {
                                "username": this.username,
                                "security":
                                {
                                    "password": this.password,
                                    "confirm":  this.confirm_password
                                },
                                "person_name" : this.person_name,
                                "person_email": this.person_email
                            }
                        }
                    );

                    console.log(obj);

                    // Send Rest request
                    const res = axios.post('http://localhost:8000/api/1.0.0/account/create', obj, { headers: { 'Content-Type':'application/json' } } );
                }
            },


            /**
             *  Checks if Password is the same & and requirements for the different input fields, before sending it to the api
             */
            Security()
            {
                if( this.password === this.confirm_password )
                {
                    return true;       
                }
                
                return false;
            },
        },
        computed:
        {
            FullName: 
            {
                get()
                {
                    return this.personName;
                },
                set( value )
                {
                    this.personName = value;
                }
            },

            SecurityPassword:
            {
                get()
                {
                    return this.securityPassword;
                },
                set( value )
                {
                    this.securityPassword = value;
                }
            },

            SecurityPasswordConfirm:
            {
                get()
                {
                    return this.securityConfirmPassword;
                },
                set( value )
                {
                    this.securityConfirmPassword = value;
                }
            },

            Username:
            {
                get()
                {
                    return this.accountUsername;
                },
                set( value )
                {
                    this.accountUsername = value;
                }
            }
        },
        data() 
        {
            return {
                personEmail: '',
                personName: '',
                securityPassword:'',
                securityConfirmPassword:'',
                accountUsername: ''
            }
        }
    }
</script>
<template> 
    <div> 
        <router-link to="/">
            <PageLogoComponent imageSrc="../assets/logo.png" />
        </router-link>
        <MainHeader :Message="introductionMessage" />
        <form>
            <span>
                <label>Email</label>
                <input type="text" v-model="person_email" />
            </span>
            <span>
                <label>Username</label>
                <input v-model="username" type="text"/>
            </span>
            <span>
                <label>Password</label>
                <input v-model="password" type="password"/>
                
                <label>Confirmation Password</label>
                <input v-model="confirm_password" type="password"/>
            </span>
            <span>
                <label>Full Name</label>
                <input type="text" v-model="person_name" />
            </span>
        </form>
        <span>
            <ButtonComponent buttonMessage="Register" :isReady="false" @click="this.Send()"/>
        </span>
    </div>
</template>