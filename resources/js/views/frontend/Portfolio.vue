<template>
    <div class="">
		<div class="row">
		<div class="col-12 col-md-12 col-lg-12">
			<!-- <h4 class="text-center">Portfolio</h4> -->
			 <div class="q-pa-md">
           <div class="q-gutter-y-md" >
      <q-tabs
        v-model="tab"
        inline-label
		     dense
         class="text-black text-weight-bolder q-gutter-y-md"
	       active-color="primary"
          indicator-color="primary"
          align="justify"
         
        >
        <q-tab name="mails" label="All" />
        <q-tab name="alarms" label="Games" />
        <q-tab name="dddd" label="Pages" />
	     	<q-tab name="444" label="Builds" />
          </q-tabs>
          </div>
		    </div>
		</div>
		</div>
    <div class="row justify-center q-gutter-sm ">
		
      <q-intersection
        v-for="index in 10"
        :key="index"
        transition="scale"
        class="example-item"
		
      >
    <q-card class="q-ma-sm">
      <img src="https://cdn.quasar.dev/img/mountains.jpg">
      <q-card-section>
  <q-toolbar >
      <q-chip square :selected="true" color="teal" text-color="white">PHP</q-chip>
      <q-space/>
      <q-btn round color="secondary" text-color="white" icon="fa fa-link"   push :options="[
      {label: 'One', value: 'one', slot: 'one'},
    ]">     
    <q-tooltip anchor="top middle" content-class="bg-red" transition-show="rotate"
      transition-hide="rotate">
      Go to url
    </q-tooltip>
      </q-btn>
     
    </q-toolbar>
     
     
<!-- <q-chip clickable color="primary" class="text-white" text-color="white" square icon="directions">Visit</q-chip> -->
       
            <!-- <div class="text-h6">Card #{{ index }}</div> -->
            <div class="text-subtitle2">by Navjot Singh</div>
          </q-card-section>
        </q-card>
      </q-intersection>
    </div>
  </div>

</template>
 <script>
export default {
  data () {
    return {
	   tab: 'mails',
      loading1: false,
      percentage1: 0,
    }
  },
   computed: {
   
  },

  methods:{
    startComputing (id) {
          this[`loading${id}`] = true
          this[`percentage${id}`] = 0
          this[`interval${id}`] = setInterval(() => {
            this[`percentage${id}`] += Math.floor(Math.random() * 8 + 10)
            if (this[`percentage${id}`] >= 100) {
              clearInterval(this[`interval${id}`])
              this[`loading${id}`] = false
            }
          }, 700)
        }
  }
}
</script>

<style sass scoped>
.example-item{
  height: 290px;
  width: 290px;
}
/*============ 5. Resume Section ============*/
</style>