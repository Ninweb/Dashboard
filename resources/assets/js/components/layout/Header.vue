<template>
	<div class="head">
		<div class="row align-items-center">
			<div class="col-md-4 menu-btn">
				<i class="fas fa-times"></i>
				<i class="fas fa-bars"></i>
			</div>

			<div class="col-md-4 logo">
				<router-link to="/"><img src="../../../images/logo-ninweb.png"></router-link>					
			</div>

			<div class="col-md-4 box">
				
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		name: 'app-header'
	}
</script>

<style scoped>
	.head {
		background: #222222;
		color: white;
		width: 100%;
	}

	.row {
		padding: 0 20px;
		width: 100%;
	}

	.logo {
		text-align: center;
	}
</style>
