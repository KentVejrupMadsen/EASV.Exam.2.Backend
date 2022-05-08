<script>
  import MainHeader from "@/components/MainHeader.vue";
  
  export default 
  {
    name: 'HomeView',
    components: 
    {
        MainHeader
    }
  }
</script>
<template>
  <div class="view-home">
    <MainHeader Message="Frontpage" />
  </div>
</template>
