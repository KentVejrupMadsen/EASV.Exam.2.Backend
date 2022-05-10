<template>
  <div class="view-about">
    <MainHeader Message="This is an about page"/>
  </div>
</template>
<script>
  import MainHeader 
    from "@/components/MainHeader.vue";

  export default 
  {
    name: 'AboutView',
    components: 
    {
      MainHeader
    }
  }
</script>