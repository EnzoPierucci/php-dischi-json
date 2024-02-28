var app = new Vue({
    el: '#app',
    data: {
        dischi: []
    },
    mounted() {
        axios.get('api/fetchDischi.php')
            .then(response => {
                this.dischi = response.data;
            })
            .catch(error => {
                console.log(error);
            });
    }
});