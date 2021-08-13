<template>
<div>
  <div id="menu"  class="container mx-auto px-4 text-white lg:pt-24 lg:pb-64">
      <div class="flex flex-wrap text-center justify-center">
        <div class="w-full lg:w-6/12 px-4">
          <h2 class="text-4xl font-semibold text-white">Team</h2>
          <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
            Hier können Germany Playsgroup Teammitglieder erstellt,bearbeitet und gelöscht werden.
          </p>
        </div>
      </div>
      <div v-if="edithide == true" class="mt-5">
        <TeamEdit :idTeam="teamShow"/> 
        <button
            @click="edithide= false" class="inline-block px-16 py-4 item-center text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none"
          >Cancel
           </button>
       </div>
      <div v-if="edithide == false">
       
      <button
            @click="ishidden = true" class="inline-block px-3 py-4 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"
          >
            Team Hinuzufügen
            </button >
       <div v-if="ishidden == true" class="justify-center"> 
          
           <TeamCreate/>
           <button
            @click="ishidden = false" class="inline-block px-16 py-4 item-center text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none"
          >Cancel
           </button>
       </div>
      </div>
       
     <div v-for="Teams in Team" :key="Teams.id">
      <div class="flex flex-wrap mt-12 justify-center">
      <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 xl:grid-cols-6 gap-4">
          
        <div class="col-span-2 sm:col-span-1 xl:col-span-1">
          <img
            alt="..."
            :src="Teams.image"
            class="h-24 w-24 rounded  mx-auto"
          />
        </div>
        <div class="col-span-2 sm:col-span-4 xl:col-span-4">
          <h3 class="font-semibold ">{{Teams.tittle}}</h3>
          <p> Rolle: {{Teams.role}}</p>
          <p>
           {{Teams.description}}
          </p>
        </div>
        <div class="col-span-2 sm:col-span-1 xl:col-span-1 italic ">
            <button  @click="edithide=true,TeamShow(Teams.id)" 
            class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"
          >
            Bearbeiten 
            </button>
             <button
            @click="deleteTeam(Teams.id),reloade()" class="inline-block px-8 mt-2 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none"
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
import  TeamEdit from '@/components/DashboardComp/TeamEdit'
import TeamCreate from '@/components/DashboardComp/TeamCreate'
export default {
    layout:'dashbord',
    middleware: 'auth',
    component:{
        TeamCreate,
        TeamEdit,
    },
    data() {
        return {
            Team:[],
            id:"",
            ishidden: false,
            edithide: false,
            teamShow: [],
              
          }
           
    },

    mounted() {
           
           this.getid()
           this.getTeam();
         
    
  
           
        },
    methods: {
        getTeam()
        {
            this.$axios.$get('api/team')
            .then((resp)=>{
                
                this.Team =resp.data
                
            })
            .catch((err)=> {console.log(err)})

        },
        
        getid(event){
            this.id = event;
        },
        deleteTeam(event)
        { 
            this.$axios.$delete('api/team/'+event)
            .catch((err)=>{console.log(err)})
            this.$nuxt.refresh(this.getTeam())
            
            
        },
        TeamShow(event)
        {
          this.$axios.$get('api/team/'+event)
            .then((resp)=>{
                
                this.teamShow =resp.data
                
            })
        },
        reloade()
        {
          this.$nuxt.refresh(this.getTeam())
        }
    },
   

}
</script>

<style>

</style>