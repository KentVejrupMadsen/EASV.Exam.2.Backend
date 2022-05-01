/* eslint-disable */
import { createApp } from 'vue'

import App from './App.vue'
import router from './router'
import store from './store'

import { getPerformance } from 'firebase/performance'
import { getAuth, createUserWithEmailAndPassword } from 'firebase/auth'
import { initializeApp } from 'firebase/app'

const firebaseConfig = require('./firebase.js')

const app = initializeApp(firebaseConfig.getFirebaseConfig())
getPerformance(app)
getAuth(app)

createApp(App)
  .use(store)
  .use(router)
  .mount('#app')
