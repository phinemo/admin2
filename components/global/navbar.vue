<template>
    <!-- Navbar Start -->
    <div uk-grid>
        <div class="uk-width-1-1">

            <div uk-sticky="show-on-up: true; animation: uk-animation-slide-top; bottom: #bottom">
                <nav class="uk-navbar-container uk-box-shadow-material-small" uk-navbar style="position: relative; z-index: 980;">
                    <div class="uk-navbar-left">
                        <div class="uk-visible@m uk-margin-medium-left">
                            <img src="https://www.phinemo.com/wp-content/themes/projectav2/images/114x30xlogo-phinemo.png.pagespeed.ic.qkIeB28U-q.webp"
                                alt="Logo Phinemo" height="" width="">
                        </div>
                        <ul class="uk-navbar-nav">
                            <li class="uk-active  uk-hidden@m"><a href="" uk-toggle="target: #offcanvas-menu"><span uk-icon="menu"></span></a></li>
                                <li v-for="(navitem,index) in navitems" :key="index" class="uk-active uk-text-bold uk-visible@m">
                                    <a :href="navitem.ref">{{navitem.name}}</a></li>

                        </ul>
                    </div>
                    <a class="uk-navbar-center" href="index.html">
                        <div class="uk-hidden@m">
                            <img src="https://www.phinemo.com/wp-content/themes/projectav2/images/114x30xlogo-phinemo.png.pagespeed.ic.qkIeB28U-q.webp"
                                alt="Logo Phinemo" height="" width="">
                        </div>
                    </a>
                    <div class="uk-navbar-right">
                        <div>
                            <a class="uk-navbar-toggle" uk-search-icon href="#modal-search" uk-toggle></a>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Modal -->
            <div id="modal-search" class="uk-modal-full uk-animation-toggle" uk-modal>
                <div class="uk-modal-dialog uk-panel">
                    <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                    <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle " uk-grid>
                        <div class="uk-padding uk-margin-top">
                            <form action="">
                                <div class="uk-grid-small">
                                    <div class="uk-form-controls uk-margin uk-width-1-2@s">
                                        <select name="country" id="countryid" class="uk-select">
                                            <option v-for="(country,index) in countries" :key="index" :value="country.value">{{country.name}}</option>
                                        </select>
                                    </div>
                                    <div class="uk-form-controls uk-margin uk-width-1-2@s">
                                        <select name="category" id="categorytryid" class="uk-select">
                                            <option v-for="(category,index) in categories" :key="index" :value="category.value">{{category.name}}</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                            <form class="uk-search uk-search-navbar uk-animation-sl ide-right uk-width-1-1">
                                <div class="uk-grid-small">
                                    <div class="uk-inline uk-width-1-1">
                                        <a href="" class="uk-search-icon-flip" uk-search-icon></a>
                                        <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="uk-padding-large">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->
            <div id="offcanvas-menu" uk-offcanvas="overlay:true">
                <div class="uk-offcanvas-bar uk-padding-remove uk-flex uk-flex-column">
                    <!-- <nav class="uk-navbar-container uk-dark" uk-navbar>
                        <div class="uk-navbar-left">
                            <ul class="uk-navbar-nav uk-margin-left">
                                <li><img src="https://www.phinemo.com/wp-content/themes/projectav2/images/114x30xlogo-phinemo.png.pagespeed.ic.qkIeB28U-q.webp"
                                        alt="Logo Phinemo" height="" width=""></li>
                            </ul>
                        </div>
                        <div class="uk-navbar-center">
                            <ul class="uk-navbar-nav">
                                <li class="uk-text-lead"></li>
                            </ul>
                        </div>
                        <div class="uk-navbar-right">
                            <ul class="uk-navbar-nav">
                                <li><button class="uk-offcanvas-close" type="button" uk-close></button></li>
                            </ul>
                        </div>
                    </nav> -->
                    <div class="uk-width-1-1" uk-grid>
                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    </div>
                    <ul class="uk-nav uk-nav-default uk-nav-left uk-margin-left uk-margin-large-top uk-list uk-list-divider">
                        <li v-for="(navitem,index) in navitems" :key="index" class=" uk-active uk-text-uppercase uk-margin-small-bottom uk-text-small"><p class="uk-margin-remove-bottom"><a
                                :href="navitem.ref">{{navitem.name}}</a></p>
                            <ul v-for="(subnav,index) in navitem.subnav" :key="index" class="uk-nav-sub uk-margin-remove">
                                <li><h6 class="uk-text-uppercase uk-margin-remove-bottom"><a :href="subnav.subref">{{subnav.subname}}</a></h6></li>
                            </ul>
                        </li>
                        <!-- <li class="uk-nav-divider"></li>
                        <ul class="uk-nav-sub">
                            <li><a href="about/">ABOUT US</a></li>
                            <li><a href="careers/">WORK FOR US</a></li>
                            <li><a href="advertise/">ADVERTISE</a></li>
                            <li><a href="contact/">CONTACT US</a></li>
                            <li><a href="#">HELP</a></li>
                        </ul> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
</template>
<script>
    module.exports = {
        data: () => {
            return {
                show: false,
                showsearch: false,
                hidden: false,
                countries: [{
                        name: 'Indonesia',
                        value: 'indonesia'
                    },
                    {
                        name: 'Myanmar',
                        value: 'myanmar'
                    },
                    {
                        name: 'Japan',
                        value: 'japan'
                    },
                    {
                        name: 'Korea',
                        value: 'korea'
                    },
                ],
                categories: [{
                        name: 'Most Popular'
                    },
                    {
                        name: 'Newest'
                    },
                    {
                        name: 'Best Seller'
                    },
                    {
                        name: 'Low Price'
                    },
                ],
                navitems: [{
                        name: 'login',
                        ref: '#'
                    },
                    {
                        name: 'articles',
                        ref: 'article.html'
                    },
                    {
                        name: 'trips',
                        ref: '#'
                    },
                    {
                        name: 'help',
                        ref: '#',
                    },
                ]
            }
        },
    }
</script>
<style scoped>
    .uk-navbar,
    .uk-navbar-container {
        height: 56px;
    }

    .uk-panel {
        height: 100% !important;
    }
</style>