<script>
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
        
      }

    },
    components: {},
};
</script>
<template>
  <div class="login">
    <form>
      <h1> Login </h1>
      <div class="">
        <input type="text" placeholder="Username" id="login_id"/>
        <input type="password" placeholder="Password" id="password"/>
        <input type="button" value="login" id="login" @click="login()"/>
      </div>
    </form>
    <router-link to="/registration"> registration </router-link>
  </div>
</template>

