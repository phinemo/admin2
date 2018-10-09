<template>
  
     <div class="" >
         <div v-for="(judul, index) in juduls" :key="index">
                <h1 class="uk-text-bold uk-text-lead uk-margin-remove-bottom">{{judul.title}}</h1>
                <h5 class="uk-text-medium  uk-margin-remove-bottom uk-margin-remove-top" style="color:orange;">From {{judul.price}}K IDR</h5>
                <i v-for="rating in judul.ratings" :key="rating" class="fa fa-star" aria-hidden="true" ></i>
         </div>
    </div>

</template>

<script>
module.exports = {
    props:{
            headings:{
                type:Array,
                require:true
            }
        },
    data:function(){
        return{
            juduls: [{
                        title: 'Bali All Inclusive: Ubud Rice Terraces, Temples & Vulcano ',
                        image: 'img/batur.jpg',
                        price: '600',
                        ratings: 4,
                },

            ]
        }
    }
};
</script>