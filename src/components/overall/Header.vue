<template>
	<header class="header">
		<div class="header_background"></div>
		<div class="header_login-block hide-for-small-only">
			<div class="header_login-block_inner wrapper">
				<ul class="header_login-block_elements columns large-6 hide-for-medium-only">
					<li class="home-delivery">Bis zu 70% günstiger *</li>
					<li>Lokaltarif 0848 500 501</li>
				</ul>

				<div class="header_menu columns large-4 medium-6">
					<div class="header_menu_account">
						<a href="#" class="signin hide-for-small-only">Anmelden</a>
					</div>

					<div class="header_menu_languages">
						<div class="language-switcher">
							<button type="button" class="language-switcher__button flag-de">Deutsch</button>
							<ul class="language-switcher__list">
								<li class="language-switcher__item switch-languages">
									<a href="#" class="language-switcher__flag flag-fr">Français</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="sticky navigation_wrapper">
			<div class="navigation_sub-nav">
				<ul class="sub-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Mode</a></li>
					<li><a href="#">FOOD DELIVERY</a></li>
					<li><a href="#">KOSMETIK</a></li>
					<li><a href="#">MASKEN</a></li>
					<li><a href="#">Home & Living</a></li>
					<li><a href="#">Sport</a></li>
					<li><a href="#">WINE & GOURMET</a></li>
					<li><a href="#">KIDS</a></li>
					<li><a href="#">Deine Stadt</a></li>
					<li><a href="#">TRAVEL</a></li>
				</ul>
			</div>
		</div>
	</header>
</template>
<script>
export default {
	name: "Header"
};
</script>
<style lang="scss" scoped></style>
