<template>

   <div class="container-videogames">
       <table border="1">
           <tr>
               <th>Title</th>
               <th>Subtitle</th>
               <th>Rating</th>
           </tr>
           <tr>
               <td>{{ videogames.title }}</td>
               <td>{{ videogames.subtitle }}</td>
               <td>{{ videogames.rating }}</td>
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
        methods: {

        },
        mounted() {
            
            axios.get('/api/videogames/list')
                 .then(r => this.videogames = r.data)
                 .catch(e => console.error('e' + e))
        }
    }
</script>