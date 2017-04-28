<template>

      <div class="movie-list">

        <Movie v-for="(movie, movieId) in movies" :key="movie.movieId" :movie="movie"></Movie>


      </div>
</template>

<script>
import axios from 'axios';
export default {
  components: {
    
  },
  props: [
    'movie'
  ],
  data () {
    return {
      title: this.movie.title,
      movieUrl: this.movie.movieUrl,
      plot: this.movie.plot
    }
  },
  mounted() {
    console.log('Movie -> mounted');
    this.fetch(this.key); // get entry from database
  },
  methods: {
    fetch(movieId) { // fetch database entries
      console.log('Movie -> fetch');
      axios.get('/movies/' + movieId)
        .then((response) => {
          console.log('Movie -> fetch success');
          this.entryData = response.data;
        })
        .catch((response) => {
          console.log('Movie -> fetch error');
          // show error
          console.log(response); // show error
        })
      }
  }
}
</script>

<style>

</style>
