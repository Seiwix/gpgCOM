<template>
  <div>
  <div class="dashboard ">
        <Sidebar/>
        <div class="content bg-gray-900">
            <Nuxt/>
        </div>
    </div>
  
    
  
  </div>
</template>

<script>
import Sidebar from '@/components/NavDashbord'

export default {
 components: {
        Sidebar
    }
}
</script>

<style>
.dashboard {
    display: grid;
    grid-template-columns: 6fr 15fr;
    background-color: rgb(242, 243, 243);
    height: 100vh;
    width: 100vw;
    
}
.content {
   
    border-radius: 10px;
    margin: 0px 0px 0px 0px;
    width: 180vh;
    position: static
}


</style>