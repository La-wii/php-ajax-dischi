const app = new Vue (
    {
        el: '#app',
        data: {
            url: 'data_json.php',
            dischi: '' 
        },
        mounted(){
            axios
                .get(this.url)
                .then(response => {
                    this.dischi = response.data;
                    console.log(response);
                })
                .catch(error => {
                    console.log(error);
                });
        },
    }

);