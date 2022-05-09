<script>
  import NavigationComponent from "./components/Areas/NavigationComponent.vue";
  
  export default 
    {
      name: "Application",
      components: 
      {
        NavigationComponent
      }
    }
</script>
<style scoped>
  @import "style.css";
</style>
<template>
  <NavigationComponent :isLoggedIn="false" />
  <router-view/>
</template>