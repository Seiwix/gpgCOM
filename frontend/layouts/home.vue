<template>
  <div class="flex flex-col h-screen justify-between jarallax">
    <script src="https://kit.fontawesome.com/033ee79b3e.js" crossorigin="anonymous"></script>
 
    <Navbar />
    <Nuxt />
    <Footer />
  </div>
</template>

<script>
import Navbar from '@/components/Nav'
import Footer from '@/components/Footer'

import 'animate.css'

export default {
  components: {
    Navbar,
    Footer,
    
  },
}
</script>