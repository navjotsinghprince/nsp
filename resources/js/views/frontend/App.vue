<template id="app">
<!-- <v-app> -->

 
<Navbar></Navbar>


<!-- </v-app> -->
</template>

<script>
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
