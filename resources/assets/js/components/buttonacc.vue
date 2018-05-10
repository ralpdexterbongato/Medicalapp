<template>
<button class="button is-big  is-danger is-outlined is-focus" v-on:click="deletedata(key,dat.nEmployé)">Delete</button>
</template>

<script>
let show = require('./showemp.vue');
export default {
  props : ['openshow','nEmployé'],
  data() {
    return {
    list : {},
    show : '',
  }
  },
  methods: {
clossed: function() {
  this.$emit('closeRequest');
},
  },
}

</script>
