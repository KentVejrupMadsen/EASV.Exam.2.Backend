<script>
    import ButtonComponent from "../ButtonComponent.vue";
    import PageLogoComponent from "../PageLogoComponent.vue";

    import MainHeader from "@/components/MainHeader.vue";

    export default 
    {
        name: "RegisterComponent",
        props: 
        {
            introductionMessage: String,
            person_email: String,
            person_name: String,
            username: String,
            password: String,
            confirm_password: String
        },
        components: 
        { 
            ButtonComponent, 
            PageLogoComponent, 
            MainHeader 
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
                <input v-model="password" type="confirm_password"/>
            </span>
            <span>
                <label>Full Name</label>
                <input type="text" v-model="person_name" />
            </span>
            <span>
                <ButtonComponent buttonMessage="Register" :isReady="false"/>
            </span>
        </form>
    </div>
</template>