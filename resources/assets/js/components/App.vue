<template lang="pug">
  //- <div class="container">
  //-   <div class="row">
  //-     <div class="col-md-8 col-md-offset-2">
  //-       <div class="panel panel-default">
  //-         <div class="panel-heading">Example Component</div>

  //-         <div class="panel-body">
  //-           I'm an example component!
  //-         </div>
  //-       </div>
  //-     </div>
  //-   </div>
  //- </div>

  div.container
    div.row
      div.col-md-8.col-md-offset-2
        div.panel.panel-default
          div.panel-heading
            p Example Component
          
          div.panel-body
            p Soy un ejemplo
    
    router-view
</template>

<script>
  export default {
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>
