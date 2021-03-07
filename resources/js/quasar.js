import Vue from 'vue'

// import './styles/quasar.sass'
import 'quasar/dist/quasar.ie.polyfills'
import '@quasar/extras/material-icons/material-icons.css'
import '@quasar/extras/material-icons-outlined/material-icons-outlined.css'
import '@quasar/extras/fontawesome-v5/fontawesome-v5.css'
import '@quasar/extras/mdi-v4/mdi-v4.css'
import Quasar, * as All from 'quasar/dist/quasar.umd'

require('quasar/dist/quasar.css')

Vue.use(Quasar, {
	components: All,
	directives: All,
	plugins: All,
	animations: All,
	icons: All
 })