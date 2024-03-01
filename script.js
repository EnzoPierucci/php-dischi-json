const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'getAlbums.php', 
            songList: [],
            selectedAlbum: undefined 
        }
    },
    created() {
        this.getAlbumList(); 
    },
    methods: {
        getAlbumList() {
            axios.get(this.apiUrl).then((response) => {
                this.songList = response.data;
            }).catch((error) => {
                console.error(error);
            });
        },
        getAlbumDetails(albumTitle) {
            axios.get(this.apiUrl, { params: { title: albumTitle } }).then((response) => {
                this.selectedAlbum = response.data;
            }).catch((error) => {
                console.error(error);
            });
        },
    }
}).mount('#app');
