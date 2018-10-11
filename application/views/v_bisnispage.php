<body>
    <div id="app" class="uk-container-expand">
        <navbar></navbar>
        
        <div class="uk-container">
                <banner></banner>
                <pict></pict>
                <info></info>  
        </div>
        
        <div class="uk-container uk-padding-small uk-padding-remove-right">
            <h4 class="uk-text-bold uk-heading-line"><span>Paket Populer</span></h4>
            <listamazing></listamazing>  
        </div>
        <div class="uk-container uk-padding-small uk-padding-remove-right">
                <h4 class="uk-text-bold uk-heading-line"><span>Best Seller</span></h4>
                <listamazing></listamazing>  
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
                'banner': httpVueLoader('<?php echo base_url("components/bisnispage/bannerbisnis.vue") ?>'),
                'pict': httpVueLoader('<?php echo base_url("components/bisnispage/picturepage.vue") ?>'),
                'info': httpVueLoader('<?php echo base_url("components/bisnispage/informasi.vue") ?>'),
                'slideshow': httpVueLoader('<?php echo base_url("components/homepage/slideshow.vue") ?>'),
                'listamazing': httpVueLoader('<?php echo base_url("components/homepage/listamazing.vue") ?>')
            }
        });
    </script>
    <style>
     @import 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.16/css/uikit.min.css';
     @import 'css/main.css';
     /* @import 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'; */
    </style>