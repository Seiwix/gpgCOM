<template>
  <div class="flex h-auto items-center justify-center  messages  ">
  <div class="grid bg-gray-800 rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
    <div class="flex justify-center py-4">
   
    </div>

    <div class="flex justify-center">
      <div class="flex">
        <h1 class="text-white  font-bold md:text-2xl mt-5 text-xl">Teammitglied  Hinzufügen</h1>
      </div>
    </div>

    <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-lightp px-2 font-semibold">Name</label>
      <input v-model="data.tittle" class="py-2 px-3 bg-gray-700 rounded-lg border-2 border-white mt-1 focus:outline-none focus:ring-2 focus:ring-white focus:border-transparent" type="text" placeholder="Name " />
    </div>
    <div class="grid grid-cols-1 mx-7 ">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-lightp px-2 font-semibold">Rolle</label>
      <input v-model="data.role" class="py-2 px-3 bg-gray-700 rounded-lg border-2 border-white mt-1 focus:outline-none focus:ring-2 focus:ring-white focus:border-transparent" type="text" placeholder="Rolle z.B Leader " />
    </div> 
    <div class="grid grid-cols-1  mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-lightp px-2 font-semibold">Beschreibung</label>
      <textarea v-model="data.description" class="py-2  bg-gray-700 px-3 rounded-lg border-2 border-white mt-1 focus:outline-none focus:ring-2 focus:ring-white focus:border-transparent" type="message" placeholder="Text über das Teammitglied" />
    </div> 
    
    

    <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Profiel Bild Hochladen</label>
        <div class='flex items-center justify-center w-full'>
            <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-600 hover:border-gray-800 group'>
                <div class='flex flex-col items-center justify-center pt-7'>
                  <svg class="w-10 h-10 text-green-500 group-hover:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                  <p class=' text-sm text-gray-400 group-hover:text-gray-800 pt-1 tracking-wider'>Füge ein Bild hinzu!</p>
                </div>
              <input type='file'  class="hidden" @change="handleFileUpload($event)" />
            </label>
        </div>
    </div>

    <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
      
      <button @click="submitFile()" class='w-auto bg-green-500 hover:bg-green-600 rounded-lg shadow-xl font-medium text-white px-6 py-2'>Erstellen</button>
    </div>

  </div>
</div>
</template>


<script>
export default {

data() {
  return {
    
    data:{
      tittle:[],
      role:'',
      description:[],
      file:'',

    },
  }
},
methods: {
  handleFileUpload(event){
                this.data.file = event.target.files[0];
                console.log(this.data.file);
  },
  submitFile() {
               const fd = new FormData()
               fd.append('tittle',this.data.tittle);
               fd.append('role',this.data.role);
               fd.append('description',this.data.description)
               fd.append('file',this.data.file)    
               console.log(fd);
               
               this.$axios.post('/api/team',fd, {
                   'Content-Type': 'multipart/form-data'
               })
               
                .catch(error => {
                console.log(error.response)

               })
  }
},

}
</script>

<style>

</style>