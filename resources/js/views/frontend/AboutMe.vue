<template>
<div>
    <div class="row">
            <div class="col-12 col-md-8">
             <q-card class="my-card " >
      <q-card-section>
        <div class="text-h5 text-bold text-red">Web Developer</div>
      </q-card-section>

      <q-card-section class="customSize text-teal text-justify text-weight-medium">
      <p>Hi! I am Navjot Singh, a web designer/developer focused on crafting great web experiences. Designing and Coding have been my passion since the days I started working with computers but I found myself into web design/development since 2017. I enjoy creating beautifully designed, intuitive and functional websites.</p>
      <p>I am a proficient web developer with an influential personality who wants to
      pursue a competitive and technical career as a Web Developer. In the long term I want to become an
      innovative entrepreneur and create exciting opportunities in the field of IT 
      I am a proficient web developer with an influential personality who wants to
      pursue a competitive and technical career as a Web Developer.</p>
      </q-card-section>
      <q-separator dark />
      
      <div style="width:200px; height:100px;">
          <q-img
        class="col"
        src="img/signature-black.png"
        style="max-width:100%;"
      >
        </q-img>
        </div>
      </q-card>
  </div>
        

      <div class="col-12 col-md-4">
          <q-card class="my-card fit">
      <q-card-section>
        <div class="text-h5 text-bold text-red">Personal Information</div>
      </q-card-section>
      <q-card-section class="text-black text-justify"  style="max-width: 350px">
        <q-list dense  padding class="rounded-borders">
        <q-item clickable v-ripple class="text-teal" >
        <q-item-section>
          Name : Navjot Singh
        </q-item-section>
      </q-item>
           <q-item clickable v-ripple>
        <q-item-section>
          Item
        </q-item-section>
      </q-item>
           <q-item clickable v-ripple>
        <q-item-section>
          Item
        </q-item-section>
      </q-item>
           <q-item clickable v-ripple>
        <q-item-section>
          Item
        </q-item-section>
      </q-item>
           <q-item clickable v-ripple>
        <q-item-section>
          Item
        </q-item-section>
      </q-item>
           <q-item clickable v-ripple>
        <q-item-section>
          Item
        </q-item-section>
      </q-item>
           <q-item clickable v-ripple>
        <q-item-section>
          Item
        </q-item-section>
      </q-item >
           <!-- <ul>
              <li><span class="title">Name</span><span class="value">Navjot Singh</span></li>
          </ul>  -->
          </q-list >
            <q-separator/>
      <q-item-section>
    <q-btn color="red" icon="file_download" label="Download Resume" /> 
    </q-item-section>
           </q-card-section>
      <q-separator dark />
      </q-card>
     
      </div>
    </div>

  <!--Services Row Start-->
   <div class="row q-pa-md ">
     <div class="col-12 col-md-12 text-center  q-pa-md">
      <h5 class="text-teal">Services</h5> 
     </div>
      <div class="col-12 col-sm-6 col-md-3 text-center q-pa-md">
        <q-icon name="warning" class="text-red" style="font-size: 4rem;"/>
        <h6>Helooo</h6>
        <p class="text-justify q-pa-md" >I have a basic understanding of HTML, CSS, JavaScript, Dom, Bom, HTTP/URL, Testing/Debugging, Browser developer Tools, Command line, Version Control/GIT</p>
        </div>
       <div class="col-12 col-sm-6  col-md-3 text-center  q-pa-md">
        <q-icon name="print" class="text-teal" style="font-size: 4rem;"/>
        <h6>Helooo</h6>
        <p  class="text-justify q-pa-md">I have a basic understanding of HTML, CSS, JavaScript, Dom, Bom, HTTP/URL, Testing/Debugging, Browser developer Tools, Command line, Version Control/GIT</p>
        </div>
          <div class="col-12 col-sm-6  col-md-3 text-center q-pa-md ">
        <q-icon name="warning" class="text-red" style="font-size: 4rem;"/>
        <h6>Helooo</h6>
        <p  class="text-justify q-pa-md">I have a basic understanding of HTML, CSS, JavaScript, Dom, Bom, HTTP/URL, Testing/Debugging, Browser developer Tools, Command line, Version Control/GIT</p>
        </div>
          <div class="col-12 col-sm-6  col-md-3 text-center  q-pa-md">
        <q-icon name="print" class="text-teal" style="font-size: 4rem;"/>
        <h6>Helooo</h6>
        <p  class="text-justify q-pa-md">I have a basic understanding of HTML, CSS, JavaScript, Dom, Bom, HTTP/URL, Testing/Debugging, Browser developer Tools, Command line, Version Control/GIT</p>
        </div>
  </div>
  <!--Services End Start-->


</div>
</template>
 <script>
export default {
  name: 'AboutMe',
}
</script>

<style scoped>
.customSize{
  font-size: 15px;
}
.my-card{
  border-radius: 0;
}

/*============ 5. About Section ============*/


</style>