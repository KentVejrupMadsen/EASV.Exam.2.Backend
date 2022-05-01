<script>
/* eslint-disable */
export default
{
  name: 'Application',
  mounted: function ()
  {
    document.title = 'Kanban Project'
  }
}
</script>
<template>
  <header>
    <nav>
      <router-link to="/">
        Home
      </router-link>
      <router-link to="/about">
        About
      </router-link>
      <router-link to="/login">
        Login
      </router-link>
    </nav> 
  </header>
  <router-view/>
</template>
<style scoped> 
@import url('style.css');
</style>