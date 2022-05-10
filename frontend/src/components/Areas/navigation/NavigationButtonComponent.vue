<script>
    export default 
    {
        name: "NavigationButtonComponent",
        props: 
        {
            linkUrl: String,
            linkLang: String,
            linkText: String
        },
        components: 
        { 
            
        }
    }
</script>
<template>
    <li> 
        <div> 
            <router-link v-bind:to="linkUrl" v-bind:hreflang="linkLang"> 
                {{ linkText }}
            </router-link>
        </div>
    </li>
</template>