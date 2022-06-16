<template>
  <div>
    <CreateComponent></CreateComponent>
    <!-- <table class="table">
       <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">Name</th>
         <th scope="col">Age</th>
         <th scope="col">Job</th>
       </tr>
       </thead>
       <tbody>
       <tr v-for="person in persons">
         <th scope="row">{{ person.id}}</th>
         <td>{{ person.name}}</td>
         <td>{{ person.age}}</td>
         <td>{{ person.job}}</td>
       </tr>
       </tbody>
     </table>-->
  </div>
</template>

<script>
import CreateComponent from "./CreateComponent";

export default {
  name: "PostComponent",

  data() {
    return {
      persons: null
    }
  },

  mounted() {

  },

  methods: {


  },

  computed: {},

  components: {
    CreateComponent
  }


}
</script>

<style scoped>

</style>
