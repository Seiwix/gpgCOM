<template>
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-700 text-white">
  <div class="fixed flex flex-col top-0 left-0 w-64 bg-gray-800 h-full border-r ">
    <div class="flex items-center text-lg justify-center h-20 border-b">
      <div>Germany Playsgroup Admin</div>
    </div>
    <div class="overflow-y-auto overflow-x-hidden flex-grow">
      <ul class="flex flex-col py-4 text-white space-y-1">
        
        <li class="mt-3">
          <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50  hover:text-gray-400 border-l-4 border-transparent hover:border-indigo-500 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
            </span>
            <span class="ml-2 text-lg tracking-wide truncate">Dashboard</span>
          </a>
        </li>
      
        <li>
          <button @click="openms = true" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50  hover:text-gray-400 border-l-4 border-transparent hover:border-indigo-500 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
            </span>
            <span class="ml-2 text-lg tracking-wide truncate">Messages</span>
          </button>
          <ul v-if="openms == true">
                 <li> 
                   <nuxt-link to="/dashboard/kontakt/"  class="relative flex flex-row items-center h-11 mt-1 focus:outline-none hover:bg-gray-50  hover:text-gray-400 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                   <span @click="openms =false" class="ml-12 text-lg tracking-wide truncate">Kontakt</span>
                   </nuxt-link>
                 </li>
                 <li> 
                   <nuxt-link to="/dashboard/Bewerben/"  class="relative flex flex-row items-center h-11  focus:outline-none hover:bg-gray-50  hover:text-gray-400 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                   <span @click="openms =false"  class="ml-12 text-lg tracking-wide truncate">Bewerben</span>
                   </nuxt-link>
                 </li>
          </ul>
        </li>
        <li>
            <button @click="open =true" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50  hover:text-gray-400 border-l-4 border-transparent hover:border-indigo-500 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
            </span>
            <span class="ml-2 text-lg tracking-wide truncate">Pages</span>
            
            
            
            </button>
                <ul v-if="open == true">
                 <li> 
                   <nuxt-link to="/dashboard/Verein/"  class="relative flex flex-row items-center h-11 mt-1 focus:outline-none hover:bg-gray-50  hover:text-gray-400 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                   <span @click="open =false" class="ml-12 text-lg tracking-wide truncate">Verein</span>
                   </nuxt-link>
                 </li>
                 <li> 
                   <nuxt-link to="/dashboard/team/"  class="relative flex flex-row items-center h-11  focus:outline-none hover:bg-gray-50  hover:text-gray-400 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                   <span @click="open =false"  class="ml-12 text-lg tracking-wide truncate">Team</span>
                   </nuxt-link>
                 </li>
                 <li> 
                   <nuxt-link to="/dashboard/streamer/"  class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50  hover:text-gray-400 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                   <span  @click="open =false" class="ml-12 text-lg tracking-wide truncate">Streamer</span>
                   </nuxt-link>
                 </li>
                 <li> 
                   <nuxt-link to="/dashboard/partner/"  class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50  hover:text-gray-400 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                   <span  @click="open =false" class="ml-12 text-lg tracking-wide truncate">Partner</span>
                   </nuxt-link>
                 </li>
                </ul>
        </li>
        
        
        
        
        
        <li>
          <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50  hover:text-gray-400 border-l-4 border-transparent hover:border-indigo-500 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
            </span>
            <span  @click.prevent="logout" class="ml-2 text-lg  tracking-wide truncate">Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
</template>

<script>
export default {
    data() {
      return {
        open: false,
        openms : false,
      }
      
    },
    methods: {
      logout(){
        this.$auth.logout()
      }
    },
}
</script>

<style scoped>
.title {
    color: white;
    font-size: 24px;
    margin-top: 10px;
}
.menu-items {
    display: flex;
    flex-direction: column;
    margin-top: 40px;
    margin-left: 6px;
}
.menu-items > * {
    margin-top: 60px;
}
.side-btn {
    border: none;
    padding: 16px 0px;
    cursor: pointer;
    font-size: 16px;
    font-weight: 500;
    color: white;
    background-color: transparent;
}
.side-btn:focus {
    outline: none;
}
.side-btn.active {
    position: relative;
    background-color: white;
    color: teal;
    font-weight: 600;
    margin-left: 10px;
    border-radius: 30px 0 0 30px;
}
.side-btn.active::before {
    top: -30px;
}
.side-btn.active::after {
    bottom: -30px;
}
.side-btn.active::before, .side-btn.active::after {
    position: absolute;
    content: "";
    right: 0;
    height: 30px;
    width: 30px;
    background-color: white;
}
.side-btn.active .link-container::before {
    top: -60px;
}
.side-btn.active .link-container::after {
    bottom: -60px;
    z-index: 99;
}
.side-btn.active .link-container::before, .side-btn.active .link-container::after {
    position: absolute;
    content: "";
    right: 0px;
    height: 60px;
    width: 60px;
    border-radius: 50%;
    background-color: teal;
}
</style>