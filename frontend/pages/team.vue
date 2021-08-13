<template>
<div>
  
  <section class="text-gray-400 body-font">
    <div class="container px-8 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="text-3xl font-medium title-font mb-4 text-white tracking-widest">
          Unser Team
        </h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed  text-base">
          Wir stellen uns vor: All diese Charaktere sind in der Leitung vertreten, und somit auch eure Ansprechpartner 
          wir freuen uns euch kennenzulernen.
        </p>
      </div>
      <div class="flex flex-wrap -m-4">
       
        <TeamCard/>
      </div>
    </div>
  </section>
</div>
</template>

<script>
import TeamCard from '@/components/TeamCard'


export default {
  
  components:{
    TeamCard,
    
    
  },
 mounted() {
     this.$nextTick(() => {
      this.$nuxt.$loading.start()
      setTimeout(() => this.$nuxt.$loading.finish(), 1000)
    })
  }
 }
</script>
