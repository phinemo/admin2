<template>
     <div class="uk-position-relative uk-visible-toggle uk-light uk-margin-bottom" uk-slider>
            <ul class="uk-slider-items uk-width-3-4 uk-child-width-1-2@s uk-child-width-1-4@m">
                <li class="uk-margin-small-right" v-for="(slider, index) in sliders" :key="index">
                    <div class="uk-margin-small"><a :href="slider.url"
                    ><img class="uk-box-shadow-small uk-box-shadow-material-small uk-border-rounded uk-height-small uk-width-1-1" 
                    :data-src="slider.image" :alt="slider.title" uk-img></a>
                     </div>
                    <div class="uk-position-center uk-panel">
                        <h3>{{slider.title}}</h3>
                    </div>
                </li>
                
            </ul>

            <!-- <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                uk-slider-item="next"></a> -->

        </div>
</template>
<script>
module.exports = {
    data:function(){
        return{
            sliders:[
                {title:'Magelang',image:'img/rafting_magelang.jpg',url:'kategori.html',},
                {title:'Tanjung Puting',image:'img/tanjung.jpg',url:'kategori.html'},
                {title:'Labuan Bajo',image:'img/tanjung_benoa.jpg',url:'kategori.html'},
                {title:'Bali',image:'img/tari_kecak.jpg',url:'kategori.html'},
                {title:'Tanjung Puting',image:'img/tanjung.jpg',url:'kategori.html'},
                {title:'Labuan Bajo',image:'img/tanjung_benoa.jpg',url:'kategori.html'},
                {title:'Bali',image:'img/tari_kecak.jpg',url:'kategori.html'},
            ]
        }
    }
};
</script>

