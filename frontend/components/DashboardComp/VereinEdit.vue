<template>
  
<div class="flex h-auto items-center justify-center  messages  ">
  <div class="grid bg-gray-800 rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
    <div class="flex justify-center py-4">
   
    </div>

    <div class="flex justify-center">
      <div class="flex">
        <h1 class="text-white  font-bold md:text-2xl mt-5 text-xl">Verein Bearbeiten</h1>
      </div>
    </div>

    <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-lightp px-2 font-semibold">Name</label>
      <input class="py-2 px-3 bg-gray-700 rounded-lg border-2 border-white mt-1 focus:outline-none focus:ring-2 focus:ring-white focus:border-transparent" type="text" placeholder="Name des Teammitgliedes" v-model="idVerein.tittle"> 
    </div>
    
    <div class="grid grid-cols-1  mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-lightp px-2 font-semibold">Beschreibung</label>
      <textarea class="py-2  bg-gray-700 px-3 rounded-lg border-2 border-white mt-1 focus:outline-none focus:ring-2 focus:ring-white focus:border-transparent" type="message" placeholder="Text über den Partner " v-model="idVerein.description "/>
    </div> 
    

    <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
      
      <button class='w-auto bg-green-500 hover:bg-green-600 rounded-lg shadow-xl font-medium text-white px-6 py-2' @click="update(idVerein.id)">Erstellen</button>
      
    </div>
    
  </div>
</div>


</template>

<script>
export default {
props: ['idVerein'],

computed: {
    
},
methods: {
     update(event)
     {  
        
         this.$axios.$patch('api/verein/'+event,this.idVerein)
        .catch((err)=>{console.log(err)})
          
      
    }
},

}

</script>

<style>

</style>