<body>
    <div id="app" class="uk-container-expand">
        <navbar></navbar>
        <slideshow></slideshow>
        <div class="uk-container uk-padding-small uk-padding-remove-right">
            <h4 class="uk-text-bold uk-heading-line"><span>Paket Populer</span></h4>
            <listamazing></listamazing>  
        </div>
        
        <div class="uk-container uk-padding-small uk-padding-remove-right uk-padding-remove-top">
            <h4 class="uk-text-bold uk-heading-line"><span>Penawaran Spesial</span></h4>
        </div>
        <div class="uk-container uk-padding-small uk-padding-remove-bottom uk-padding-remove-top">
                <banner></banner>
        </div>
        
        <div class="uk-container uk-padding-small uk-padding-remove-right uk-padding-remove-top">
                <h4 class="uk-text-bold uk-heading-line"><span>Destinasi Populer</span></h4>
                <slider></slider>  
        </div>
    </div>
    <!-- End of App Vue -->

    <script type="text/javascript">
        new Vue({
            el: '#app',
            data: {
                show: false,
            },
            components: {
                'navbar': httpVueLoader('<?php echo base_url("components/global/navbar.vue") ?>'),
                'slideshow': httpVueLoader('<?php echo base_url("components/homepage/slideshow.vue") ?>'),
                'slider': httpVueLoader('<?php echo base_url("components/homepage/slider.vue") ?>'),
                'banner': httpVueLoader('<?php echo base_url("components/homepage/banneroffer.vue") ?>'),
                'banneramazing': httpVueLoader('<?php echo base_url("components/homepage/banneramazing.vue") ?>'),
                'listamazing': httpVueLoader('<?php echo base_url("components/homepage/listamazing.vue") ?>')
            }
        });
    </script>
    <style>
     @import 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.16/css/uikit.min.css';
    
     /* @import 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'; */
    </style>