export default {
  // Global page headers (https://go.nuxtjs.dev/config-head)

  head: {
    title: 'Germany-Playsgroup',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
      

    
    ],
    
  },

  

  // Global CSS (https://go.nuxtjs.dev/config-css)
  css: [
    '@/assets/css/main.css',
  ],

  // Plugins to run before rendering page (https://go.nuxtjs.dev/config-plugins)
  plugins: [],

  // Auto import components (https://go.nuxtjs.dev/config-components)
  components: true,

  // Modules for dev and build (recommended) (https://go.nuxtjs.dev/config-modules)
  buildModules: [
    // https://go.nuxtjs.dev/tailwindcss
    '@nuxtjs/tailwindcss',
    '@nuxtjs/fontawesome'
  ],
  fontawesome:{
    component: 'fa',
    icons:{
      solid : true,
      brands: true,
    }

    
  },

  // Modules (https://go.nuxtjs.dev/config-modules)
  modules: [
    // https://go.nuxtjs.dev/axios
    '@nuxtjs/axios',
    '@nuxtjs/auth-next'
    
  ],

  
    loading: '~/components/LoadingBar.vue',
 
  
  
  publicRuntimeConfig: {
    axios: {
      browserBaseURL: process.env.BROWSER_BASE_URL
    }
  },

  // Axios module configuration (https://go.nuxtjs.dev/config-axios)
  axios: {
    baseURL: 'http://localhost:8000/',
    credentials: true
  },
 
  auth: {
    strategies: {
        'laravelSanctum': {
            provider: 'laravel/sanctum',
            url: 'http://localhost:8000',
            endpoints: {
                login: {
                    url: '/login'
                },
                logout: {
                    url: '/logout'
                },
                user: {
                    url: '/api/user'
                },
            },
            user: {
                property: false
            }
        },
    },
    redirect: {
        login: '/login',
        logout: '/',
        home: '/dashboard',
    }
},

  // Build Configuration (https://go.nuxtjs.dev/config-build)
  build: {
    // extend(config, { isDev, isClient }) {
    //   // Run ESLint on save
    //   if (isDev && isClient) {
    //     config.module.rules.push({
    //       enforce: 'pre',
    //       test: /\.(js|vue)$/,
    //       loader: 'eslint-loader',
    //       exclude: /(node_modules)/,
    //     })
    //   }
    // },
  },
}
