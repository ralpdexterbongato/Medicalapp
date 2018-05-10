<template>
  <div class="modal is-large" :class="openshow">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">dossier medical de  <strong> {{list.nom}}, {{list.prénom}} </strong></p>
        <button class="delete" aria-label="close" v-on:click="clossed"></button>
      </header>

      <section class="modal-card-body">

        <img class="logo" :src="'./storage/images/' + list.photo" style="height: 100px; width:100px;  border-radius: 50px;">

          <!-- <img v-html="'{{ asset('storage/images'}}' + '/' + {{list.photo}}"> -->
          <hr>
      <strong>Nom:</strong>
      <span class="tagis-large has-text-primary is-large ">{{list.nom}}</span>
,
      <strong>Prénom:</strong>
      <span class="tag has-text-primary is-large ">{{list.prénom}}</span>
,
      <strong>Sexe:</strong>
      <span class="tag has-text-primary is-large" v-if="list.sexe == 0">Homme</span>
        <span class="tag has-text-primary " v-if="list.sexe == 1">Femme</span>
        <hr>
      <strong>Date de naissance:</strong>
      <span class="tag has-text-primary is-large">{{list.dateN}}</span>

      <strong>Lieu de naissance:</strong>
      <span class="tag has-text-primary is-large">{{list.lieuN}}</span>

  <hr>

      <strong>Adresse:</strong>
      <span class="tag has-text-primary  is-large">{{list.adresse}}</span>
  <hr>


    <strong>situation familiale</strong>
    <span class="tag has-text-primary is-large" v-if="list.id_sf == 0">Célibataire</span>
    <span class="tag has-text-primary is-large " v-if="list.id_sf == 1">Marié</span>
    <span class="tag has-text-primary is-large" v-if="list.id_sf == 2">Divorcé</span>


    <strong>situation nationale</strong>
    <span class="tag has-text-primary is-large" v-if="list.id_sn == 0">Accompli</span>
    <span class="tag has-text-primary is-large " v-if="list.id_sn == 1">Dispensé</span>
    <span class="tag has-text-primary is-large" v-if="list.id_sn == 2">Inapte</span>

    <hr>
    <strong>Groupe sanguin</strong>
    <span class="tag has-text-primary is-large" v-if="list.id_gr == 0">A+</span>
    <span class="tag has-text-primary is-large " v-if="list.id_gr == 1">A-</span>
    <span class="tag has-text-primary is-large" v-if="list.id_gr == 2">B+</span>
      <span class="tag has-text-primary is-large" v-if="list.id_gr == 3">B-</span>
      <span class="tag has-text-primary is-large" v-if="list.id_gr == 4">AB+</span>
      <span class="tag has-text-primary is-large " v-if="list.id_gr == 5">AB-</span>
      <span class="tag has-text-primary is-large" v-if="list.id_gr == 6">O+</span>
        <span class="tag has-text-primary is-large" v-if="list.id_gr == 7">O-</span>
    <hr>
        <strong>organisme employeur</strong>
        <span class="tag has-text-primary is-large" v-if="list.id_poste == 0">DCR Forge</span>
        <span class="tag has-text-primary is-large " v-if="list.id_poste == 1">Tôlerie et Emboutissage</span>
        <span class="tag has-text-primary is-large" v-if="list.id_poste == 2">Montage Camions</span>
          <span class="tag has-text-primary is-large" v-if="list.id_poste == 3">Montage Autocars et Autobus</span>
          <hr>

      <strong>RH:</strong>
      <span class="tag has-text-primary  is-large">{{list.RH}}</span>


      <strong>NSS:</strong>
      <span class="tag has-text-primary  is-large">{{list.NSS}}</span>
  <hr>

    <strong>Qualification professionnelle:</strong>
    <span class="tag tag has-text-primary is-large">{{list.qualifPro}}</span>

  <hr>



</section>
      <footer class="modal-card-foot">
        <button class="button" v-on:click="clossed">Quiter</button>
      </footer>
    </div>
  </div>

</template>


<script>
export default {
  props : ['openshow','nEmployé'],
  data() {
    return {
    list : {},
  }
  },
  methods: {
clossed: function() {
  this.$emit('closeRequest');
},
  },
}
</script>
