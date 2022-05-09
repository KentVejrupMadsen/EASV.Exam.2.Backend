<script>
    import NavigationPublicComponent from "./navigation/NavigationPublicComponent.vue";
    import NavigationUserComponent from "./navigation/NavigationUserComponent.vue";


    export default 
    {
        name: "NavigationComponent",
        props: 
        {
            
        },
        components: 
        {
            NavigationPublicComponent,
            NavigationUserComponent
        },
        methods:
        {
            userState()
            {
                return this.$store.getters.RetrieveUserState;
            }
        }
    }
</script>
<template>
    <nav v-if="userState()">
        <NavigationUserComponent/>
    </nav>
    <nav v-else>
        <NavigationPublicComponent/>
    </nav>
</template>