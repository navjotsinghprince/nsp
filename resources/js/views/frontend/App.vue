<template id="app">

<q-layout view="lHh Lpr lff" container class="full-height">
  <Navbar></Navbar>

 <q-page-container>
    <q-linear-progress dark :query="true" color="cyan"  style="max-width:100%;" />
      <q-page class="" :style-fn="myTweak" style="margin-top:0px;">
		    <router-view></router-view>
    </q-page>
  </q-page-container>

</q-layout>
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
      leftDrawerOpen: false,
       drawer: false,
       size:"md",
    }
  },

  methods:{
     myTweak (offset) {
      // "offset" is a Number (pixels) that refers to the total
      // height of header + footer that occupies on screen,
      // based on the QLayout "view" prop configuration

      // this is actually what the default style-fn does in Quasar
      return { minHeight: offset ? `calc(100vh - ${offset}px)` : '100vh' }
    }
  }
}
</script>

<style>
* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  text-decoration: none !important;
  list-style: none !important;
  outline: none !important; }

h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0;
  padding: 0; }

i, em {
  font-style: normal; }

html, body {
  position: relative;
  height: 100%;
  width: 100%; 
 }

.full-height {
  height: 100%;
}

hr {
    margin: 0;
}
a {
    text-decoration: none !important;
    color:teal;
}

#dd{
  /* display: block; */
  color: seagreen !important;
}

.bb{
  border:2px solid black;
}
.br{
  border:2px solid red;
}
.bg{
  border:2px solid green;
}
</style>
