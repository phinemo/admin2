<script src="https://unpkg.com/vue"></script>
<!-- CDN JS Vue Router -->
<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
<!-- CDN JS 'Vue Extension Axios' -->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<!-- CDN JS 'Vue Extension Loader' -->
<script src="https://unpkg.com/http-vue-loader"></script>
<div id="app">
	<h1>Hello from main vue apps</h1>
	<!-- <navbar></navbar> -->
	<router-link to="/first">Go to first screen</router-link>
	<router-link to="/second">Go to second screen</router-link>
	<router-link to="/navbar">this is navbar</router-link>
	<router-view></router-view>
</div>
<script src="<?php echo base_url('components/main.js');?>"></script>
