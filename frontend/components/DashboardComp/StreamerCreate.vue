<template>
  <div class="flex h-auto items-center justify-center  messages  ">
  <div class="grid bg-gray-800 rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
    <div class="flex justify-center py-4">
   
    </div>

    <div class="flex justify-center">
      <div class="flex">
        <h1 class="text-white  font-bold md:text-2xl mt-5 text-xl">Streamer Hinzufügen</h1>
      </div>
    </div>
    <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-lightp px-2 font-semibold">Stremer Name</label>
      <input v-model="input" class="py-2 px-3 bg-gray-700 rounded-lg border-2 border-white mt-1 focus:outline-none focus:ring-2 focus:ring-white focus:border-transparent" type="text" placeholder="Name des Streamers" />
    </div>
    <button @click=" Streamersearch()" class='w-auto bg-green-500 mt-2 hover:bg-green-600 rounded-lg shadow-xl font-medium text-white px-6 py-2'>Suchen</button>
    
    <div class="grid grid-cols-1 mt-5 mx-7" v-for=" datas in datastream" :key="datas.id">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-lightp px-2 font-semibold">Stremer Name</label>
      <input v-model="datas.name" class="py-2 px-3 bg-gray-700 rounded-lg border-2 border-white mt-1 focus:outline-none focus:ring-2 focus:ring-white focus:border-transparent" type="text" placeholder="Name des Partners" />
    </div>
    <div class="grid grid-cols-1 mx-7 " v-for=" datas in datastream" :key="datas.id">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-lightp px-2 font-semibold">Streamer Id</label>
      <input v-model=" datas.id" class="py-2 px-3 bg-gray-700 rounded-lg border-2 border-white mt-1 focus:outline-none focus:ring-2 focus:ring-white focus:border-transparent" type="text" placeholder="Link vom Partner z.B Webseite " />
    </div>
    <div class="grid grid-cols-1 mx-7 " v-for=" datas in datastream" :key="datas.id">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-lightp px-2 font-semibold">Streamer Bild</label>
      <img
            alt="..."
            :src="datas.image"
            class=" mx-auto"
          />
       
    </div> 
    
    
    
    

    

    <div v-for=" datas in datastream" :key="datas.id" class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
      
      <button @click="submitFile(datas.id,datas.name,datas.image)" class='w-auto bg-green-500 hover:bg-green-600 rounded-lg shadow-xl font-medium text-white px-6 py-2'>Erstellen</button>
    </div>

  </div>
</div>
</template>


<script>
export default {

data() {
  return {
    input:'',
    datastream:[],
    data:{
      tittle:[],
      link:'',
      description:[],
      file:'',

    },
  }
},
methods: {
 
  submitFile(id,name,image) {


    
               const fd = new FormData()
               
               fd.append('streamername',name);
               fd.append('streamerid',id);
               fd.append('streamerimage',image);
              
               console.log(fd);
               
                  
               
              this.$axios.post('/api/streamer',fd, {
                   'Content-Type': 'multipart/form-data'
               })
               
                .catch(error => {
                console.log(error.response)

               }) 
  },
  Streamersearch()
  {  this.datastream =[];
       let fetchlink  =   'https://api.twitch.tv/helix/search/channels?query='+this.input;//'https://api.twitch.tv/kraken/streams/115779211/'; //https://api.twitch.tv/kraken/streams/metadata?user_login=powerkev 115779211
        fetch(fetchlink,{
            method: 'get',
            headers: new Headers({
              'Authorization': 'Bearer go4wd4l9y5je8y7jlahkkfe33hvso4',
              'Client-ID':'ef22lnw3g2vnoq857rll3amexow94z',
              'Accept': 'application/vnd.twitchtv.v5+json'
            })
        })
        .then(
            function(response){
                return  response.json();
            }

        )
        .then(
            data=>{
                console.log(data);
               let datalist =[];

                for (var key in data.data)
                {   if(data.data[key].display_name == this.input)
                    {
                        datalist.push({
                        id: data.data[key].id,
                        name: data.data[key].display_name,
                        image:   data.data[key].thumbnail_url,
                     
                        
                  
                    });
                    
                
                    this.datastream =[...this.datastream,...datalist]
                    }
                }
            }
        )
        
    }
     
},

}
</script>

<style>

</style>