<template>
  <div class="gpg-video fixed">
    <video
      class="w-full fixed gpg-video"
      playsinline
      autoplay
      loop
      muted
    >
      <source
        src="~/assets/videos/gpg-gaming.mp4"
        type="video/mp4"
      >
    </video>
  </div>
</template>

<script>

</script>

<style>
.gpg-video {
  margin-top: -20px;
  z-index: -1;
  object-fit: cover;
  width: 100vw;
  height: 100vh;
  top: 0;
  left: 0;
}
</style>
