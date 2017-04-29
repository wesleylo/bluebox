<template>
  <img
    v-for="(movieGenres, movieId) in movies" :key="movie.movieId" :movie="movie"
    v-bind:src="movie.imageUrl"
    @click="clickMovie(movie.movieId)"
  >
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
        movieGenres: [],
      }
    },
    props: ['movie'],
    mounted() {
        console.log('Component mounted.')
        this.fetch();
    },
    methods: {
      fetch () {
      console.log('App -> fetch');
      axios.get('/movie-genres')
        .then((response) => {
          console.log('App -> fetch success');
          console.log(response.data);
          this.movieGenres = response.data;
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
