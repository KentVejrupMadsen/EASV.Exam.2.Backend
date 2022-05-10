<template>
  <div class="view-login">
    <div> 
      <LoginComponent introductionMessage="Login"/>
    </div>
  </div>
</template>
<script>
  import LoginComponent 
    from "../components/Forms/LoginComponent.vue";

  export default 
  {
    name: 'LoginView',
    components: 
    {
      LoginComponent
    }
  }
</script>