const { createApp } = Vue;
const app = createApp({
  data() {
    return {
      apiUrl: "getAlbum.php",
      discsArray: [],
      pickedDisc: 0,
      overlayOpen: false,
    };
  },
  created() {
    this.accessLibrary();
  },
  methods: {
    accessLibrary() {
      axios.get(this.apiUrl).then((response) => {
        this.discsArray = response.data;
      });
    },
    push(index) {
      this.pickedDisc = index;
    },
  },
}).mount("#app");