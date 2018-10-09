<body>
    <div id="app" class="uk-container-expand">
        <navbar></navbar>
        <hr class="uk-margin-remove-top uk-margin-medium-bottom ">
          <div class="uk-text-center">
                <h3 class="uk-text-bold">Daftar Penawaran Spesial</h3>
         </div>
         <hr class="uk-margin-remove-top uk-margin-small-bottom">
            <cardlist></cardlist>
        
         
    </div>
    <script type="text/javascript">
        new Vue({
            el: '#app',
            data: {
                show: false,
            },
            components: {
                 'navbar': httpVueLoader('<?php echo base_url("components/global/navbar.vue") ?>'),
                 'cardlist': httpVueLoader('<?php echo base_url("components/listbycategory/cardlist.vue") ?>'),
            }
        });
    </script>