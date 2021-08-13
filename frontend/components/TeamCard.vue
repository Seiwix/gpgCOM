<template>
<div >
	 
  <div  class="grid animate__animated  animate__slideInDown animate__delay-1s animate__slower gap-y-10 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-3 gap-6" >
	
			<div v-for="teams in Team" :key="teams.id" class="flex flex-col bg-gray-800 items-center justify-center bg-white p-4 shadow rounded-lg">
				<div class="inline-flex shadow-lg border border-gray-800 rounded-full overflow-hidden h-40 w-40">
					<img :src=teams.image
						 alt=""
						 class="h-full w-full object-cover">
				</div>

				<h2 class="mt-4 font-bold text-xl"> {{teams.tittle}} </h2>
				<h6 class="mt-2 text-sm font-medium">{{teams.role}}</h6>

				<p class="text-base text-gray-500 text-center mt-3">
					{{teams.description}}
				</p>

				
			</div>
    

			
  </div>
</div>
</template>
<script>
export default {
	created() {
		this.getTeam();
		
	},
	mounted() {
		
	},
	data() {
		return {
			Team :[],
		}
	},
	methods: {
		getTeam()
   	 	{
         
                this.$axios.$get('/api/team')
                    .then((resp)=>{
                        
                        this.Team = resp.data;
                    })
                    
                    .catch((err)=>{console.log(err)})
            
    	},


	},
	
	
	
}
</script>
