<template>

	<div class="">
		<div v-for="(sub_title, index) in sub_titles" :key="index">
			<h1 class="uk-text-bold uk-text-lead uk-margin-remove-bottom">{{sub_title.nama_produk}}</h1>
			<h5 class="uk-text-medium  uk-margin-remove-bottom uk-margin-remove-top" style="color:orange;">From {{sub_title.harga}}K
				IDR</h5>
			<!-- <i v-for="rating in detail.ratings" :key="rating" class="fa fa-star" aria-hidden="true"></i> -->
		</div>
	</div>

</template>

<script>
	module.exports = {
		props: {
			sub_titles: {
				type: Array,
				require: true
			},
			sub_base_url: {
				type: String,
				require: true
			},

		},

		data: function () {
			return {

			}
		}
	};

</script>
