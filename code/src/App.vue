<script>
/* eslint-disable */
export default
{
  name: 'Application',
  mounted: function()
  {
    document.title = 'Kanban Project'
  }
}
</script>
<template>
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
  <router-view/>
</template>
<style> 
@import url("style.css");
@import url("http://localhost:8080/font/stylesheet.css");
</style>
