<template>
<div>
  <div id="menu"  class="container mx-auto px-4 text-white lg:pt-24 lg:pb-64">
      <div class="flex flex-wrap text-center justify-center">
        <div class="w-full lg:w-6/12 px-4">
          <h2 class="text-4xl font-semibold text-white">Bewerbungs Mails</h2>
          <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
            Im Postfach werden alle Bewerbungen von der Mitglied werden  Page angezeigt.
          </p>
        </div>
      </div>
      <div v-if="edithide == true" class="mt-5">
        <ApplyShow :Bewerbung="bewerbenShow"/> 
        <button
            @click="edithide= false,getApply()" class="inline-block px-16 py-4 item-center text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none"
          >Cancel
           </button>
       </div>
    
       
      
    
    
       
     <div v-for="Bewerbungs in Bewerbung" :key="Bewerbungs.id">
      <div class="  flex flex-wrap mt-12 justify-center">
      <div class=" grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 xl:grid-cols-6 gap-4">
          
        <div class="col-span-2 sm:col-span-1 xl:col-span-1">
            
          <h1> {{Bewerbungs.created_at}}</h1>
        </div>
        <div class="col-span-3 sm:col-span-4 xl:col-span-2">

          <button @click="edithide = true,Applyshow(Bewerbungs.id)" class="font-semibold mb-5">{{Bewerbungs.name}}  </button>
           
            
        </div>
        <div>
         <button
            @click="deleteApply(Bewerbungs.id)" class="inline-block px-5  py-1 text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none"
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
import  ApplyShow from '@/components/DashboardComp/ApplyShow'

export default {
    layout:'dashbord',
    middleware: 'auth',
    component:{
       
        ApplyShow,
    },
    data() {
        return {
            Bewerbung:[],
            id:"",
            ishidden: false,
            edithide: false,
            bewerbenShow: [],
              
          }
           
    },

    mounted() {
           
           this.getid()
           
        },
    methods: {
        getApply()
        {
            this.$axios.$get('api/bewerben')
            .then((resp)=>{
                
                this.Bewerbung =resp.data
                
            })
            .catch((err)=> {console.log(err)})

        },
        
        getid(event){
            this.id = event;
        },
        deleteApply(event)
        { 
            this.$axios.$delete('api/bewerben/'+event)
            .catch((err)=>{console.log(err)})
            this.$nuxt.refresh(this. getApply())
            
            
        },
        Applyshow(event)
        {
          this.$axios.$get('api/bewerben/'+event)
            .then((resp)=>{
                
                this.bewerbenShow =resp.data
                
            })
        }
    },
   
    mounted()
    {
      this.getApply();
    }

}
</script>

<style>

</style>