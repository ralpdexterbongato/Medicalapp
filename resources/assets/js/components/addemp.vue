<template>


  <table class="table container   is-bordered is-striped is-narrow is-hoverable is-fullwidth">

      <thead>
        <hr>
    <p class="control has-icons-left is-primary">


      <input class="input is-medium" type="text" placeholder="recherche" v-model="searchQuery" cols="30">
      <span class="icon is-small is-left">
          <i class="fa fa-search" aria-hidden="true"></i>
         </span>
    </p>

  </thead>

<hr>
    <thead>
      <div class="field is-grouped is-grouped-right">
      <div class="control">
      <a href="/emp/add" class="button is-info is-pulled-right">Ajouter un dossier</a>
    </div>
    </div>

      <tr class=" is-selected ">
        <th><abbr title="matricule">matricule</abbr></th>
        <th>Nom</th>
        <th><abbr title="Sexe">Sexe</abbr></th>
        <th><abbr title="Date N">Date N</abbr></th>
        <th><abbr title="Poste">Poste</abbr></th>
          <th><abbr title="action">Action</abbr></th>
      </tr>
    </thead>

    <tbody>
      <tr v-for="(dat,key) in search">
    <th> {{dat.nEmployé}}</th>
    <td><a  v-on:click="showemp(key)"> {{dat.nom}},  {{dat.prénom}}</a>
    </td>
    <td v-if="dat.sexe == 0">Homme</td>
    <td v-if="dat.sexe == 1">Femme</td>
    <td> {{dat.dateN}}</td>
    <td v-if="dat.id_poste == 0">DCR Forge</td>
    <td v-if="dat.id_poste == 1">Tôlerie et Emboutissage</td>
    <td v-if="dat.id_poste == 2">Montage Camions</td>
    <td v-if="dat.id_poste == 3">Montage Autocars et Autobus</td>
  <td>

    <a type="submit" class="button is-info  is-rounded is-focused" :href="'/emp/' + dat.nEmployé" >
      <i class="fa fa-eye" aria-hidden="true"></i>
    </a>
    <a type="submit" class="button is-danger  is-rounded is-focused" v-on:click="deletedata(key,dat.nEmployé)">
      <i class="fa fa-trash" aria-hidden="true"></i>
    </a>

    <a type="submit" class="button is-primary  is-rounded is-focused" :href="'/emp/edit/' + dat.nEmployé">
      <i class="fa fa-pencil" aria-hidden="true"></i>

    </a>

    <a type="submit" class="button is-warning is-rounded is-focused" :href="'/pdf/' + dat.nEmployé ">
    <i class="fa fa-print" aria-hidden="true"></i>
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

      showemp: function(key){
        var that = this;
      that.show = 'is-active';
      console.log(show);
      console.log('its workuing');
      console.log(this.show);
       this.$children[0].list = this.data[key];
    },

    clossed: function() {
     this.show = '';
   },


    getdata : function() {
     var that = this;
    axios.get('/getdata')
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
<style >
html {
overflow-y: auto
};
.tbody {
     overflow-y: scroll;
     width: auto;
     position: absolute;
   }
</style>
