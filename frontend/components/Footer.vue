<template>
  <div class="footer">
    <footer class="text-gray-400 bg-gray-900 body-font">
      <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
          <span class="ml-3 text-xl">GPSG</span>
        </a>
        <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">
          Copyright © 2021 Alle Rechte vorbehalten | Germany Playsgroup e.V.
        </p>

        <span class=" text-gray-400 inline-flex justify-center sm:ml-auto sm:mt-0 mt-1 justify-end sm:justify-start">
          <a class="sm:pl-4  sm:ml-4  sm:border-l-2" />
          <NuxtLink
            class="text-gray-300  text-lg  hover:text-white px-4 py-2 rounded-md text-sm font-medium"
            to="/impressum"
          >Impressum</NuxtLink>
          <NuxtLink
            class="text-gray-300  text-lg  hover:text-white px-4 py-2 rounded-md text-sm font-medium"
            to="/datenschutz"
          >Datenschutz</NuxtLink>
          <a class="sm:pl-2 sm:ml-4  sm:border-l-2" />
          </nuxtlink></span>

        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">


          <a class="text-gray-400" href="https://www.instagram.com/germanyplaysgroup/">
            <svg
              fill="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              class="w-5 h-5"
              viewBox="0 0 24 24"
            >
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />

            </svg>
          </a>

          <a class="ml-3 text-gray-400" href="https://www.instagram.com/germanyplaysgroup/">
            <svg
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              class="w-5 h-5"
              viewBox="0 0 24 24"
            >
              <rect
                width="20"
                height="20"
                x="2"
                y="2"
                rx="5"
                ry="5"
              />
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01" />
              <div />
            </svg>
          
              
          </a>
        </span>
      </div>
    </footer>
  </div>
</template>
