export default {
   state: {
      welcomeMessage: 'Welcome to the app'
   },
   getters: {
      welcome(state){
         return state.welcomeMessage;
      }
   },
   mutations:{},
   actions:{}
}