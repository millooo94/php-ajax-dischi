new Vue({
    el: '#app',
    data: {
        disks: [],
        urlApi: location.href + 'api.php',
    },
    created() {
        axios.get(this.urlApi)
        .then(axiosResponse => {
            console.log(axiosResponse);
            this.disks = axiosResponse.data
        });
    }
})