<template>
    <div>
        <div  class="w-6/12 px-4 flex ml-48 flex-col bg-gray-800 rounded-r-3xl">
      <div class="flex justify-between items-center ml-52 h-32 border-b-2 mb-8">
        <div class="flex space-x-4 items-center">
          <div class="h-20 w-40 rounded-full overflow-hidden">
            
          </div>
          <div class="flex flex-col">
            <h3 class="font-semibold  text-lg">Name:  {{Bewerbung.name}}</h3>
            <p class="text-light text-gray-400">Email: {{Bewerbung.email}} </p>
          </div>
        </div>
        
      </div>
      <div>
        <h1 class="font-bold text-2xl">Bewerbung</h1>
        <article class="mt-2 text-gray-500 leading-7 tracking-wider">
          <p></p>
          <p>{{Bewerbung.message}}</p>
          
        </article>
        
      
      </div>
    </div>
    </div>
</template>
<script>

export default {
props: ['Bewerbung'],    
}
</script>