Vue.config.devtools = true;

new Vue(
      {
            el: '#app',
            data: {
                  dischi:[]
            },

            created(){
                  axios.get('http://localhost:8888/php-ajax-dischi/api/api.php')
                  .then((response)=> {
                        this.dischi = response.data;
                  })

            }
      }
);