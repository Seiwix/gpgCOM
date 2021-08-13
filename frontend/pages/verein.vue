<template>
  <div class="gpg-about my-auto">
    <section class="bg-gray-700  bg-opacity-50">
      <div class="container mx-auto px-5 py-16">
        <div v-for="Vereins in Verein" :key="Vereins.id" class="lg:flex items-center">
          <div class="animate__animated animate__slideInLeft  lg:w-1/2">
            <h2 class="text-white lg:my-auto dark:text-gray-300 text-3xl font-bold">
              {{Vereins.tittle}}
            </h2>
            <p class="text-white lg:max-w-md mt-4">
             {{Vereins.description}}
            </p>
          </div>

          <div class="mt-8 lg:mt-0 lg:w-1/2">
            <div class="flex items-center justify-center lg:justify-end">
              <div class="max-w-lg">
                <img
                  class="w-full h-auto object-cover "
                  :src=Vereins.image
                  alt=""
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  
</template>

<script>

export default {
  data() {
    return {
      Verein:[]
    }
    
  },
  methods: {
    getVerein()
    {
      this.$axios.$get('/api/verein')
      .then((resp)=>{
                        
                        this.Verein = resp.data;
                    })
                    
                    .catch((err)=>{console.log(err)})
    }
  },
  mounted() {
        this.getVerein();
  },

}
</script>
