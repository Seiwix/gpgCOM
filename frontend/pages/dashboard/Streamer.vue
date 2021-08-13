<template>
<div>
  <div id="menu"  class="container mx-auto px-4 text-white lg:pt-24 lg:pb-64">
      <div class="flex flex-wrap text-center justify-center">
        <div class="w-full lg:w-6/12 px-4">
          <h2 class="text-4xl font-semibold text-white">Streamer</h2>
          <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
            Hier können Germany Playsgroup Streamer erstellt,bearbeitet und gelöscht werden.
          </p>
        </div>
      </div>
      <div v-if="edithide == true" class="mt-5">
        
        <button
            @click="edithide= false" class="inline-block px-16 py-4 item-center text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none"
          >Cancel
           </button>
       </div>
      <div v-if="edithide == false">
       
      <button
            @click="ishidden = true" class="inline-block px-3 py-4 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"
          >
            Streamer Hinuzufügen
            </button >
       <div v-if="ishidden == true" class="justify-center"> 
          
           <StreamerCreate/>
           <button
            @click="ishidden = false,refresh()" class="inline-block px-16 py-4 item-center text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none"
          >Cancel
           </button>
       </div>
      </div>
      
       
     <div v-for="Streamers in Streamer" :key="Streamers.id">
       
      <div class="flex flex-wrap mt-12 justify-center">
      <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 xl:grid-cols-6 gap-4">
        <div class="col-span-2 sm:col-span-1 xl:col-span-1">
          <div class="col-span-2 sm:col-span-1 xl:col-span-1">
          <img
            alt="..."
            :src="Streamers.streamerimage"
            class="h-24 w-24 rounded  mx-auto"
          />
        </div>
        </div>
        <div class="col-span-2 sm:col-span-4 xl:col-span-4">
          <h3 class="font-semibold ">Streamer: {{Streamers.streamername}}</h3>
          <p>
           id: {{Streamers.streamerid}}
          </p>
        </div>
        <div class="col-span-2 sm:col-span-1 xl:col-span-1 italic ">
           
             <button
            @click="deleteStreamer(Streamers.id)" class="inline-block px-8 mt-2 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none"
          >
            Löschen
          </button>
            
        </div>
      </div>
 
        
      </div>
      </div>
    </div>
</div>
</template>

<script>

import StreamerCreate from '@/components/DashboardComp/StreamerCreate'
export default {
    layout:'dashbord',
    middleware: 'auth',
    component:{
        StreamerCreate,
      
    },
    data() {
        return {
            Streamer:[],
            id:"",
            ishidden: false,
            edithide: false,
          }
    },

    mounted() {
           
        this.getStreamer();  
           
        },
    methods: {
        getStreamer()
        {
            this.$axios.$get('api/streamer')
            .then((resp)=>{
                
                this.Streamer =resp.data
                
            })
            .catch((err)=> {console.log(err)})

        },
        deleteStreamer(event)
        { 
            this.$axios.$delete('api/streamer/'+event)
            .catch((err)=>{console.log(err)})
            this.$nuxt.refresh(this.getStreamer())
            
            
        },
        refresh()
        {
          this.$nuxt.refresh(this.getStreamer())
        }
        
    },
    

}
</script>

<style>

</style>