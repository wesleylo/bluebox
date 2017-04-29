<template>
  <div class="description">
    <div class="hero col-sm-12"><img v-bind:src="movies[currMovie].trailerUrl"></div>
    <div id="title" class="col-sm-12">{{movies[currMovie].title}}</div>
    <div class="row">
      <div class="col-sm-2">{{movies[currMovie].mpRating}}</div>
      <div class="col-sm-2">{{movies[currMovie].runtime}} mins</div>
      <div class="col-sm-2">{{movies[currMovie].imbdRating}}</div>

  </div>
  <div class="plot col-sm-12">{{movies[currMovie].plot}}</div>
</div>
</template>

<script>
import axios from 'axios';

export default {
    components: {

    },
    data () {
      return {
        movies: [],
      }
    },
    props: ['currMovie'],
    mounted() {
        console.log('Component mounted.')
        this.fetch();
    },
    methods: {
      fetch () {
      console.log('App -> fetch');
      axios.get('/movies')
        .then((response) => {
          console.log('App -> fetch success');
          console.log(response.data);
          this.movies = response.data;
        })
        .catch((response) => {
          console.log('App -> fetch error');
          // show error
        })
      }
    },
    events: {
      updateMovie: function(i) {
        console.log("movie recieves" + i)
      }
    }
}
</script>
