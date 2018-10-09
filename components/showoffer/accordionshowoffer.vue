<template>
    <div>
        <ul uk-accordion class="uk-text-small">
            <li class="uk-open">
                <hr class="uk-margin-small-top uk-margin-small-bottom">
                <a class="uk-accordion-title uk-text-bold" :style="s_font" href="#"> HIGHLIGHT</a>
                <div class="uk-accordion-content" v-html="highlight">
                    
                </div>
            </li>
            <li>
                <hr class="uk-margin-small-top uk-margin-small-bottom">
                <a class="uk-accordion-title uk-text-bold" :style="s_font" href="#">FASILITAS</a>
                <div class="uk-accordion-content" v-html="fasilitas">
                    <h6>TERMASUK</h6>
                    
                    <h6>TIDAK TERMASUK</h6>
                    
                </div>
            </li>
            <li>
                <hr class="uk-margin-small-top uk-margin-small-bottom">
                <a class="uk-accordion-title uk-text-bold" :style="s_font" href="#">KEBIJAKAN PEMBATALAN</a>
                <div class="uk-accordion-content" v-html="kebijakan">
                    
                </div>
            </li>           
        </ul>

    </div>

</template>

<script>
    module.exports = {
        props:{
          fasilitas:String,
          highlight:String,
          kebijakan:String  
        },
        data: function () {
            return {
                s_font:{fontSize:'.875rem'},
                s_font2:{fontSize:'.850rem'},
            }
        }
    };
</script>