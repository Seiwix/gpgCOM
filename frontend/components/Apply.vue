<template>
<div class ="m-20 ">
    <form id="contact-me" class=" animate__animated  animate__slideInLeft w-full mx-auto max-w-3xl bg-gray-900 shadow p-8 text-gray-700 ">
    <h2 class="w-full text-center  text-white my-2 text-3xl font-bold leading-tight my-5">Bewerben</h2>
    <p class="text-white mb-2" v-if="error !='' ">{{error}}</p>
    <div class="flex flex-wrap mb-6">
        <div class="relative w-full appearance-none label-floating">
            <input v-model="name" class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-700 border border-gray-700 rounded focus:outline-none text-white focus:border-gray-500"
             placeholder="Name" >
            <label for="name" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                Name
            </label>
        </div>
    </div>
    <!-- email field -->
    <div class="flex flex-wrap mb-6">
        <div class="relative w-full appearance-none label-floating">
            <input v-model="email" class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-700 border border-gray-700 text-white rounded  focus:border-gray-500"
            id="name" type="text" placeholder="Email" required>
            <label for="name" class="absolute tracking-wide py-2 text-gray-400 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                Email
            </label>
        </div>
    </div>
    <!-- Message field -->
    <div class="flex flex-wrap mb-6">
        <div class="relative w-full appearance-none label-floating">
            <textarea v-model="message" class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-700 border border-gray-700 rounded focus:outline-none text-white focus:border-gray-500"
                id="message" type="text" placeholder="Bewerbung"></textarea>
                <label for="message" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">Bewerbung...
            </label>
        </div>
    </div>
    <a class="mb-2 text-center text-white" v-if="finished !=''">{{finished}}</a>
    <div class="mt-2"v-if="finished ==''">
        <button @click.prevent="send" class="w-full shadow text-white bg-indigo-500 hover:bg-indigo-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
            type="submit">
            Send
        </button>

    </div>

</form>
</div>

</template>
<script>
export default {
    data() {
        return {
            
            name:'',
            email:'',
            message:[],
            error:'',
            finished:''
            
        }
    },
    methods: {
        
        send()
        {
            if(this.name != '' && this.email != ''  && this.message != [])
            {
               const fd = new FormData()
               fd.append('name',this.name);
               fd.append('email',this.email);
               fd.append('message',this.message)
                   
               
               
               this.$axios.post('/api/bewerben',fd, {
                   'Content-Type': 'multipart/form-data'
               })
                
               .then((response)=>{
                   this.finished = response.data;
               })
                .catch(error => {
                console.log(error.response)

               })
            }
            else
            {
                this.error ="Bitte prüfe alle deine Eingaben"
            }
        }

        
    },
}
</script>