<body>
    <div id="app" class="uk-container-expand uk-width-1-1@m">
        <navbar></navbar>
        <bannershowoffer :sub_titles="main_titles" :sub_base_url="base_url"></bannershowoffer>
        
        <div class="uk-width-1-1@s uk-width-1-1@m " >
        
            <div class="uk-container uk-margin-small-top uk-width-1-2@m">
                    <labelshowoffer></labelshowoffer>
                    <judulshowoffer :sub_titles="main_titles" :sub_base_url="base_url"></judulshowoffer>
            </div>
        
            <div class="uk-container uk-margin-small-top uk-width-1-2@m">
                    
                <div class="uk-margin-small-top uk-margin-small-top uk-margin-small-top">
                    <h6 class="uk-text-bold uk-text uk-margin-remove-bottom">DESKRIPSI SINGKAT</h6>
                </div>
                <hr class="uk-margin-small-top uk-margin-small-bottom">
                <isiinformasi :sub_descs="main_descs" :deskripsi="main_descs.deskripsi"></isiinformasi>
                <accordionshowoffer :fasilitas="main_descs.fasilitas" :highlight="main_descs.highlight" :kebijakan="main_descs.kebijakan"></accordionshowoffer>
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
                main_titles:[],
                main_url:'http://random.host:8888/magang/codeigniter/admin2/index.php/',
                base_url:'http://random.host:8888/magang/codeigniter/admin2/',
                main_descs:[]            
            },
            components: {
                'navbar': httpVueLoader('<?php echo base_url("components/global/navbar.vue") ?>'),
                'bannershowoffer': httpVueLoader('<?php echo base_url("components/showoffer/bannershowoffer.vue") ?>'),
                'labelshowoffer': httpVueLoader('<?php echo base_url("components/showoffer/labelshowoffer.vue") ?>'),
                'judulshowoffer': httpVueLoader('<?php echo base_url("components/showoffer/judulshowoffer.vue") ?>'),
                'isiinformasi': httpVueLoader('<?php echo base_url("components/showoffer/isiinformasi.vue") ?>'),
                'accordionshowoffer': httpVueLoader('<?php echo base_url("components/showoffer/accordionshowoffer.vue") ?>'),
                'stickyshowoffer': httpVueLoader('<?php echo base_url("components/showoffer/stickyshowoffer.vue") ?>'),
            },
            created(){
                this.tampil();
                this.detail();
            },
            methods:{
                tampil(){
                    axios
                        .get(this.main_url+'C_showoffer/showDetail')
                        .then(response => (this.main_titles = response.data.title))
                },
                detail(){
                    axios
                        .get(this.main_url+'C_showoffer/showDetailProduct')
                        .then(response => (this.main_descs = response.data))
                }
            }
        });
    </script>