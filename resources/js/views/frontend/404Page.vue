<template>
  <div class="full-height text-center q-pa-md flex flex-center">
    <div>
      <div style="font-size: 30vh" class="text-red">
        404
      </div>

      <div class="text-h2 text-red" style="opacity:.4">
        Oops. Nothing here...
      </div>

      <q-btn
        color="secondary"
        class="q-mt-xl bg-secndary"
        text-color="white"
        unelevated
        to="/"
        label="Go Home"
        no-caps
      />
    </div>
  </div>
</template>

<script>
export default {
  name: 'Error404'
}
</script>
