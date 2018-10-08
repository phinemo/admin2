<template>
  
          <div class="uk-panel uk-width-1-1">
                <div class="" v-for="(banner, index) in banners" :key="index">
                    <img class="uk-width-1-1 uk-height-max-medium" :src="banner.site" alt="">
                    <div class="uk-position-center uk-text-center">
                        <h2 class="uk-margin-remove-bottom uk-text-bold" :style="s_color" uk-slider-parallax="x: 100,-100">{{banner.heading}}</h2>
                        <p class="uk-margin-remove-top uk-text-bold" :style="s_color" uk-slider-parallax="x: 200,-200">{{banner.text}}</p>
                    </div>
                </div>
          </div>

</template>

<script>
module.exports = {
    data:function(){
        return{
            banners: [{
                    'site': 'img/raja_ampat.jpg',
                    'heading':'Semarang',
                    'text':'Kota Seribu Macam Wisata Menarik dan Eksotis',
                    'click':false,
                },
            ],
           s_color :{color: '#fff'}, 
        }
    }
};
</script>