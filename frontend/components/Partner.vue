<template>
  <div class="container my-12 mx-auto px-4 md:px-12  lg:px-40  text-white">
    <div class=" bg-gray-800  object-center  my-10   w-full md:w-full lg:my-4  lg:w-full" v-for="Partners in Partner" :key="Partners.id">
      <div class="">
        <a target="_blank" :href=Partners.link>
        <img
          :src=Partners.image
          alt=""
          class="h-56 w-full hover:opacity-25"
        ></a>
      </div>
      <div class="px-4 py-4 md:px-10">
        <h1 class="font-bold text-lg">
          {{Partners.tittle}}
        </h1>
        <p class="py-4">
          {{Partners.description}}
        </p>
        <div class="flex flex-wrap pt-8" />
      </div>
    </div>
    
      
    
    
    
    
  </div>
</template>
<script>
export default {
  data() {
    return {
      Partner:[],
    }
  },
  methods: {
    getPartner()
   	 	{
         
                this.$axios.$get('/api/partner')
                    .then((resp)=>{
                        
                        this.Partner = resp.data;
                    })
                    
                    .catch((err)=>{console.log(err)})
            
    	},
  },
  mounted() {
   this.getPartner()
  },
}
</script>
