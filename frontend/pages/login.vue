<template>
  <div class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
      <div class="leading-loose">
        <form class="max-w-sm m-4 p-10 bg-white bg-opacity-25 rounded shadow-xl">
            <p class="text-white font-medium text-center text-lg font-bold">LOGIN </p>
            <div class="flex flex-col mt-3" v-if="errors">
                <span class="text-red-200 italic">{{ errors }} hhhh</span>
            </div>
              <div class="">
                <label class="block text-sm text-white" for="email">E-mail</label>
                <input  v-model="form.email" class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="email"  placeholder="E-mail" >
              </div>
              <div class="mt-2">
                <label class="block  text-sm text-white">Password</label>
                 <input  v-model="form.password" class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white"
                  type="password"  placeholder="Password" >
              </div>

              <div class="mt-4 items-center flex justify-between">
                <button @click.prevent="login" class="px-4 py-1 text-white  text-center  items-center  font-light tracking-wider bg-gray-900 hover:bg-gray-800 rounded"
                  type="submit">Login</button>
                
              </div>
             

        </form>

      </div>
    </div>
  </div>
</div>
</template>

<script>

export default {
layout: 'login',
middleware:'guest',
 data() {
   return {
      form: {
                email: '',
                password: ''
            },
            errors: ''
   }
 },
  methods: {
    async login() {
                try {
                    await this.$auth.loginWith('laravelSanctum', {data:this.form})
                } catch (err) {
                    if (err.response.status = 422) {
                        this.errors = 'Login Fehlgeschlagen '
                    }
                }
            }
        }
        
}
</script>

<style scoped>
.login{
  
    
  
  background-color: rgb(rgba(88, 75, 75, 0.507), green, blue);
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

