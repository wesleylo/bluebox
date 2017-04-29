<template>
  <div class="container">
    <Movie></Movie>
    <div class="movies">
      <ul>
        <img
          v-for="(movie, movieId) in movies" :key="movie.movieId" :movie="movie"
          v-bind:src="movie.imageUrl"
          @click="clickMovie(movie.movieId)"
        >
      </ul>
    </div>

  </div>
</template>

<script>
import axios from 'axios';
import Movie from './Movie';

export default {
    components: {
      Movie
    },
    data () {
      return {
        movies: [],
        currMovie: 0
      }
    },
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
      },
      clickMovie (i) {
        console.log('test click movie' + i);
        this.currMovie = 2;
      }
    }
}
</script>
