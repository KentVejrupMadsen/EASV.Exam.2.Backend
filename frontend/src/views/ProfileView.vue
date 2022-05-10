<script>
  import MainHeader 
    from "@/components/MainHeader.vue";

  export default 
  {
    name: 'ProfileView',
    components: 
    {
      MainHeader
    }
  }
</script>
<template>
  <div class="view-profile">
    <MainHeader Message="Profile"/>
  </div>
</template>