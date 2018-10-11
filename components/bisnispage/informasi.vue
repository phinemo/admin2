<template>
  
    <div>
        <div class="uk-flex uk-flex-wrap uk-flex-wrap-reverse uk-width-1-1 uk-margin-small-top">
            <a href="#modal-mail" uk-toggle class="uk-button uk-button-secondary uk-width-expand uk-border-rounded uk-text-small"><span uk-icon="icon: commenting; ratio: 0.9"></span> Chat</a>
            <a href="#modal-call" uk-toggle class="uk-button uk-button-primary uk-width-expand uk-border-rounded uk-margin-small-left uk-text-small"><span uk-icon="icon: receiver; ratio: 0.9"></span> Call</a>
            <a href="https://phinemo.com/merchant/" class="uk-button uk-button-danger uk-width-expand uk-border-rounded uk-margin-small-left uk-text-small"><span uk-icon="icon: world; ratio: 0.9"></span> Website</a>
        </div>
        
        <div class="uk-flex uk-flex-wrap uk-flex-wrap-reverse uk-width-1-1 uk-margin-small-top">
            <div class="uk-width-expand">
                 <div class="uk-card uk-card-default uk-card-body uk-padding-small uk-text-small"><span class="uk-position-small uk-position-top-center" uk-icon="icon: star; ratio: 0.8"></span> <p class="uk-text-center">343 Ulasan</p></div>
            </div>
            <div class="uk-width-expand">
                <div class="uk-card uk-card-default uk-card-body uk-padding-small uk-text-small"><span class="uk-position-small uk-position-top-center" uk-icon="icon: plus; ratio: 0.8"></span> <p class="uk-text-center"> 100 Product</p></div>
            </div>
         </div>
            <h4 class="uk-text-bold uk-heading-line"><span>Biografi</span></h4>
            <div v-for="(sub_title, index) in sub_titles" :key="index" v-html="sub_title.biografi">
                
            </div>
            
            <div> 
                <ul class="uk-list">
                    <li class="uk-text-bold">Tanggal Bergabung </li>
                    <li class="uk-text-bold">Alamat   </li>
                    <li class="uk-text-bold">Contact  </li> <div v-html="number"></div>
                    <li class="uk-text-bold">Twitter  </li> <div v-html="twitter"></div>
                    <li class="uk-text-bold">Instagram</li> <div v-html="instagram"></div>
                    <li class="uk-text-bold">facebook </li> <div v-html="facebook"></div>       
                </ul>
            </div>

             <div id="modal-call" uk-modal>
                <div class="uk-modal-dialog uk-position-bottom" style="height:auto;" >
                    <button class="uk-modal-close-outside uk-padding-small" type="button" uk-close></button>
                    <div class="uk-modal-footer uk-text-center uk-width-1-1">
                        <a class="uk-margin-small-right" :href="'https://wa.me/'+number"><img :src="sub_base_url+'admintemplate/dist_view/img/wa.svg'" width="48" height="48" alt=""></a>
                        <a :href="'tel:'+number"><img :src="sub_base_url+'admintemplate/dist_view/img/phone.svg'" width="48" height="48" alt=""></a>
                    </div>
                </div>
            </div>
            <div id="modal-mail" uk-modal>
                <div class="uk-modal-dialog uk-position-bottom" style="height:auto;" >
                    <button class="uk-modal-close-outside uk-padding-small" type="button" uk-close></button>
                    <div class="uk-modal-footer uk-text-center uk-width-1-1">
                        <a class="uk-margin-small-right" :href="'https://wa.me/'+number"><img :src="sub_base_url+'admintemplate/dist_view/img/wa.svg'" width="48" height="48" alt=""></a>
                        <a class="uk-margin-small-right" :href="'sms:'+number+'?body= Welcome Phinemo Merchant'"><img :src="sub_base_url+'admintemplate/dist_view/img/mail.svg'" width="48" height="48" alt=""></a>
                        <a :href="'sms:'+number+'&body= Welcome Phinemo Merchant'"><img :src="sub_base_url+'admintemplate/dist_view/img/ios.svg'" width="48" height="48" alt=""></a>
                    </div>
                </div>
            </div>
    </div>

</template>

<script>
module.exports = {
    props: {
			sub_titles: {
				type: Array,
				require: true
			},
			sub_base_url: {
				type: String,
				require: true
			},
          number:String,
          twitter:String,
          instagram:String,
          facebook:String
		},
    data:function(){
        return{
            
        }
    }
};
</script>