const { createApp } = Vue
createApp({
    data() {
        return {
            albums: null,
        }
    },

    methods: {
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