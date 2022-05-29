<script>
import Layout from "../Shared/Layout.vue";

export default {
  layout: Layout,
};
</script>
<template>
    <Head title="Representation_bis" />

<h1>Liste des représentations</h1>

    <ul>
        <tr>
            <th>Firstname </th>
            <th>Lastname</th>
        </tr>
      
        <li v-for="artist in artists">
            
            {{artist.firstname}}
        
            <!-- <a href="{{ route('artist_show', $artist in id) }}">{{ $artist in lastname }}</a> -->
              
        </li>
    </ul>


</template>
