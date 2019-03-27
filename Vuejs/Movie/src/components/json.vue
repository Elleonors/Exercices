<template>
    <div class="movie">
        <table>
            <tr>
                <td v-for="data in myJson" :key="data">
                    <img v-bind:src="data.Poster">
                    <br>
                    <p>{{data.Title}}</p>
                    <br>
                    <p id="year">{{data.Year}}</p>
                    <br>
                    <p>{{data.Plot}}</p>
                </td>
            </tr>
        </table>
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