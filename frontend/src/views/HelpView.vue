<script>
  import MainHeader 
    from "@/components/MainHeader.vue";

  export default 
  {
    name: 'HelpView',
    components: 
    {
      MainHeader
    }
  }
</script>
<template>
  <div class="view-help">
    <MainHeader Message="Help page" />
  </div>
</template>