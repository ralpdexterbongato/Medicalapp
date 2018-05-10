<template>


  <table class="table container is-bordered is-striped is-narrow is-hoverable is-fullwidth">

      <thead>
        <hr>
    <p class="control has-icons-left">
      <input class="input is-medium" type="text" placeholder="recherche" v-model="searchQuery" cols="30">
      <span class="icon is-small is-left">
          <i class="fa fa-search" aria-hidden="true"></i>
         </span>

    </p>

  </thead>
  <br>

    <thead>
      <a href="/newvisite" class="button is-info is-pulled-right">NOUVELLE VISITE</a>
      <tr class=" is-selected ">
        <th><abbr title="matricule">La Date</abbr></th>
        <th>type</th>
        <th><abbr title="Sexe">N Visite</abbr></th>
        <th><abbr title="Date N">N Employée</abbr></th>
          <th><abbr title="action">Action</abbr></th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(dat,key) in search">
    <th> {{dat.created_at}}</th>
    <td><a  v-on:click="showemp(key)"> {{dat.typeVisite}}</a>
    </td>
    <td>{{dat.id_v}}</td>
    <td> {{dat.nEmployé}}</td>
    <td v-if="dat.id_poste == 0">DCR Forge</td>

  <td>


  <a type="submit" class="button is-info  is-rounded " :href="'/visite/' + dat.id_v" >
    <i class="fa fa-eye" aria-hidden="true"></i>
  </a>



    </td>
  </tr>
    </tbody>
    <show :openshow="show" @closeRequest="clossed"></show>
</table>



</template>

<script>


let show = require('./showemp.vue');

export default{
  components: {show},
  data() {
    return {
      data : {},
    searchQuery : '',
    show : '',
    search : '',
    }
  },
    methods : {



    getdata : function() {
     var that = this;
    axios.get('/getvisite')
    .then(function (response) {
      console.log(response);
      console.log('axios is here');
      that.data = that.search = response.data;
    })
    .catch(function (error) {
      console.log(error);
    });
  },
      deletedata: function(key,nEmployé,data) {
        var that = this;
        // var link = that.dat.nEmployé;
        if (confirm("are you sure")) {
        axios.get(`/deletedata/`+nEmployé)
       .then(function (response) {
         console.log(response);
          console.log(key);
           console.log(nEmployé);
          that.data.splice(key,1);
       })
       .catch(function (error) {
         console.log(error);
         console.log('not working');
       });
      }
    },

},

mounted () {
  var that =this;
   this.getdata();
},
watch : {
         searchQuery(){
           if (this.searchQuery.length > 0) {
             this.search = this.data.filter((item) => {
               return Object.keys(item).some((key)=>{
                 let string = String(item[key])
                 return string.toLowerCase().indexOf(this.searchQuery.toLowerCase())>-1
                  console.log(this.search)
               })
             });
           }else{
             this.search = this.data
           }
         }
       },

}
</script>
