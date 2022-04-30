<script>
/* eslint-disable */
export default
{
  name: 'Application',
  mounted: function()
  {
    document.title = 'kanban project'
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
