<template>
  <NavigationComponent :isLoggedIn="false" />
  <router-view/>
</template>
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
