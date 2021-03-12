<template>
<div>
	 <!-- <q-layout view="lHh Lpr lff" container class="full-height" > -->
   <q-header class="bg-cyan-8">
       <q-toolbar>
      <q-toolbar inset>
        <q-breadcrumbs active-color="white" style="font-size: 16px">
          <q-breadcrumbs-el clickable v-ripple label="Home" icon="home" />
          <q-breadcrumbs-el clickable v-ripple label="Components" icon="widgets" />
          <q-breadcrumbs-el clickable v-ripple label="Toolbar" />
        </q-breadcrumbs>
      </q-toolbar>
          <q-btn flat @click="drawer = !drawer" round dense icon="menu" />
        </q-toolbar>
      </q-header>

      <q-drawer 
        v-model="drawer"
        show-if-above
        :width="200"
        :breakpoint="700"
      >
        <q-scroll-area style="height: calc(100% - 250px); margin-top: 250px;">
          <q-list padding>
		  <router-link :to="{name: 'home'}" id="router">
            <q-item :active="false" clickable v-ripple>
              <q-item-section avatar>
                <q-icon name="mdi-home" color="secondary"/>
              </q-item-section>

              <q-item-section>
                Home
              </q-item-section>
            </q-item>
              </router-link>

<router-link :to="{name: 'AboutMe'}" >
            <q-item  clickable v-ripple>
              <q-item-section avatar>
                <q-icon name="info"  color="secondary"/>
              </q-item-section>

              <q-item-section>
                About Me
              </q-item-section>
            </q-item>
 </router-link>

<router-link :to="{name: 'Resume'}" >
            <q-item clickable v-ripple>
              <q-item-section avatar>
                <q-icon name="description" color="secondary" />
              </q-item-section>

              <q-item-section >
                Resume
              </q-item-section>
            </q-item>
 </router-link>

<router-link :to="{name: 'Portfolio'}">
            <q-item clickable v-ripple>
              <q-item-section avatar>
                <q-icon name="business_center"  color="secondary" />
              </q-item-section>

              <q-item-section>
                PortFolio
              </q-item-section>
            </q-item>
 </router-link>


<router-link :to="{name: 'Blog'}">
             <q-item clickable v-ripple>
              <q-item-section avatar>
                <q-icon name="auto_stories"  color="secondary" />
              </q-item-section>

              <q-item-section>
                Blog
              </q-item-section>
            </q-item>
 </router-link>


<router-link :to="{name: 'Contact'}">
             <q-item clickable v-ripple>
              <q-item-section avatar>
                <q-icon name="phone"  color="secondary" />
              </q-item-section>
              <q-item-section>
                Contact
              </q-item-section>
            </q-item>
 </router-link>
  <q-separator/>

<q-item class="q-pa-sm q-gutter-sm">
      <q-btn class="q-pa-none q-ma-none"  :size="size" flat round  color="dark" icon="fab fa-github" />
        <q-btn class="q-pa-none q-ma-none"  :size="size" flat round color="primary" icon="fab fa-linkedin-in" />
         <q-btn class="q-pa-none q-ma-none"  :size="size" flat round  color="dark" icon="fab fab fa-codepen" />
        <q-btn class="q-pa-none q-ma-none"  :size="size" flat round color="warning" icon="fab fa-stack-overflow" />
            <q-btn class="q-pa-none q-ma-none"  :size="size" flat round color="secondary" icon="fab fa-twitter" />
            </q-item>

    <div class="text-weight-light text-center">  
				&#169; {{ new Date().getFullYear() }} 
				By Prince<br>
            All Right Reserved</div>
          </q-list>
        </q-scroll-area>


        <q-img class="absolute-top" src="https://cdn.quasar.dev/img/material.png" style="height: 250px">
          <div class="absolute-bottom bg-transparent">
            <q-avatar size="56px" class="q-mb-sm">
              <img src="https://cdn.quasar.dev/img/boy-avatar.png">
            </q-avatar>
            <div class="text-weight-bold">Navjot Singh</div>
            <div>@navjotsinghprince</div>
          </div>
        </q-img>
      </q-drawer>
</div>
  </template>
<!-- </q-layout> -->
<script>
// import Home from '../frontend/Home'

export default {
	components: {
    //  Home
  },

 data () {
    return {
      // leftDrawerOpen: false,
       drawer: false,
       size:"md",
    }
  },

   created(){
   // this.initializer();
   },

   methods: {
      initializer(){
       //console.log("heloooo");
         //this.$router.push({ name: "home" });
     },


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