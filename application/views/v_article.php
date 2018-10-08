
    <div id="article" class="uk-container-expand">
        <!-- Navbar Start -->
        <navbar></navbar>
        <!-- Navbar End -->
        <div class="uk-container uk-margin-auto-vertical">
        <fillarticle></fillarticle>
        <paneloffer></paneloffer>
        <recommended></recommended>
        <popular></popular>
        </div>
        
    </div>
    <!-- Content Fill -->


    <!-- Floating Panel -->

    <!--  -->

    <!-- End Content Fill -->
    <!-- Addtional Content Recommendation and Popular -->
    
    
    <script type="text/javascript">
        new Vue({
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
                ]
            },
            components: {
                'navbar': httpVueLoader('<?php echo base_url("components/global/navbar.vue") ?>'),
                'fillarticle': httpVueLoader('<?php echo base_url("components/article/fillarticle.vue") ?>'),
                'paneloffer': httpVueLoader('<?php echo base_url("components/article/paneloffer.vue") ?>'),
                'recommended':httpVueLoader('<?php echo base_url("components/article/recommended.vue") ?>'),
                'popular':httpVueLoader('<?php echo base_url("components/article/popular.vue") ?>')
            }
        })
    </script>
