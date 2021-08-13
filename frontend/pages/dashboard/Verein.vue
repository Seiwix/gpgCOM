<template>
<div>
  <div id="menu"  class="container mx-auto px-4 text-white lg:pt-24 lg:pb-64">
      <div class="flex flex-wrap text-center justify-center">
        <div class="w-full lg:w-6/12 px-4">
          <h2 class="text-4xl font-semibold text-white">Verein</h2>
          <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
            Hier kann die  Germany Playsgroup   erstellt,bearbeitet und gelöscht werden.
          </p>
        </div>
      </div>
      <div v-if="edithide == true" class="mt-5">
        <VereinEdit :idVerein="vereinShow"/> 
        <button
            @click="edithide= false" class="inline-block px-16 py-4 item-center text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none"
          >Cancel
           </button>
       </div>
      <div v-if="edithide == false">
       
      <button
            @click="ishidden = true" class="inline-block px-3 py-4 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"
          >
            Verein Hinuzufügen
            </button >
       <div v-if="ishidden == true" class="justify-center"> 
          
           <VereinCreate/>
           <button
            @click="ishidden = false" class="inline-block px-16 py-4 item-center text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none"
          >Cancel
           </button>
       </div>
      </div>
       
     <div v-for="Vereins in Verein" :key="Vereins.id">
      <div class="flex flex-wrap mt-12 justify-center">
      <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 xl:grid-cols-6 gap-4">
          
        <div class="col-span-2 sm:col-span-1 xl:col-span-1">
          <img
            alt="..."
            :src="Vereins.image"
            class="h-24 w-24 rounded  mx-auto"
          />
        </div>
        <div class="col-span-2 sm:col-span-4 xl:col-span-4">
          <h3 class="font-semibold ">{{Vereins.tittle}}</h3>
          
          <p>
           {{Vereins.description}}
          </p>
        </div>
        <div class="col-span-2 sm:col-span-1 xl:col-span-1 italic ">
            <button  @click="edithide=true,VereinShow(Vereins.id)" 
            class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"
          >
            Bearbeiten 
            </button>
             <button
            @click="deleteVerein(Vereins.id)" class="inline-block px-8 mt-2 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none"
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
import  VereinEdit from '@/components/DashboardComp/VereinEdit'
import VereinCreate from '@/components/DashboardComp/VereinCreate'
export default {
    layout:'dashbord',
    middleware: 'auth',
    component:{
        VereinCreate,
        VereinEdit,
    },
    data() {
        return {
            Verein:[],
            id:"",
            ishidden: false,
            edithide: false,
            vereinShow: [],
              
          }
           
    },

    mounted() {
           
           this.getid()
           this.getVerein();
           
        },
    methods: {
        getVerein()
        {
            this.$axios.$get('api/verein')
            .then((resp)=>{
                
                this.Verein =resp.data
                
            })
            .catch((err)=> {console.log(err)})

        },
        
        getid(event){
            this.id = event;
        },
        deleteVerein(event)
        { 
            this.$axios.$delete('api/verein/'+event)
            .catch((err)=>{console.log(err)})
            this.$nuxt.refresh(this.getVerein())
            
            
        },
        VereinShow(event)
        {
          this.$axios.$get('api/verein/'+event)
            .then((resp)=>{
                
                this.vereinShow =resp.data
                
            })
        }
    },
    

}
</script>

<style>

</style>