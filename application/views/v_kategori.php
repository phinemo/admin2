<body>
    <div id="app" class="uk-container-expand">
        <navbar></navbar>
        <bannerkategori></bannerkategori>
        <br class="uk-margin-small-top uk-margin-small-top uk-margin-small-bottom">
        <div class="uk-container">
            <infokategori></infokategori>
            <div class="uk-container uk-margin-small-bottom">
                <h5 class="uk-text-bold uk-margin-remove-bottom uk-heading-line"><span>Tempat Wisata Terbaik Di Semarang</span></h5>
            </div>
        </div>
        
        <div class="uk-container uk-padding-remove-right">
            <sliderkategori1></sliderkategori1>
        </div>
        <div class="uk-container uk-margin-small-bottom">
            <buttonwisata class="uk-text-uppercase" :title="btnwis"></buttonwisata>
        </div>
        
        <div class="uk-container">
            <div class="uk-margin-small-bottom uk-margin-small-top">
                <h5 class="uk-text-bold uk-margin-remove-bottom uk-heading-line"><span>Best Seller</span></h5>
            </div>
        </div>
        <div class="uk-container uk-padding-remove-right">
            <sliderkategori1></sliderkategori1>
        </div>
        <div class="uk-container">
            <buttonwisata :title="btnpenawaran"></buttonwisata>
        </div>
    </div>
    <script type="text/javascript">
        new Vue({
            el: '#app',
            data: {
                show: false,
                btnwis:{name:'cek semua wisata terbaik',url:'listbycategory.html'},
                btnpenawaran:{name:'cek semua penawaran',url:'listbycategory.html'}
            },
            components: {
                 'navbar': httpVueLoader('<?php echo base_url("components/global/navbar.vue") ?>'),
                 'bannerkategori': httpVueLoader('<?php echo base_url("components/kategori/bannerkategori.vue") ?>'),
                 'infokategori': httpVueLoader('<?php echo base_url("components/kategori/infokategori.vue") ?>'),
                 'sliderkategori1':httpVueLoader('<?php echo base_url("components/homepage/listamazing.vue") ?>'),
                 'buttonwisata':httpVueLoader('<?php echo base_url("components/global/buttonfullwidth.vue") ?>')
            },
        });
    </script>