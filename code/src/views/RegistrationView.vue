<script>
/* eslint-disable */
export default {
    name: 'RegistrationView',
    data() 
    {
      return {

      }
    },
    methods: 
    {
      registration()
      {
        console.log("test");
      }

    },
    components: {},
};


</script>
<template>
  <div class="registration">
    <form>
      <h1> Registration </h1>
      <div class="">
        <input type="text" placeholder="Email" id="email"/>

        <input type="password" placeholder="Password" id="password"/>
        <input type="password" placeholder="Password" id="password_confirmation"/>

        <input type="button" value="registration" id="registration" @click="registration();"/>
      </div>
    </form>
  </div>
</template>
