/* eslint-disable */
import { createStore } from 'vuex'

import { initializeApp } from 'firebase/app'
import { getAuth, createUserWithEmailAndPassword } from 'firebase/auth'

export default createStore(
  {
    state:
    {
      firebase:
      {
        cfg: null,
        fbapp: null,
        auth: null
      },
      user: null,
      valkyrier:
      {
        initialized: false
      }
    },
    getters:
    {
    },
    mutations:
    {
    },
    actions:
    {
      initialize( context, payload )
      {
        
        if( !this.state.valkyrier.initialized )
        {
          this.state.firebase.cfg = require('./firebase.js')
          this.state.firebase.fbapp = initializeApp(this.state.firebase.cfg)
          this.state.firebase.auth = getAuth(this.state.firebase.fbapp)

          this.state.valkyrier.initialized = true
        }
      },
      createUser(email, password)
      {

      }
    },
    modules:
    {

    }
  }
)
