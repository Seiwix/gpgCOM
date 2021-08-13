<template>
  <div class="mb-auto h-10">
    <bg-video />
    <HomeDiv />
  </div>
</template>

<script>
import BgVideo from '@/components/BackgroundVideo'
import HomeDiv from '@/components/HomeDiv'

export default{
  layout:'home',
  components:{
    BgVideo,
    HomeDiv
  }
}
</script>

