<template>
  
        <div class="uk-panel uk-width-1-1">
                <img class="uk-width-1-1 uk-height-max-medium" src="img/Raja_ampat.jpg" alt="">
                <!-- <div class="uk-position-center uk-text-center">
                    <h2 class="uk-margin-remove-bottom" uk-slider-parallax="x: 100,-100">Heading</h2>
                    <p class="uk-margin-remove-top" uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
                   
                </div> -->
                 <div class="uk-position-large uk-position-bottom-left uk-margin-bottom" uk-lightbox>
                    <a class="uk-button uk-button-primary uk-button-small" uk-icon="image" title="Lebih Banyak Gambar" href="img/lombok.jpg" data-caption="Image"></a>
                    <a class="" href="img/Bali.jpg" data-caption="Image"></a>
                    <a class="" href="img/Raja_ampat.jpg" data-caption="Image"></a>
                </div>
                
        </div>

</template>

<script>
module.exports = {
    data:function(){
        return{
            
        }
    }
};
</script>