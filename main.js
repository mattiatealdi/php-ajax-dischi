

const app = new Vue({
    el: '#app',
    data:{
        cards: [],
    },
    methods:{
 
        getCards() {
            axios.get('http://localhost:8888/php-ajax-dischi/api.php')
                .then( res => {
                    console.log(res.data);
                    this.result = res.data;
                    this.cards = this.result.response;
                })
                .catch( err => {
                    console.log(err);
                })
        },
        
    },

    created(){
        getCards();
    },

    mounted(){

    },

});