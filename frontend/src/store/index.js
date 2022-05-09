import { createStore } from 'vuex'

export default createStore(
  {
    state: 
    {
      user:
      {
        username: null,
        bearer_token: null,
      }
    },
    getters: 
    {
      RetrieveAccountName( state )
      {
        return state.user.username;
      },

      RetrieveBearerToken( state )
      {
        return state.user.bearer_token;
      },

      RetrieveUserState( state )
      {
        return !(state.user.username === null) && !(state.user.bearer_token === null);
      }
      
    },
    mutations: 
    {
      SetAccountName(state, data)
      {
        state.user.username = data;
      },

      SetAccountBearerToken(state, data)
      {
        state.user.bearer_token = data;
      }
    },
    methods:
    {
      
    },
    actions: 
    {
    },
    modules: 
    {
    }
  }
)
