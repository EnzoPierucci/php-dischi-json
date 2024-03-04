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
    <header class="bg-gray-800">
        <div class="container mx-auto p-3">
            <figure>
                <img class="block" src="./img/spotify.svg" alt="header_logo">
            </figure>
        </div>
    </header>
    <div class="relative">
        <main>
            <div class="container mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                    <div v-for="(disc, index) in discsArray" :key="index" class="col-span-1">
                        <div class="bg-gray-900 text-white text-center rounded-lg py-4 px-5 h-full">
                            <figure class="mb-0">
                                <img class="block w-full" :src="disc.poster" :alt="'poster-disc-' + index">
                            </figure>
                            <div class="flex flex-col gap-3 py-3">
                                <h4 class="mb-0">{{ disc.title }}</h4>
                                <span>{{ disc.author }}</span>
                                <h5 class="mb-0">{{ disc.year }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="selected-disc" class="absolute top-0 left-0 right-0 bottom-0 bg-gray-900 text-white rounded-lg transition-opacity duration-500" :class="{ 'opacity-0': !overlayOpen, 'opacity-100': overlayOpen }">
                <div id="close-button" class="absolute top-0 right-0 p-3">
                    <i class="fas fa-times rounded-lg cursor-pointer" @click="overlayOpen = !overlayOpen"></i>
                </div>
                <div class="absolute inset-0 flex flex-col items-center justify-center">
                    <figure class="mb-0">
                        <img class="block" :src="discsArray[pickedDisc].poster" :alt="'poster-disc-' + pickedDisc">
                    </figure>
                    <div class="flex flex-col items-center gap-3 py-3">
                        <h4 class="mb-0">{{ discsArray[pickedDisc].title }}</h4>
                        <span>{{ discsArray[pickedDisc].author }}</span>
                        <h5 class="mb-0">{{ discsArray[pickedDisc].year }}</h5>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script src="https://unpkg.com/vue@3.2.31/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="./main.js" type="module"></script>

</body>
</html>