<script>
    import ButtonComponent from "../ButtonComponent.vue";
    import PageLogoComponent from "../PageLogoComponent.vue";

    import MainHeader from "@/components/MainHeader.vue";

    export default 
    {
        name: "LoginComponent",
        props: 
        {
            introductionMessage: String
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
            <span>
                <ButtonComponent buttonMessage="Login" isReady="false"/>
            </span>
        </form>
        <span>
            <router-link to="/forgot">
                <ButtonComponent buttonMessage="Forgot" isReady="true"/>
            </router-link>
            <router-link to="/register">
                <ButtonComponent buttonMessage="Register" isReady="true"/>
            </router-link>
        </span>
    </div>
</template>