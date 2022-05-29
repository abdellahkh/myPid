<script>
import Layout from "../Shared/Layout.vue"
import CarouselExternalApi from "../Components/CarouselExternalApi.vue"

export default {
  components:{
    CarouselExternalApi
  },

  layout: Layout,

  computed: {
    username() {
      return this.$page.props.auth?.user?.name;
    },
  },
  props: {
    shows: Object,
    resource: String
  }
}

let x = [2.3,4]
</script>

<template>
    <Head title="Homepage" />
    <!-- <CarouselExternalApi /> -->

  <p>Bienvenue sur le site de partage d'informations sur les actualités théatrales.</p>

  <h1> {{ resource }} </h1> 

    <ul>
            <li v-for="show in shows">
                {{show.title}}
            </li>
    </ul>

</template>

<style scoped>
.flex p+p{
    margin-top: 2%;
}

.flex h2{
  font-weight: bold;
  font-size: 110%;
}

.flex-item{
  margin: 2%;
}

</style>