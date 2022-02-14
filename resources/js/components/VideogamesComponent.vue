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
                   <button @click.prevent="deleteVideogame(videogame.id)" class="btn btn-danger">DELETE</button>
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
            deleteVideogame(id) {

                axios.get(`/api/videogame/delete/${id}`)
                     .then(r => {
                        const ind = this.getIndexbyId(id);
                        this.videogames.splice(ind, 1);
                     })
                     .catch(e => console.error(e));
            },

            getIndexbyId(id) {

                for(let i = 0; i < this.videogames.length; i++) {

                    const videogame = this.videogames[i];

                    if (videogame.id == id) {
                        return i;
                    }
                }
            }
        },
        mounted() {
            
            axios.get('/api/videogames/list')
                 .then(r => this.videogames = r.data)
                 .catch(e => console.error('e' + e))
        }
    }
</script>