<?php
echo '<div id="globalNavContainer">
			<div id="globalNav">
				<div id="btn">
					<img id="ring" src="../assets/img/global/nav_ring.png" alt="" />
					<img id="menu" src="../assets/img/global/nav_off.png" alt="Site Menu" />
				</div>
				<div id="items">
					<img id="pinkBG" src="../assets/img/global/nav_bg_pink.png" alt="" />
					<div id="new" class="globalNavItem">' . $newNavText . '</div>
					<div id="featured" class="globalNavItem">' . $cardsNavText . '</div>
					<div id="strategy" class="globalNavItem">' . $strategyNavText . '</div>
					<div id="products" class="globalNavItem">' . $productsNavText . '</div>
					<div id="more" class="globalNavItem">' . $moreNavText . '</div>
				</div>
			</div>
		</div>


		<div id="globalChromeTop">
			<div id="blinkyRight"></div>
			<div id="blinkyLeft"></div>
			<div id="pageName">' . $curPageDisplayName . '</div>
			<div id="globalLogo">
				<a href="index.php"><img src="../assets/img/global/breakpoint.png" alt=' . $siteName . ' /></a>
			</div>
		</div>

		<div id="globalChromeBottom">
		</div>';

?>