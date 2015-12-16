<?php
echo '<div id="bgHero">
			<img id="hero" src="../assets/img/home/page_bg.jpg" alt="" />
			<img id="blast1" class="loopingAnim" src="../assets/img/home/page_bg_shout.png" alt="" />
			<img id="rock1" class="loopingAnim" src="../assets/img/home/page_bg_rock1.png" alt="" />
			<img id="rock2" class="loopingAnim" src="../assets/img/home/page_bg_rock2.png" alt="" />
			<img id="rock3" class="loopingAnim" src="../assets/img/home/page_bg_rock3.png" alt="" />
			<img id="rock4" class="loopingAnim" src="../assets/img/home/page_bg_rock4.png" alt="" />
			<img id="rock5" class="loopingAnim" src="../assets/img/home/page_bg_rock5.png" alt="" />
			<img id="rock6" class="loopingAnim" src="../assets/img/home/page_bg_rock6.png" alt="" />
			
			<img id="beam1" src="../assets/img/home/beam1.png">
			<img id="beam2" src="../assets/img/home/beam2.png">
			<img id="beam3" src="../assets/img/home/beam3.png"
			<img id="beam4" src="../assets/img/home/beam4.png">
			<img id="beam5" src="../assets/img/home/beam5.png">
			<img id="beam6" src="../assets/img/home/beam6.png">

		</div>

		<div id="machines">
			<div id="globalNavPlate">
				<img src="../assets/img/global/nav_plate.png" alt="" />
			</div>
			<div id="globalNavBeam">
				<img src="../assets/img/global/nav_beam.png" alt="" />
			</div>
			<div id="globalNavArm">
			</div>
		</div>';

		include "../assets/templates/global_nav.php";

		echo '<div id="content">

			<div id="homeCallouts">
				<a href="new.php">
				<div id="decks">
					<div id="flare" class="loopingAnim">
						<img src="../assets/img/global/flare.png" alt="" />
					</div>
					<div id="burningSparkLogo">
						<img src="../assets/img/global/deck_bs_en-us.png" alt="" />
					</div>
					<div id="themePacksCopy">
						<h2>' . $home_decks_themePacks . '</h2>
					</div>
					<div id="nightStrikerLogo">
						<img src="../assets/img/global/deck_ns_en-us.png" alt="" />
					</div>
					<div id="readMoreBtn">
						' . $home_decks_readMore . '
						<div class="sheen"></div>
					</div>
				</div>
				</a>
				<a href="products.php">
				<div id="unbox">
					<div id="pyramid" class="pyramid" data-scrollPercent=".2">
						<img src="../assets/img/global/pyramid.gif" alt="" />
					</div>
					<div id="unboxProduct">
						<img src="../assets/img/home/unbox_product.png" alt="" />
					</div>
					<div id="unboxCopy" class="whiteOutline">
						' . $home_unbox_header . '
					</div>
					<div id="watchNowBtn">
						' . $home_unbox_watch . '
						<div class="sheen"></div>
					</div>
				</div>
				</a>
				<a href="strategy.php">
				<div id="strategy1">
					<div id="flare" class="loopingAnim">
						<img src="../assets/img/global/flare.png" alt="" />
					</div>
					<div id="strategyCards">
						<img src="../assets/img/home/strategy_cards.png" alt="" />
					</div>
					<div id="strategyCopy" class="whiteOutline">
						' . $home_strategy_header . '
					</div>
					<div id="readNowBtn">
						' . $home_strategy_watch . '
						<div class="sheen"></div>
					</div>
				</div>
				</a>
			</div>';
			
		include "../assets/templates/global_callouts_external.php";

			
		echo '</div> <!-- end of content -->';
			
		include "../assets/templates/global_footer.php";
?>