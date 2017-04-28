<template>
  <div class="container">
    Testing!
    <div class="movies">
      <ul>
        

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
        movies: []
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
      }
    }
}
</script>
