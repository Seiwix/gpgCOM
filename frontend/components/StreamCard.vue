<template>
  <!-- component -->
  <div class="container my-12 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
      <!-- Column -->

      <!-- END Column -->
      <!-- Column -->
      <div  v-for="streamers in live" :key="streamers.id" class="my-1 px-1 w-full md:w-auto lg:my-4 lg:px-4 lg:w-auto">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg">
          <div class="block h-auto w-full">
            <iframe
              :src="link1+streamers.name+link2" 
              frameborder="0"
              allowfullscreen="true"
              scrolling="no"
              height="300"
              width="500"
            ></iframe>
          </div>

          <header
            class="
              bg-gray-800
              flex
              items-center
              justify-between
              leading-tight
              p-2
              md:p-4
            "
          >
            <h1 class="text-lg">
              <a
                class="text-white no-underline hover:underline text-black"
                href="#"
              >
                {{streamers.name}}
              </a>
            </h1>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
    </div>
  </div>
</template>
<script>
export default {
    data() {
        return {
            link1:'https://player.twitch.tv/?channel=',
            link2:'&parent=beta.germany-playsgroup.de&autoplay=false',
            streamer:[],
            live: [],
        }
    },
  methods: {
    fetchstream(id) {
     

      let fetchlink = 'https://api.twitch.tv/kraken/streams/' + id 
      fetch(fetchlink, {
        method: 'get',
        headers: new Headers({
          Authorization: 'Bearer go4wd4l9y5je8y7jlahkkfe33hvso4',
          'Client-ID': 'ef22lnw3g2vnoq857rll3amexow94z',
          Accept: 'application/vnd.twitchtv.v5+json',
        }),
      })
        .then(function (response) {
          return response.json()
        })
        .then((data) => {
          let datalist = []
          
          if (data.stream != null) {
              
            datalist.push({
              id: data.stream.channel.id,
              name: data.stream.channel.name,
              live: data.stream.broadcast_platform,
            })

            this.live = [...this.live, ...datalist]
          } else {
            console.log('ofline')
          }
        })
    },
     getst()
    {
         
                this.$axios.$get('/api/streamer')
                    .then((resp)=>{
                        let data = [];
                        this.streamer = resp.data;
                        data = resp.data;
                        
                        for(var key in data)
                        {  let id= data[key].streamerid
                            this.fetchstream(id);
                        }
                        
                    })
                    

                    
                    .catch((err)=>{console.log(err)})
            
    },
  },
  mounted() {
    this.getst()
    
},
}
</script>
