<template>
  <div>
        <div class="uk-panel uk-width-1-1" v-for="(sub_title,index) in sub_titles" :key="index">
                <img class="uk-width-1-1 uk-height-max-medium" :src="sub_base_url+'upload/images/'+sub_title.gambar" alt="">
                <!-- <div class="uk-position-center uk-text-center">
                    <h2 class="uk-margin-remove-bottom" uk-slider-parallax="x: 100,-100">Heading</h2>
                    <p class="uk-margin-remove-top" uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
                   
                </div> -->
                 <div class="uk-position-large uk-position-bottom-left uk-margin-bottom" uk-lightbox>
                    <a class="uk-button uk-button-primary uk-button-small" uk-icon="image" title="Lebih Banyak Gambar" :href="sub_base_url+'upload/images/'+sub_title.gambar" data-caption="Image"></a>
                    <a class="" :href="sub_base_url+'upload/images/'+sub_title.gambar" data-caption="Image"></a>
                    <a class="" :href="sub_base_url+'upload/images/'+sub_title.gambar" data-caption="Image"></a>
                </div>
                
        </div>
  </div>
</template>

<script>
module.exports = {
    props:{
        sub_titles:Array,
        sub_base_url:String
    },
    data:function(){
        return{
            
        }
    }
};
</script>