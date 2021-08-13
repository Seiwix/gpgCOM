<template>
  <nav class="  fixed text-gray-400 bg-gray-900 body-font z-50  w-full">
    <div class="relative flex items-center justify-between h-16">
      <!-- Header logo -->
      <div v-if="isOpen != true" class=" container xl:text-3xl   md:w-auto lg:text-xl   ">
        <a></a> 
        <Nuxt-link
         to = "/">
       <!-- <span  class="font-test space-x-10 xl:text-3xl lg:text-xl   h-8 text-white">Germany Playsgroup e.V.</span> -->
		<img src="~assets/images/logog.png" alt="">
        </Nuxt-link>
      </div>
  
      <!-- Mobile toggle -->
      <div class="lg:hidden ">
        <button @click="drawer">
          <svg
            class="h-8 w-8 fill-current text-white"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

      <!-- Navbar -->
      <div class="hidden flex lg:block lg:ml-6">
        <div class="flex space-x-4">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <NuxtLink
            to="/"
            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
          >
            Home
          </NuxtLink>
          
          <NuxtLink
            to="/verein"
            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
          >
            Verein
          </NuxtLink>
          <NuxtLink
            to="/team"
            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
          >
          Team 
          </NuxtLink>
          <NuxtLink
            to="/mitglied"
            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
          >
            Mitglied werden
          </NuxtLink>
          <NuxtLink
            to="/streamer"
            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
          >
            Streamer
          </NuxtLink>
          <NuxtLink
            to="/partner"
            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
          >
            Partner
          </NuxtLink>
          <a
            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
            target="_blank"
            href="https://forum.germany-playsgroup.de/"
          >
            Forum
          </a>
          <NuxtLink
            to="/kontakt"
            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
          >
            Kontakt
          </NuxtLink>
        </div>
      </div>

      <!-- Dark Background Transition -->
      <transition
        enter-class="opacity-0"
        enter-active-class="ease-out transition-medium"
        enter-to-class="opacity-100"
        leave-class="opacity-100"
        leave-active-class="ease-out transition-medium"
        leave-to-class="opacity-0"
      >
        <div
          v-show="isOpen"
          class="z-10 fixed inset-0 transition-opacity"
          @keydown.esc="isOpen = false"
        >
          <div
            class="absolute inset-0 bg-black opacity-50"
            tabindex="0"
            @click="isOpen = false"
          />
        </div>
      </transition>

      <!-- Drawer Menu -->
      <aside
        class="p-5 transform top-0 left-0 w-64 bg-gray-900 fixed h-full overflow-auto ease-in-out transition-all duration-300 z-30"
        :class="isOpen ? 'translate-x-0' : '-translate-x-full'"
      >
        <div class="close">
          <button
            class="absolute top-0 right-0 mt-4 mr-4"
            @click=" isOpen = false"
          >
            <svg
              class="w-6 h-6"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <span
          class="flex w-full items-center p-4 border-b"
          @click="isOpen = false"
        >
          <a class="text-white text-xl">Germany Playsgroup e.V.</a>
        </span>

        <ul class="   divide-y font-sans">
          <li >
            <nuxt-link to="/">
            <a
              
              class="my-4  inline-block"
              @click="isOpen = false"
            >Home</a>
            </nuxt-link>
          </li>
          <li>
            <nuxt-link to="/team">
            <a
              
              class="my-4 inline-block"
              @click="isOpen = false"
            >Team</a>
            </nuxt-link>
          </li>
          <li>
            <nuxt-link to="/verein">
            <a
              
              class="my-4 inline-block"
              @click="isOpen = false"
            >Verein</a>
            </nuxt-link>
          </li>
          <li>
            <nuxt-link to="/mitglied">
            <a
             
              class="my-4 inline-block"
              @click="isOpen = false"
            >Mitglied werden</a>
             </nuxt-link>
          </li>
          <li>
            <nuxt-link to="/streamer">
            <a
           
              class="my-4 inline-block"
              @click="isOpen = false"
            >Streamer</a>
            </nuxt-link>
          </li>
          <li>
            <nuxt-link to="/partner">
            <a
              
              class="my-4 inline-block"
              @click="isOpen = false"
            >Partner</a>
            </nuxt-link>
          </li>
          <li>
            <a
              target="_blank"
              href="https://forum.germany-playsgroup.de/"
              class="my-4 inline-block"
              @click="isOpen = false"
            >Forum</a>
          </li>
          <li>
            <nuxt-link to="/kontakt">
            <a
            
              class="my-4 inline-block"
              @click="isOpen = false"
            >Kontakt</a>
            </nuxt-link>
          </li>
          <li>
            <a
              href=""
              class="my-4 inline-block"
            />
          </li>
        </ul>

        <div class="follow">
          <p class="italic font-sans text-sm" />
          <div class="social flex space-x-5 mt-4 " />
        </div>
      </aside>
    </div>
  </nav>
</template>

<script>
export default {
  data() {
    return {
      isOpen: false
    };
  },
  watch: {
    isOpen: {
      immediate: true,
      handler(isOpen) {
        if (process.client) {
          if (isOpen) document.body.style.setProperty("overflow", "hidden");
          else document.body.style.removeProperty("overflow");
        }
      }
    }
  },
  mounted() {
    document.addEventListener("keydown", e => {
      if (e.keyCode == 27 && this.isOpen) this.isOpen = false;
    });
  },
  methods: {
    drawer() {
      this.isOpen = !this.isOpen;
    }
  }
};
</script>
<style scoped>
.font-test
{
  font-family: 'Dela Gothic One';
}

</style>
