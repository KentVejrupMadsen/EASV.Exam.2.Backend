<script>
  import NavigationComponent from "./components/Areas/NavigationComponent.vue";
  import PageLogoComponent from "./components/PageLogoComponent.vue";
  
  export default 
  {
    name: "Application",
    components: 
    {
      NavigationComponent,
      PageLogoComponent
    }
  }
</script>
<style scoped>
  @import "style.css";
</style>
<template>
  <header id="header-primary">
    <div>
      <router-link to="/">
        <PageLogoComponent/>
      </router-link>
    </div>
    <div>
      <NavigationComponent/>
    </div>
  </header>
  <main>
    <router-view/>
  </main>
  <footer>

  </footer>

</template>