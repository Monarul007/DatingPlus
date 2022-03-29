<template>
  <div class="container">
    <div class="box">
      <div class="title">
        <span class="block"></span>
        <h1>DatingPlus+<span></span></h1>
      </div>

      <div class="role">
        <div class="block"></div>
        <p>Meet Lovely People's Nearby ♡</p>
      </div>
    </div>
  </div>
</template>

<script>
  import { defineComponent } from 'vue'
  
  export default defineComponent({

    data() {
      return {
        elementInisible: true
      }
    },

    created() {
      setTimeout(() => this.elementInisible = false, 5000);
    }
  })
</script>