const { createApp } = Vue
createApp({
    data() {
        return {
            albums: null,
            current_album: null,
        }
    },

    methods: {
        show_details(i) {

            this.current_album = this.albums[i]

            //console.log(this.current_album);
        }
    },
    mounted() {
        axios
            .get('./server.php')
            .then(response => {
                this.albums = response.data
                console.log(response.data);
            })

    }
}).mount('#app')