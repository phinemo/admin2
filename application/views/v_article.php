
    <div id="article" class="uk-container-expand">
        <!-- Navbar Start -->
        <navbar></navbar>
        <!-- Navbar End -->
        <div class="uk-container uk-margin-auto-vertical">
                <fillarticle></fillarticle>
                <paneloffer :offers="offs" :base="baseUrl" :url="mainUrl"></paneloffer>
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
                //mainUrl:'http://random.host:8888/magang/codeigniter/admin2/index.php/',
                //baseUrl:'http://random.host:8888/magang/codeigniter/admin2/',
                mainUrl:'http://localhost/admin2/index.php/',
                baseUrl:'http://localhost/admin2/',
                // mainUrl:'http://phinemo.com/admin2/index.php/',
                // baseUrl:'http://phinemo.com/admin2/',
                offs:[],
            },
            // props:['offers'],
            components: {
                'navbar': httpVueLoader('<?php echo base_url("components/global/navbar.vue") ?>'),
                'fillarticle': httpVueLoader('<?php echo base_url("components/article/fillarticle.vue") ?>'),
                'paneloffer': httpVueLoader('<?php echo base_url("components/article/paneloffer.vue") ?>'),
                'recommended':httpVueLoader('<?php echo base_url("components/article/recommended.vue") ?>'),
                'popular':httpVueLoader('<?php echo base_url("components/article/popular.vue") ?>')
            }
            ,
            created(){
                this.tampil();
            },
            methods:{
                tampil(){
                    axios
                        .get(this.mainUrl+'C_article/showoffers')
                        .then(response => (this.offs = response.data.offers))
                }
            }
        })
    </script>
