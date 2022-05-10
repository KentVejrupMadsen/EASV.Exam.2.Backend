<script>
    import NavigationButtonComponent 
        from './NavigationButtonComponent.vue';

    export default 
    {
        name: "NavigationPublicComponent",
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
        <NavigationButtonComponent linkUrl="/login" linkLang="en-us" linkText="Login"/>
        <NavigationButtonComponent linkUrl="/about" linkLang="en-us" linkText="About"/>
        <NavigationButtonComponent linkUrl="/help" linkLang="en-us" linkText="Help"/>
    </ol>
</template>