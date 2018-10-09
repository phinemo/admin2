<template>
  <div class="uk-margin-small-bottom uk-margin-small-bottom uk-margin-small-bottom uk-text-small" v-html="deskripsi"> 
        <!-- {{sub_desc.deskripsi}} -->
        <ul class="uk-list uk-list-bullet uk-margin-small-bottom uk-margin-remove-top">
            <!-- <li>Durasi Tour: 8 Jam</li> -->
            <!-- <li>Jumlah Anggota Rombongan: 12 - 15 orang</li> -->
        </ul>
  </div>

</template>

<script>
module.exports = {
    props:{
        // sub_descs:{
        //     type:Array,
        //     require:true
        // },
        deskripsi:String,
    },
    data:function(){
        return{
            
        }
    }
};
</script>