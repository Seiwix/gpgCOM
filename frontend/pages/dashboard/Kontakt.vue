<template>
<div>
  <div id="menu"  class="container mx-auto px-4 text-white lg:pt-24 lg:pb-64">
      <div class="flex flex-wrap text-center justify-center">
        <div class="w-full lg:w-6/12 px-4">
          <h2 class="text-4xl font-semibold text-white">Kontakt Mails</h2>
          <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
            Im Postfach werden alle Kontaktanfragen von der Kontakt Page angezeigt.
          </p>
        </div>
      </div>
      <div v-if="edithide == true"  class="mt-5">
        <KontaktShow :Kontakt="kontaktShow"  /> 
        <button
            @click="edithide= false, getContact()" class="inline-block px-16 py-4 item-center text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none"
          >Cancel
           </button>
       </div>
      
       
      
       
    
       
     <div v-for="Kontaks in Kontakt" :key="Kontaks.id">
      <div class="  flex flex-wrap mt-12 justify-center">
      <div class=" grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 xl:grid-cols-6 gap-4">
          
        <div class="col-span-2 sm:col-span-1 xl:col-span-1">
            
          <h1> {{Kontaks.created_at}}</h1>
        </div>
        <div class="col-span-3 sm:col-span-4 xl:col-span-2">

          <button @click="edithide = true,contactShow(Kontaks.id)" class="font-semibold mb-5">{{Kontaks.name}}  </button>
           
            
        </div>
        <div>
         <button
            @click="deleteContact(Kontaks.id)" class="inline-block px-5  py-1 text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none"
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
import  KontaktShow from '@/components/DashboardComp/KontaktShow'

export default {
    layout:'dashbord',
    middleware: 'auth',
    component:{
     
        KontaktShow,
    },
    data() {
        return {
            Kontakt:[],
            id:"",
            ishidden: false,
            edithide: false,
            kontaktShow: [],
              
          }
           
    },

    mounted() {
           
           this.getid()
           
        },
    methods: {
        getContact()
        {
            this.$axios.$get('api/kontakt')
            .then((resp)=>{
                
                this.Kontakt =resp.data
                
            })
            .catch((err)=> {console.log(err)})

        },
        
        getid(event){
            this.id = event;
        },
        deleteContact(event)
        { 
            this.$axios.$delete('api/kontakt/'+event)
            .catch((err)=>{console.log(err)})
            this.$nuxt.refresh(this.getContact())
            
            
        },
        contactShow(event)
        {
          this.$axios.$get('api/kontakt/'+event)
            .then((resp)=>{
                
                this.kontaktShow =resp.data
                
            })
        }
    },
   
    mounted()
    {
      this.getContact();
    }

}
</script>

<style>

</style>