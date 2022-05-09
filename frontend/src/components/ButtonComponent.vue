<script>
    export default 
    {
        name: "ButtonComponent",
        props: 
        {
            buttonMessage: String,
            isReady: Boolean
        }
    }
</script>
<template>
    <button class="button"> 
        {{ buttonMessage }}
    </button>
</template>