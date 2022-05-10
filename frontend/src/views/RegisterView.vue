<template>
  <div class="view-register">
    <RegisterComponent introductionMessage="Register account" />
  </div>
</template>
<script>
  import PageLogoComponent 
    from "@/components/PageLogoComponent.vue";
    
  import MainHeader 
    from "@/components/MainHeader.vue";

  import RegisterComponent 
    from "@/components/Forms/RegisterComponent.vue";

  export default 
  {
    name: 'RegisterView',
    components: 
    {
      PageLogoComponent,
      MainHeader,
      RegisterComponent
    }
  }
</script>