<template>

   <div class="container-videogames">
       <table border="1">
           <tr>
               <th>Title</th>
               <th>Subtitle</th>
               <th>Rating</th>
               <th v-if="user">Action</th>
           </tr>
           <tr v-for="videogame in videogames" :key="videogame.id">
               <td>{{ videogame.title }}</td>
               <td>{{ videogame.subtitle }}</td>
               <td>{{ videogame.rating }}</td>
               <td v-if="user">
                   <button class="btn btn-danger">DELETE</button>
               </td>
           </tr>
       </table>
   </div>

</template>

<script>
    export default {
        data() {
            return {
                videogames: []
            }
        },
        props: {
            user: String
        },
        methods: {

        },
        mounted() {
            
            axios.get('/api/videogames/list')
                 .then(r => this.videogames = r.data)
                 .catch(e => console.error('e' + e))
        }
    }
</script>