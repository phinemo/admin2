<template>
    <div>
        <!-- Button Offer -->
        <div id="mybutton" class="uk-inline">
            <a class="uk-button uk-button-primary uk-border-rounded" href="#modal-full" uk-toggle><span uk-icon="tag"></span>
                Offers</a>
        </div>
        <!-- End Button Offer -->
        <div id="modal-full" class="" uk-modal>
            <div class="uk-modal-dialog uk-grid-small uk-position-cover" uk-grid>
                <div class="uk-width-1-1 uk-navbar-container" uk-navbar>
                    <div class="uk-navbar-center">
                        <ul class="uk-navbar-nav">
                            <li class="uk-text uk-text-bold">Special Offers</li>
                        </ul>
                    </div>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav">
                            <li><button class="uk-modal-close-full uk-close-large" type="button" uk-close></button></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-grid-collapse uk-child-width-1-1@s uk-child-width-1-1@m uk-flex-middle" :style="c_offer" >
                    <!-- Offer List -->
                    <div class="uk-grid-small uk-animation-fade uk-flex-center uk-child-width-1-2@s uk-child-width-1-1@m uk-margin-small" 
                     uk-grid>
                        <!-- Card Offer -->
                        <!-- <div class="uk-panel uk-panel-box"> -->
                        <!-- Make zero margin, sticky between "offer", there's no space -->
                        <div class="offer" v-for="(offer,index) in offers" :key="index" >
                            <div class="uk-card uk-border-rounded uk-box-shadow-material-small uk-padding-remove">
                                <div class="uk-card-header uk-padding-remove-right uk-padding-remove-left uk-margin-small-left">
                                    <div class="uk-grid-small uk-flex-middle uk-width-1-1" uk-grid>
                                        <div class="uk-width-1-3">
                                            <img class="" :src="base+'upload/images/'+offer.resized" :style="thumbnail">
                                        </div>
                                        <div class="uk-width-expand">
                                            <!-- Title -->
                                            <a :href="url+'C_showoffer/index/'+offer.id_produk">
                                                <h6 class=" uk-margin-remove-bottom uk-text-small uk-text-bold">{{offer.nama_produk}}</h6>
                                            </a>
                                            <!-- Highlight -->
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <a :href="url+offer.id_produk" class="uk-text-meta uk-text-small" :style="c_price"> From
                                                        {{offer.harga}}K IDR</a><br>
                                                    <!-- <i v-for="rating in card.rating" :key="rating" class="uk-text-center uk-margin-remove fa fa-star" -->
                                                        <!-- ></i> -->
                                                </div>
                                                <!-- <div class="uk-width-expand">
                                                    <ul class="uk-list uk-list-striped">
                                                        <li v-for="(highlight,index) in card.highlights" :key="index"
                                                            class="uk-padding-remove uk-text-small">{{highlight.subtitle}}</li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of UK panel -->
                        <!-- </div> -->
                    </div>
                    <!-- End Offer List -->
                </div>

            </div>
        </div>
    </div>
</template>
<script>
    module.exports = {
        props:{
            offers:{
                type:Array,
                require:true
            },
            base:{
                type:String,
                require:true
            },
            url:{
                type:String,
                require:true
            }
        },
        data: function () {
            return {
                c_offer :{background:'#fff'},
                c_price :{color:"black"},
                thumbnail: {width:'100%',height:'100px'},
                nopaddinghr:{'padding-left':'0px','padding-right':'0px'},
            }
        },
        
    }
</script>