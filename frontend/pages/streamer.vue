<template>
  <section class="text-gray-400 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4">
        <Mainstream />
        <StreamCard />
        <Allstreamer />
        
        
        
      </div>
    </div>
  </section>
</template>

<script>
import StreamCard from '@/components/StreamCard'
import Mainstream from '@/components/mainstream'
import Allstreamer from  '@/components/Allstreamer'
export default {
  components:{
    StreamCard,
    Mainstream,
    Allstreamer
  },
 
    mounted() {
     this.$nextTick(() => {
      this.$nuxt.$loading.start()
      setTimeout(() => this.$nuxt.$loading.finish(), 1000)
    })
  }
  
}
</script>
