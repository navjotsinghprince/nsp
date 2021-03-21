<template>
  <div class="row full-width full-height">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="row">
        <q-toolbar class="col-8 col-md-8">
          <q-btn flat round dense icon="search" color="secondary" />
          <q-select
            class="full-width"
            transition-show="jump-up"
            transition-hide="jump-up"
            label-color="secondary"
            color="secondary"
            v-model="model"
            :options="options"
            label="Search Posts"
          >
            <template v-slot:append>
              <q-icon name="event" color="secondary" />
            </template>
          </q-select>
        </q-toolbar>
        <q-toolbar class="col-4 col-md-4">
          <q-space />
          <q-btn
            fit
            align="center"
            class="full-width"
            color="secondary"
            label="Search"
          />
        </q-toolbar>
      </div>
      <q-separator />
    </div>
    <div class="col-12 col-md-4 col-lg-12">
      Woking in Progress.................
    </div>
  </div>
</template>
 <script>
export default {
  data() {
    return {
      model: null,
      options: ["Google", "Facebook", "Twitter", "Apple", "Oracle"],
    };
  },
  computed: {},

  methods: {},
};
</script>

<style sass scoped>
.example-item {
  height: 290px;
  width: 290px;
}
/*============ 5. Blog Section ============*/
</style>