const app = new Vue({

    el: '#app',
    data:{

    //definisco le mie variabili
      albums:[],
      genresAvailibles:[],
      //la variabile sotto ha un v-model con la select così quanto la passo alla mia chiamata API posso usarla come filtro per i generi
      genreToSearch: 'all',
      //URL dell'API
      apiURL: 'http://localhost:8888/php-ajax-dischi/api.php'
  
    },
    methods:{
  //Chiamata API
      getAPI(){
        axios.get(this.apiURL,{
          params:{
            //passo come parametro il genere selezionato per filtrare le musiche di un certo genere
            genre: this.genreToSearch
          }
        })
        .then(res => {
        //aggiungo ai miei array gli album cercati e i generi disponibili
          this.albums = res.data.albums;
          this.genresAvailibles = res.data.genres;
          console.log(this.genres);
          console.log(this.albums);
  
        }).catch(err => {
  
          console.log(err);
  
        })
      }
  
    },
    //una volta creata la pagina chiamo la mia funzione getAPI
    created(){
      this.getAPI();
    }
  
  });