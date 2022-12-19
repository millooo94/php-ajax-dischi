new Vue({
    el: '#app',
    data: {
        genre: 'all',
        disks: [],
        genres: [],
        urlDisks: 'api/disks.php',
        urlGenres: 'api/genres.php',
    },
    created() {
        axios.get(this.urlDisks)
        .then(axiosResponse => {
            this.disks = axiosResponse.data
        });
        axios.get(this.urlGenres)
        .then(axiosResponse => {
            this.genres = axiosResponse.data
        })
    },
    methods: {
        changeSelect() {
            axios.get(this.urlDisks, {
                params: {
                    genre: this.genre
                },
            })
            .then(axiosResponse => {
                this.disks = axiosResponse.data
            });
        }
    }
});