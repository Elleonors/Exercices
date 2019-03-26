<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png">
    <json/>
    <p>DEJA VU</p>
  </div>
</template>

<script>
import json from './components/json.vue'

export default {
  name: 'app',
  components: {
    json
  }
}
</script>

<style>
body {
  background-color : #2C3037;
}
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: white;
  margin-top: 60px;
}
</style>
