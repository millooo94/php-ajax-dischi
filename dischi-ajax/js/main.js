new Vue({
    el: '#app',
    data: {
        selected: '',
        disks: [],
        genres: [],
        urlApi: location.href + 'api.php',
    },
    created() {
        axios.get(this.urlApi)
        .then(axiosResponse => {
            this.disks = axiosResponse.data
            this.disks.forEach(album => {
               while (!this.genres.includes(album.genre)) {
                this.genres.push(album.genre)
               }
            });
            console.log(this.genres)
        });
    },
    computed: {
        onChange: function() {
            axios.get(this.urlApi)
            .then(axiosResponse => {
                this.disks = axiosResponse.data.forEach(album => {
                    if (album.genre == this.selected) {
                        return album
                    }
                })
            })

        }
    }
})