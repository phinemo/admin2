<body>
    <div id="app" class="uk-container-expand uk-width-1-1@m">
        <navbar></navbar>
        <bannershowoffer></bannershowoffer>
        
        <div class="uk-width-1-1@s uk-width-1-1@m " >
        
            <div class="uk-container uk-margin-small-top uk-width-1-2@m">
                    <labelshowoffer></labelshowoffer>
                    <judulshowoffer :headings="dets"></judulshowoffer>
            </div>
        
            <div class="uk-container uk-margin-small-top uk-width-1-2@m">
                    
                <div class="uk-margin-small-top uk-margin-small-top uk-margin-small-top">
                    <h6 class="uk-text-bold uk-text uk-margin-remove-bottom">DESKRIPSI SINGKAT</h6>
                </div>
                <hr class="uk-margin-small-top uk-margin-small-bottom">
                <isiinformasi></isiinformasi>
                <accordionshowoffer></accordionshowoffer>
                <div id="end" class="uk-margin-large-top"></div>

            </div>

        </div>
        <div id="end" class="uk-margin-large-top"></div>
        <div id="end" class="uk-margin-large-top"></div>
        <stickyshowoffer></stickyshowoffer>
    </div>

    <script type="text/javascript">
      var v = new Vue({
            el: '#app',
            data: {
                show: false,
                headings: [{
                    id: 1,
                }],
                mainUrl:'http://localhost/proto/prototype/admin2/index.php/C_showoffer/',
                dets:[],
            },
            components: {
                'navbar': httpVueLoader('<?php echo base_url("components/global/navbar.vue") ?>'),
                'bannershowoffer': httpVueLoader('<?php echo base_url("components/showoffer/bannershowoffer.vue") ?>'),
                'labelshowoffer': httpVueLoader('<?php echo base_url("components/showoffer/labelshowoffer.vue") ?>'),
                'judulshowoffer': httpVueLoader('<?php echo base_url("components/showoffer/judulshowoffer.vue") ?>'),
                'isiinformasi': httpVueLoader('<?php echo base_url("components/showoffer/isiinformasi.vue") ?>'),
                'accordionshowoffer': httpVueLoader('<?php echo base_url("components/showoffer/accordionshowoffer.vue") ?>'),
                'stickyshowoffer': httpVueLoader('<?php echo base_url("components/showoffer/stickyshowoffer.vue") ?>'),
            }
            ,
            created(){
                this.tampil();
            },
            methods:{
                tampil(){
                    axios
                        .get(this.mainUrl+'tampil')
                        .then(response => (this.dets = response.data.detail))
                }
            }
        });
    </script>