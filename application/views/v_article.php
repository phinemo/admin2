
    <div id="article" class="uk-container-expand">
        <!-- Navbar Start -->
        <navbar></navbar>
        <!-- Navbar End -->
        <div class="uk-container uk-margin-auto-vertical">
        <fillarticle></fillarticle>
        <paneloffer :offers="offs"></paneloffer>
        <div class="uk-padding-large uk-padding-remove-bottom" >
        <recommended></recommended>
        <popular></popular>
        </div>
        
        </div>
        
    </div>
    <!-- Content Fill -->


    <!-- Floating Panel -->

    <!--  -->

    <!-- End Content Fill -->
    <!-- Addtional Content Recommendation and Popular -->
    
    
    <script type="text/javascript">
    
        var v = new Vue({
            el: '#article',
            data: {
                navitems: [{
                        name: 'Home',
                        ref: '#'
                    },
                    {
                        name: 'Hot Offer',
                        ref: '#'
                    },
                    {
                        name: 'Popular Trips',
                        ref: '#'
                    },
                    {
                        name: 'Phinemo.com',
                        ref: '#',
                        subnav: [{
                                subname: 'articles',
                                subref: 'article.html'
                            },
                            {
                                subname: 'community',
                                subref: '#'
                            },
                        ]
                    },
                    {
                        name: 'About Phinemo Merchant',
                        ref: '#'
                    }
                ],
                // mainUrl:'http://localhost/proto/prototype/admin2/index.php/C_article/',
                offs:[],
                id_media:[],
            },
            // props:['offers'],
            components: {
                'navbar': httpVueLoader('<?php echo base_url("components/global/navbar.vue") ?>'),
                'fillarticle': httpVueLoader('<?php echo base_url("components/article/fillarticle.vue") ?>'),
                'paneloffer': httpVueLoader('<?php echo base_url("components/article/paneloffer.vue") ?>'),
                'recommended':httpVueLoader('<?php echo base_url("components/article/recommended.vue") ?>'),
                'popular':httpVueLoader('<?php echo base_url("components/article/popular.vue") ?>')
            },
            created(){
                this.tampil();
            },
            mounted(){
                
            },
            methods:{
                tampil(){
                    axios
                        .get(this.mainUrl+'showoffers')
                        .then(response => (
                            this.offs = response.data.offers,
                            this.id_media = response.data.media,
                            console.log(this.offs[indexOfItem].id_media)))            
                },          
            }
        })
    </script>
