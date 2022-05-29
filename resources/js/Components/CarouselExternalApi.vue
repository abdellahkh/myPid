<script>
import axios from 'axios'
export default {
      data() {
    return{
    blankPoster: "https://www.theatre-contemporain.net/images/upload/spectacles/1/0/normal-crop-100x100-def.jpg",
    spectacles: {},
    spectaclesLoaded: false,

    // Info needed for the external api
    headers: {"Content-Type": "application/json"},
    apiRequest: '/api/spectacles/all/search',
    apiKey: '?k=0b8e3d188a6347c017b04ac462ff0e8acf6b2c65',
    entryPoint: 'https://www.theatre-contemporain.net',

    // Turnaround for the localhost block of the API
    corsWorkaround: 'https://cors-anywhere.herokuapp.com/',
    }


  },

  created(){
    axios.get(this.corsWorkaround + this.entryPoint+this.apiRequest+this.apiKey).then(response => {
      this.spectacles = response.data;
      this.spectacles = this.spectacles.filter(spectacle => spectacle.poster != this.blankPoster);
      this.spectacles = this.spectacles.sort(() => Math.random() - 0.5);
      this.spectacles = this.spectacles.slice(0,3);
      this.spectaclesLoaded = true;

    })
    
    
  },
    setup() {
        
    },
}
</script>

<template>

<a v-if="this.spectaclesLoaded == false" href="https://cors-anywhere.herokuapp.com/corsdemo" target="_blank">
<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Click here if the connection to the api is blocked
</button>
</a>
<div v-if="this.spectaclesLoaded" id="default-carousel" class="relative" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
         <!-- Item 1 -->
        <div class="duration-700 ease-in-out" data-carousel-item>
            <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
            <img v-bind:src="this.spectacles[0].poster" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img v-bind:src="this.spectacles[1].poster" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img v-bind:src="this.spectacles[2].poster" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="hidden">Previous</span>
        </span>
    </button>
    <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="hidden">Next</span>
        </span>
    </button>
</div>
<!-- <div class="carousel">
    <div v-if="this.spectaclesLoaded == true" class="carousel-inner">
        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
        <div class="carousel-item">
            <h1>{{this.spectacles[0].title}}</h1>
            <img v-bind:src="this.spectacles[0].poster">
        </div>
        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item">
            <h1>{{this.spectacles[1].title}}</h1>
            <img v-bind:src="this.spectacles[1].poster">
        </div>
        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item">
            <h1>{{this.spectacles[2].title}}</h1>
            <img v-bind:src="this.spectacles[2].poster">
        </div>
        <label for="carousel-3" class="carousel-control prev control-1">‹</label>
        <label for="carousel-2" class="carousel-control next control-1">›</label>
        <label for="carousel-1" class="carousel-control prev control-2">‹</label>
        <label for="carousel-3" class="carousel-control next control-2">›</label>
        <label for="carousel-2" class="carousel-control prev control-3">‹</label>
        <label for="carousel-1" class="carousel-control next control-3">›</label>
        
    </div>
</div> -->

</template>

<style scoped>
html, body {
    margin: 0px;
    padding: 0px;
    background: url("http://digital.bnint.com/filelib/s9/photos/white_wood_4500x3000_lo_res.jpg");
}

.carousel {
    position: relative;
    box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
    margin-top: 26px;
    max-width: 50%;
    margin-left: auto;
    margin-right: auto;
}

.carousel-inner {
    position: relative;
    overflow: hidden;
    width: 100%;
}

.carousel-open:checked + .carousel-item {
    position: static;
    opacity: 100;
}

.carousel-item {
    position: absolute;
    opacity: 0;
    -webkit-transition: opacity 0.6s ease-out;
    transition: opacity 0.6s ease-out;
    margin-left: auto;
    margin-right: auto;
}

.carousel-item img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    height: auto;

}

.carousel-control {
    background: rgba(0, 0, 0, 0.28);
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    display: none;
    font-size: 40px;
    height: 40px;
    line-height: 35px;
    position: absolute;
    top: 50%;
    -webkit-transform: translate(0, -50%);
    cursor: pointer;
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);
    text-align: center;
    width: 40px;
    z-index: 10;
}

.carousel-control.prev {
    left: 2%;
}

.carousel-control.next {
    right: 2%;
}

.carousel-control:hover {
    background: rgba(0, 0, 0, 0.8);
    color: #aaaaaa;
}

#carousel-1:checked ~ .control-1,
#carousel-2:checked ~ .control-2,
#carousel-3:checked ~ .control-3 {
    display: block;
}

.carousel-indicators {
    list-style: none;
    margin: 0;
    padding: 0;
    position: absolute;
    bottom: 2%;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 10;
}

.carousel-indicators li {
    display: inline-block;
    margin: 0 5px;
}

.carousel-bullet {
    color: #fff;
    cursor: pointer;
    display: block;
    font-size: 35px;
}

.carousel-bullet:hover {
    color: #aaaaaa;
}

#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
#carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
#carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
    color: #428bca;
}

#title {
    width: 100%;
    position: absolute;
    padding: 0px;
    margin: 0px auto;
    text-align: center;
    font-size: 27px;
    color: rgba(255, 255, 255, 1);
    font-family: 'Open Sans', sans-serif;
    z-index: 9999;
    text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), -1px 0px 2px rgba(255, 255, 255, 0);
}
    
</style>