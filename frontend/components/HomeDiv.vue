<template>
  <div
  
    class="gpg-home-container fixed"
  >
  

    <div class=" flex flex-wrap w-full mb-20 flex-col items-center text-center">
      <div class ="inner">
      <h1 class=" animate__animated animate__slideInDown text-white md:w-32 lg:w-48 sm:text-lg text-center md:font-serif gpg-font-bold gpg-header">
        GERMANY PLAYSGROUP
      </h1>
      <div class="flex m-auto flex-row flex-wrap	justify-center items-center">
        <NuxtLink to="/verein">
          <button
            class=" animate__animated animate__backInUp transition uppercase px-12 py-4 rounded gpg-bg-primary text-blue-50 max-w-max shadow-sm hover:shadow-lg hover:bg-green-800  hover:text-white justify-center"
          >
            <span>Erfahre Mehr!</span>
          </button>
        </NuxtLink>
      </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
/* TODO MAKE RESPONSIVE */
.gpg-home-container{
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.gpg-header{
  font-size: 6.375rem;
  font-weight: bold;
  width:max-content;

}
@media screen and (max-width: 50em) {
.gpg-header{
  font-size: 4.375rem;
  font-weight: bold;
  width:min-content;
}
.gpg-home-container{
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
}
}
@media screen and (max-width: 30em) {
.gpg-header{
  font-size: 3.100rem;
  font-weight: bold;
  width:min-content;
}
.gpg-home-container{
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.inner>h1{
  animation: Slide_Up 1.4s ease;
}
.inner>p{
  animation: Slide_Up 2.2s ease;
}
@keyframes Slide_Up {
  0%{
    transform: translateY(250px);
  }
  100%{
    transform: translateY(0);
  }
}

}
</style>
