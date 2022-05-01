<template>

<div class="center-column">
  <div id="login">
    <img alt="Vue logo" src="../assets/logo.png">
    <LoginForm>
    </LoginForm>
    <router-link to="/registration">
      registration
    </router-link>
  </div>
</div>
</template>
<script>
import LoginForm from '../components/LoginForm.vue'

/* eslint-disable */
export default 
{
    name: 'LoginView',
    data() 
    {
      return {
        
      }
    },
    methods: 
    {
      login()
      {
        console.log("enter");
        
      }

    },
    components: {
      LoginForm
    },
    mounted: function()
    {
    },
    methods: 
    {
      
    }
};
</script>