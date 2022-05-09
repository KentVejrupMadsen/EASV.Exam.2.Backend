<script>
    import ButtonComponent from "../ButtonComponent.vue";
    import PageLogoComponent from "../PageLogoComponent.vue";

    import MainHeader from "@/components/MainHeader.vue";
    import axios from 'axios';

    export default 
    {
        name: "LoginComponent",
        props: 
        {
            introductionMessage: String,
            username: String,
            password: String
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
                const obj = JSON.stringify(
                    {                           
                        "account":
                        {
                            "username": this.username,
                            "security":
                            {
                                "password": this.password
                            }
                        }
                    }
                );

                axios.post( 'http://localhost:8000/api/1.0.0/account/login', 
                                obj, 
                                { headers: { 'Content-Type':'application/json' } } )
                         .then( ( response ) => { this.Login(response) }, 
                                ( error )    => { console.log( error ); } );

            },

            /**
             * Change the state so the user is logged in
             * @param {*} Response 
             */
            Login( Response )
            {
                console.log( Response.data ); 
                
                this.$store.commit( 'SetAccountBearerToken', Response.data.authorised.token_bearer ); 
                this.$store.commit( 'SetAccountName', Response.data.authorised.username ); 

                this.$router.push( 'localhost:8080/' );
            }
        }
    }
</script>
<template> 
    <div class="login-area component">
        <router-link to="/">
            <PageLogoComponent imageSrc="../assets/logo.png" />
        </router-link>

        <MainHeader :Message="introductionMessage" />
        
        <form>
            <span>
                <label>Username</label>
                <input v-model="username" type="text"/>
            </span>
            <span>
                <label>Password</label>
                <input v-model="password" type="password"/>
            </span>
        </form>
        <span>
            <ButtonComponent buttonMessage="Login" :isReady="false" @click="this.Send()"/>
        </span>
        <span>
            <router-link to="/forgot">
                <ButtonComponent buttonMessage="Forgot" :isReady="true"/>
            </router-link>
            <router-link to="/register">
                <ButtonComponent buttonMessage="Register" :isReady="true"/>
            </router-link>
        </span>
    </div>
</template>