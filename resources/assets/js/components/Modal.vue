// delete later
<template>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

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
