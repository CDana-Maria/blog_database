<template>
  <div id="app">
    <OrderDetail msg="Some Order Details"/>
  </div>
</template>

<script>
import OrderDetail from './components/OrderDetail.vue'

export default {
  name: 'App',
  components: {
   OrderDetail
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
