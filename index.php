<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <title>php-dischi-json</title>

</head>
<body>


<div id="app">
    <div v-for="album in songList" :key="album.title" @click="getAlbumDetails(album.title)">
        <img :src="album.poster" :alt="album.title" />
        <h2>{{ album.title }}</h2>
        <p>{{ album.author }}</p>
    </div>

    <div v-if="selectedAlbum" class="album-details">
    </div>
</div>

<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script src="https://unpkg.com/vue@3.2.31/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="script.js" type="module"></script>

</body>
</html>