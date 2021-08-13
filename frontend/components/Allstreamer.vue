<template>
<div>
    <div class = "mt-4 text-center text-white  text-3xl"> 
       <h1>Streamer </h1>
   </div>
  <div
    class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-4 xl:grid-cols-6 gap-4 mt-16"
  >
   
    <div
      class="
        flex flex-col
        items-center
        justify-center
        bg-gray-800
        p-4
        shadow
        rounded-lg
      " v-for="streamers in streamer" :key="streamers.id"
    >
      <div
        class="
          inline-flex
          shadow-lg
          
          rounded-full
          overflow-hidden
          h-40
          w-40
        "
      >
        <img
          :src="streamers.streamerimage"
          alt=""
          class="h-full w-full "
        />
      </div>

      <a target="_blank" :href=link+streamers.streamername class="mt-4 font-bold text-lg">{{streamers.streamername}}</a>
     

      <p class="text-xs text-gray-500 text-center mt-3">
        
      </p>

      
    </div>
  </div>
</div>
</template>

<script>
export default {
  data() {
    return {
      streamer: [],
      link:'https://www.twitch.tv/'
    }
  },
  methods: {
    getst() {
      this.$axios
        .$get('/api/streamer')
        .then((resp) => {
          this.streamer = resp.data
          
        })

        .catch((err) => {
          console.log(err)
        })
    },
  },
  created() {
     this.getst()
  },
}
</script>

<style>
</style>