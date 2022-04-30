import { createApp } from 'vue'

import App from './App.vue'
import router from './router'
import store from './store'

import { getPerformance } from 'firebase/performance'
import { initializeApp } from 'firebase/app'

const firebaseConfig = require('./firebase.js')

const app = initializeApp(firebaseConfig.getFirebaseConfig())
getPerformance(app)

createApp(App)
  .use(store)
  .use(router)
  .mount('#app')
