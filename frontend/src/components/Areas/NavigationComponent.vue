<script>
    import NavigationPublicComponent from "./navigation/NavigationPublicComponent.vue";
    import NavigationUserComponent from "./navigation/NavigationUserComponent.vue";


    export default 
    {
        name: "NavigationComponent",
        props: 
        {
            isLoggedIn: Boolean
        },
        components: 
        {
            NavigationPublicComponent,
            NavigationUserComponent
        }
    }
</script>
<template>
    <nav v-if="!isLoggedIn">
        <NavigationPublicComponent/>
    </nav>
    <nav v-if="isLoggedIn">
        <NavigationUserComponent/>
    </nav>
</template>