<body>
    <div id="app" class="uk-container-expand">
        <navbar></navbar>
        <bannershowoffer></bannershowoffer>
        <div class="uk-container uk-margin-small-top">
                <labelshowoffer></labelshowoffer>
                <judulshowoffer></judulshowoffer>
        </div>
        
        <div class="uk-container uk-margin-small-top">
                
            <div class="uk-margin-small-top uk-margin-small-top uk-margin-small-top">
                <h6 class="uk-text-bold uk-text uk-margin-remove-bottom">DESKRIPSI SINGKAT</h6>
            </div>
            <hr class="uk-margin-small-top uk-margin-small-bottom">
            <isiinformasi></isiinformasi>
            <accordionshowoffer></accordionshowoffer>
            <div id="end" class="uk-margin-large-top"></div>

        </div>
        <div id="end" class="uk-margin-large-top"></div>
        <div id="end" class="uk-margin-large-top"></div>
        <stickyshowoffer></stickyshowoffer>
    </div>

    <script type="text/javascript">
        new Vue({
            el: '#app',
            data: {
                show: false,
                offers: [{
                    id: 1,
                }]
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
        });
    </script>