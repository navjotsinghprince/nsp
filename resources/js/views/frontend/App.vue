<template id="app">
<!-- <v-app> -->
<!-- <div id="app"> -->

<Navbar></Navbar>

<!-- </div> -->
<!-- </v-app> -->
</template>

<script>
// import HelloWorld from '../../components/HelloWorld'
import Navbar from '../frontend/Navbar'

export default {
  name: 'LayoutDefault',

  components: {
     Navbar
  },

  data () {
    return {
      leftDrawerOpen: false
    }
  },

   methods:{
   }
}
</script>

<style>

</style>
