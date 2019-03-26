<template>
    <div class="movie">
        <h1>Movies</h1>
        <!-- eslint-disable-next-line -->
        <div v-for="data in myJson"> {{data.Title}} </div>
    </div>
</template>
<script>
import json from './movie.json'
export default {
    data(){
        return{
            myJson: json.movie
        }
    }
}
</script>