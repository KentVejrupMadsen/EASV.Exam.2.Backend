<template>
  <div class="view-forgot">
    <router-link to="/">
      <PageLogoComponent imageSrc="../assets/logo.png" />
    </router-link>
    
    <MainHeader Message="Forgot account information" />
    
  </div>
</template>
<script>
  import PageLogoComponent from "@/components/PageLogoComponent.vue";
  import MainHeader from "@/components/MainHeader.vue";

  export default 
  {
    name: 'ForgotView',
    components: 
    {
    PageLogoComponent,
    MainHeader
}
  }
</script>