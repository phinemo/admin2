<body>
    <div id="app" class="uk-container-expand">
        <navbar></navbar>
        
        <div class="uk-container">
                <banner :banners="bisnis_pages" :sub_base_url="base_url"></banner>
                <pict :names="bisnis_pages" :sub_base_url="base_url" ></pict>
                <info :sub_titles="bisnis_pages" :number="main_descs.number" 
                :twitter="main_descs.twitter" :instagram="main_descs.instagram" :facebook="main_descs.facebook"
                 :sub_base_url="base_url"></info>  
        </div>
        
        <div class="uk-container uk-padding-small uk-padding-remove-right">
            <h4 class="uk-text-bold uk-heading-line"><span>Paket Populer</span></h4>
            <listamazing :sub_base_url="base_url"></listamazing>  
        </div>
        <div class="uk-container uk-padding-small uk-padding-remove-right">
            <h4 class="uk-text-bold uk-heading-line"><span>Best Seller</span></h4>
            <listamazing :sub_base_url="base_url"></listamazing>  
        </div>
        
    </div>
    <!-- End of App Vue -->

    <script type="text/javascript">
      var v = new Vue({
            el: '#app',
            data: {
                show: false,
                bisnis_pages:[],
                //main_url:'http://random.host:8888/magang/codeigniter/admin2/index.php/',
                //base_url:'http://random.host:8888/magang/codeigniter/admin2/',
                main_url:'http://localhost/proto/prototype/admin2/index.php/',
                base_url:'http://localhost/proto/prototype/admin2/',
                //main_url:'http://phinemo.com/merchant/index.php/',
                //base_url:'http://phinemo.com/merchant/',
                main_descs:[]
            },
            components: {
                'navbar': httpVueLoader('<?php echo base_url("components/global/navbar.vue") ?>'),
                'banner': httpVueLoader('<?php echo base_url("components/bisnispage/bannerbisnis.vue") ?>'),
                'pict': httpVueLoader('<?php echo base_url("components/bisnispage/picturepage.vue") ?>'),
                'info': httpVueLoader('<?php echo base_url("components/bisnispage/informasi.vue") ?>'),
                'slideshow': httpVueLoader('<?php echo base_url("components/homepage/slideshow.vue") ?>'),
                'listamazing': httpVueLoader('<?php echo base_url("components/homepage/listamazing.vue") ?>')
            },
            created(){
                this.tampil();
                this.detail();
            },
            methods:{
                tampil(){
                    axios
                        .get(this.main_url+'C_bisnispage/showDetail/<?php echo $operator ?>')
                        .then(response => (this.bisnis_pages = response.data.title))
                },
                detail(){
                    axios
                        .get(this.main_url+'C_bisnispage/showDetailProduct/<?php echo $operator ?>')
                        .then(response => (this.main_descs = response.data))
                }
            }
        });
    </script>
    <style>
     @import 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.16/css/uikit.min.css';
     /* @import 'css/main.css'; */
     /* @import 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'; */
    </style>