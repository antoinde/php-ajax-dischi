console.log('Hello Antonello, Javascript is working properly! =)');


const app = new Vue({
    el: '#app',
    data() {
      return {
        albums: []
      };
    },

    mounted() {
      this.getAlbumsByApiRequest();
    },

    methods: {
      getAlbumsByApiRequest() {
        axios
          .get('/php-ajax-dischi/Seconda_versione/database/database.php')
          .then((response) => {
            console.log(response);
            if (response.status === 200) {
              this.albums = response.data;

              console.log('response.data:');
              console.log(response.data);
            }
          })
          .catch((error) => console.log(error));
      }
    }
  });
  