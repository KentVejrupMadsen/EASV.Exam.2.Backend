<template>
<form>
    <div class="">
        <label> Username </label>
        <input v-model="form.user_identifier" type="text" placeholder="abc@emailhost.dk" id="login_id"/>
        <label> Password </label>
        <input v-model="form.password" type="password" placeholder="****" id="password"/>
        <input type="button" id="login" @click="login()"/>
    </div>
</form>
</template>
<script>
/* eslint-disable */
export default {
  name: 'LoginForm',
  props:
  {
    username: String
  },
  data() 
  {
      return {
            form: 
            {  
                user_identifier:'',
                password:''    
            }
      }
  },
  methods:
  {
      login:function()
      {
        var user_id = this.form.user_identifier;
        var user_password = this.form.password;

        

      }
  }
}
</script>
