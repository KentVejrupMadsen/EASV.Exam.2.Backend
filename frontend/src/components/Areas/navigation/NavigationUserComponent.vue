<script>
    import NavigationButtonComponent 
        from './NavigationButtonComponent.vue';

    export default 
    {
        name: "NavigationUserComponent",
        props: 
        {
        },
        components: 
        {
            NavigationButtonComponent
        }
    }
</script>
<template>
    <ol>
        <NavigationButtonComponent linkUrl="/help" linkLang="en-us" linkText="Help"/>
        <NavigationButtonComponent linkUrl="/about" linkLang="en-us" linkText="about us"/>
        <NavigationButtonComponent linkUrl="/kanban" linkLang="en-us" linkText="Kanban board"/>
        <NavigationButtonComponent linkUrl="/profil" linkLang="en-us" linkText="Profile"/>
    </ol>
</template>