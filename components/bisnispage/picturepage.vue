<template>
  <div>
         <div class="uk-flex uk-flex-wrap uk-flex-wrap-reverse uk-width-1-1"  v-for="(name, index) in names" :key="index">
             
                 <div class="uk-width-1-4 uk-card uk-card-default uk-card-small">
                        <img class="uk-width-1-1 uk-padding-remove uk-border-rounded uk-margin-small-top" style="height:80px;" :src="sub_base_url+'upload/images/'+name.gambar" alt="">
                </div>
                <div class="uk-width-expand uk-card uk-card-default uk-card-body uk-card-small">
                        <h5 class="uk-text-small uk-margin-small-bottom"><span uk-icon="heart"></span> {{name.nama_operator}} </h5>
                </div>
         </div>
                        
</div>

</template>

<script>
module.exports = {
    props: {
			names: {
				type: Array,
				require: true
			},
			sub_base_url: {
				type: String,
				require: true
			},

        },
        
    data:function(){
        return{
            
        }
    }
};
</script>