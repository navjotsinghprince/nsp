<template>
  <div class="bb" style="max-width: 100%">
    <!-- <q-parallax> -->
    <!-- <template v-slot:content="scope">
        
        <div
          class="absolute column items-center"
          :style="{
            opacity: 0.45 + (1 - scope.percentScrolled) * 0.55,
            top: (scope.percentScrolled * 60) + '%',
            left: 0,
            right: 0
          }"
        > -->
    <div v-if="User" class="text-h2 text-red text-center">
      {{ User.name }}
    </div>
    <div class="text-h4 text-primary text-center">i Am Software Engineer</div>
    <!-- <img src="https://cdn.quasar.dev/logo/svg/quasar-logo.svg" style="width: 150px; height: 150px"> -->
    <!-- <div class="text-h6 text-grey-3 text-center">
            v{{ $q.version }}
          </div> -->
    <!-- </div>
      </template> -->
    <!-- </q-parallax> -->
  </div>
</template>
 <script>
import { mapState } from "vuex";

export default {
  name: "Home",

  data: () => ({}),

  computed: {
    ...mapState({
      User: (state) => state.UserInformation.user,
    }),
  },

  created() {},

  methods: {},
};
</script>

<style scoped>
.boder * {
  z-index: 1;
}
/* .bg-image:before {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #181818;
    opacity: .6; } */

.bg-image {
  background-image: url(../../../assets/background/home-bg.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
</style>


