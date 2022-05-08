<script>
    export default 
    {
        name: "MainHeader",
        props: 
        {
            Message: String
        }
    }
</script>
<template>
    <h1 class="primary header">
        {{ Message }}
    </h1>
</template>