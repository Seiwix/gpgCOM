<template>
  <div class="flex flex-col h-screen justify-between jarallax">
    <BgParticleVideo />
    <Navbar />
    <Nuxt />
    <Footer />
  </div>
</template>

<script>
import Navbar from '@/components/Nav'
import Footer from '@/components/Footer'
import BgParticleVideo from '@/components/bg-particle'
import 'animate.css'

export default {
  components: {
    Navbar,
    Footer,
    BgParticleVideo
  },
}
</script>
