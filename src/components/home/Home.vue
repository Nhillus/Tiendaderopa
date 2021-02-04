<template>
	<div class="off-canvas-wrap">
		<div class="inner-wrap">
			<div class="content">
				<div class="std">
					<div class="wrapper">
						<div class="channel-filters">
							<div class="filter_default">
								<span class="filter_default_label">Alle laufenden Verkäufe sortiert nach :</span>
								<select class="filter_default_select dd-select select-xl">
									<option value>Empfehlungen</option>
									<option value>Schnelle Lieferung</option>
									<option value>Bald zuende</option>
								</select>
							</div>
						</div>

						<div class="wrapper-current-sales">
							<div class="current-sales sales">
								<ul class="container-sales small-block-grid-1 medium-block-grid-2">
									<li v-for="i in 10" :key="i">
										<article class="sale standard-sale phantom-container timer-hidden">
											<a href="#" class="teaser seen">
												<div class="sale-media media-552x224">
													<figure>
														<img src="https://cosmos2.deindeal.ch/api/img?p=sales/2020/5/{0BEBEF68-8866-41C1-9A9A-658F843A17F5}/60532-VENTE_IMG_V2_DD_DE&v=1610530352" alt="">
													</figure>

													<div class="sale-infos">
														<div class="row nomarge">
															<div class="sale-date columns small-6">
																<span class="sale-end_date"></span>
															</div>

															<div class="small-6 columns a-right">
																<div class="sale-content-expedition">
																	<span>Schnelle Lieferung</span>
																</div>
															</div>
														</div>
													</div>
												</div>

												<footer class="sale-footer">
													<div>
														<h2 class="sale_title">Canada Goose</h2>
													</div>
													<div class="a-right">
														<span class="sale-content-price">
															<span class="small">Bis</span>
															<span class="sale-percent">-30%</span>
														</span>
													</div>
												</footer>
											</a>
										</article>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<footer class="footer clearfix">
				<div class="wrapper">
					<div class="row">
						<div class="small-12 medium-3 columns">
							<h5>Deine Stadt</h5>
							<ul>
								<li><a href="#">Schönheit & Wellness</a></li>
								<li><a href="#">Restaurant</a></li>
								<li><a href="#">Einzelhandel</a></li>
								<li><a href="#">medizinische</a></li>
								<li><a href="#">Reinigung & Service</a></li>
								<li><a href="#">Bildung</a></li>
								<li><a href="#">Sport & Fitness</a></li>
								<li><a href="#">Abenteuer und Freizeit</a></li>
							</ul>
						</div>
						<div class="small-12 medium-3 columns">
							<h5>TRAVEL</h5>
							<ul>
								<li><a href="#">Ferien in den Bergen</a></li>
								<li><a href="#">Abenteuer Aufenthalt</a></li>
								<li><a href="#">Wellness & Spa</a></li>
								<li><a href="#">Stadtrundfahrt</a></li>
								<li><a href="#">Winterferien</a></li>
								<li><a href="#">kulinarische Reise</a></li>
								<li><a href="#">Strandurlaub</a></li>
							</ul>
						</div>
						<div class="small-12 medium-3 columns">
							<h5>Produkte</h5>
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">Mode</a></li>
								<li><a href="#">FOOD DELIVERY</a></li>
								<li><a href="#">KOSMETIK</a></li>
								<li><a href="#">MASKEN</a></li>
								<li><a href="#">Home & Living</a></li>
								<li><a href="#">Sport</a></li>
								<li><a href="#">WINE & GOURMET</a></li>
								<li><a href="#">KIDS</a></li>
							</ul>
						</div>

						<div class="small-12 medium-3 columns">
							<div class="a-center apptodate">
								<h5>Bleib immer App-to-Date!</h5>
								<p>Jetzt die DeinDeal-App herunterladen und auch unterwegs nie wieder einen Deal verpassen!</p>
								<div class="columns small-6 medium-12 large-6">
									<a href="#" class="button button-appstore">Aus dem App Store herunterladen</a>
								</div>
								<div class="columns small-6 medium-12 large-6">
									<a href="#" class="button button-googleplay">Jetzt bei Google play</a>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="small-12 medium-3 columns">
							<h5>Deindeal</h5>
							<ul>
								<li><a href="#">Wie funktioniert DeinDeal?</a></li>
								<li><a href="#">Stellen</a></li>
							</ul>
						</div>


						<div class="small-12 medium-3 columns">
							<h5>Hilfe & Kontakt</h5>
							<ul>
								<li><a href="#">Häufig gestellte Fragen</a></li>
								<li><a href="#">Partner & Zulieferer</a></li>
								<li class="footer-contact">
									<span class="contact-tel">0848 500 501</span>
									<span></span>
									<span>(Lokaltarif)</span>
								</li>
							</ul>
						</div>

						<div class="small-12 medium-3 columns"></div>


						<div class="small-12 medium-3 columns a-center">
							<div class="footer-social-icons">
								<h5>Folge DeinDeal</h5>
								<a href="#" class="dd-icon-facebook"></a>
							</div>

							<div class="footer-partner-area">
								<h5>Partner</h5>
								<p>Weitere Informationen über die Vorteile einer Partnerschaft finden Sie </p>
								<a href="#" class="button button-dark button-md">Partner werden</a>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="small-12 medium-6 columns">
							<ul class="terms">
								<li><a href="https://www.deindeal.ch/de/terms-and-conditions" data-link-code="terms-and-conditions">Allgemeine Geschäftsbedingungen</a></li>
								<li><a href="https://www.deindeal.ch/de/privacy" data-link-code="privacy">Datenschutzbestimmungen</a></li>
								<li><a href="https://www.deindeal.ch/de/impressum" data-link-code="impressum">Impressum</a></li>
							</ul>
						</div>
						<div class="small-12 medium-6 columns payment-container">
							<span class="payment"></span>
						</div>
					</div>
				</div>

				<div class="footer-bottom">
					<div class="copyright-container a-center">
						<span class="copyright">©2021 Deindeal AG</span>
					</div>
				</div>
			</footer>
		</div>		
	</div>
</template>

<script>
export default {
	name: "Home"
};
</script>

<style lang="scss" scoped></style>
