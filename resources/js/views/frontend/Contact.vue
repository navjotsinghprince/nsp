<template>
  <div class="my-card">
  <div class="row q-pa-md full-width full-height">
	<div class="col-12 col-md-12 text-center q-pa-md">
      <h4 class="text-secondary"><q-icon name="headset_mic" class="text-secondary" style="font-size: 3rem;"/>Let's Talk</h4>  
    </div>

  <div class="my-card col-12 col-sm-12 col-md-8 offset-md-2 q-pa-md ">
	<q-form>
      <div class="row q-pa-md full-width q-col-gutter-lg ">

      <div class="col-12 col-sm-12 col-md-6 " >
       <q-input 
       clearable
         color="secondary" 
        label-color="secondary" 
        outlined
         v-model="text" 
         label="Name"
       
         >
         <!--  :rules="[ val => val && val.length > 0 || 'Please type something']"
           lazy-rules -->
          <template v-slot:prepend>
           <q-icon name="event" color="secondary" />
           </template>
           </q-input>
       </div>

	 <div class="col-12 col-sm-12 col-md-6">
         <q-input v-model="email"  color="secondary"  clearable type="email" label-color="secondary" outlined  label="Email">
             <template v-slot:prepend>
          <q-icon name="mail" color="secondary"/>
        </template>
           
           </q-input>
     </div>

    <div class="col-12 col-sm-12 col-md-8 offset-md-2">
      <q-input  
      v-model="textarea" 
      type="textarea" 
      color="secondary" 
      label-color="secondary" 
      clearable
      outlined  
      label="Message">
           <template v-slot:prepend>
            <q-icon name="event" color="secondary" />
           </template>
          </q-input>
	</div>

   <div class="col-12 col-sm-12 col-md-6 offset-md-3">
     <q-btn fit align="center" class="full-width" color="secondary" label="Submit" />
	 </div>

	   </div>    
    </q-form>
   </div>
    </div>

	<div class="row q-pa-md">
      <div class="col-12 col-sm-12 col-md-4 text-center q-pa-md">
        <q-icon name="email" class="text-positive" style="font-size: 3rem;"/>
        <h6>navjotsinghprince1@gmail.com</h6>
        </div>


       <div class="col-12 col-sm-12  col-md-4 text-center q-pa-md">
        <q-icon name="home" class="text-red" style="font-size: 3rem;"/>
        <h6>Ferozepur,Punjab INDIA</h6>
        </div>


        <div class="col-12 col-sm-12  col-md-4 text-center q-pa-md ">
        <q-icon name="phone_iphone" class="text-dark" style="font-size: 3rem;"/>
        <h6>+918591373660</h6>
        </div>
        
  </div>
	 </div>
</template>
 <script>
export default {
  data () {
    return {
     text: '',
     email:'',
     textarea:'',
    }
  },
   computed: {
   
  },

  methods:{
    
  }
}
</script>

<style sass scoped>
.example-item{
  height: 290px;
  width: 290px;
}
/*============ 5. Contact Us Section ============*/
</style>