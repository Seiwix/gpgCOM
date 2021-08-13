<template>
<div>
  <div id="menu"  class="container mx-auto px-4 text-white lg:pt-24 lg:pb-64">
      <div class="flex flex-wrap text-center justify-center">
        <div class="w-full lg:w-6/12 px-4">
          <h2 class="text-4xl font-semibold text-white">Partner</h2>
          <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
            Hier können Germany Playsgroup Partner erstellt,bearbeitet und gelöscht werden.
          </p>
        </div>
      </div>
      <div v-if="edithide == true" class="mt-5">
        <PartnerEdit :idPartner="partnersShow"/> 
        <button
            @click="edithide= false" class="inline-block px-16 py-4 item-center text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none"
          >Cancel
           </button>
       </div>
      <div v-if="edithide == false">
       
      <button
            @click="ishidden = true" class="inline-block px-3 py-4 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"
          >
            Partner Hinuzufügen
            </button >
       <div v-if="ishidden == true" class="justify-center"> 
          
           <PartnerCreate/>
           <button
            @click="ishidden = false ,getPartner()" class="inline-block px-16 py-4 item-center text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none"
          >Cancel
           </button>
       </div>
      </div>
       
     <div v-for="Partners in Partner" :key="Partners.id">
      <div class="flex flex-wrap mt-12 justify-center">
      <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 xl:grid-cols-6 gap-4">
          
        <div class="col-span-2 sm:col-span-1 xl:col-span-1">
          <img
            alt="..."
            :src="Partners.image"
            class="h-24 w-24 rounded  mx-auto"
          />
        </div>
        <div class="col-span-2 sm:col-span-4 xl:col-span-4">
          <h3 class="font-semibold ">{{Partners.tittle}}</h3>
          <p>
           {{Partners.description}}
          </p>
        </div>
        <div class="col-span-2 sm:col-span-1 xl:col-span-1 italic ">
            <button  @click="getid(Partners.id),edithide=true,partnershow(Partners.id)" 
            class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"
          >
            Bearbeiten 
            </button>
             <button
            @click="deletePartner(Partners.id)" class="inline-block px-8 mt-2 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none"
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
import  PartnerEdit from '@/components/DashboardComp/PartnerEdit'
import PartnerCreate from '@/components/DashboardComp/PartnerCreate'
export default {
    layout:'dashbord',
    middleware: 'auth',
    component:{
        PartnerCreate,
        PartnerEdit,
    },
    data() {
        return {
            Partner:[],
            id:"",
            ishidden: false,
            edithide: false,
            partnersShow: [],
              
          }
           
    },

    mounted() {
           
           this.getid()
           
        },
    methods: {
        getPartner()
        {
            this.$axios.$get('api/partner')
            .then((resp)=>{
                
                this.Partner =resp.data
                
            })
            .catch((err)=> {console.log(err)})

        },
        
        getid(event){
            this.id = event;
        },
        deletePartner(event)
        { 
            this.$axios.$delete('api/partner/'+event)
            .catch((err)=>{console.log(err)})
            this.$nuxt.refresh(this.getPartner())
            
            
        },
        partnershow(event)
        {
          this.$axios.$get('api/partner/'+event)
            .then((resp)=>{
                
                this.partnersShow =resp.data
                
            })
        }
    },
   
    mounted()
    {
      this.getPartner();
    }

}
</script>

<style>

</style>