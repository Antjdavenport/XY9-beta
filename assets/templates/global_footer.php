<?php
echo '

<div id="globalFooter">
<div id="globalChromeBottomSticky"></div>
			<!-- <div id="globalFooterChrome"></div> -->
			<div id="globalFooterBlack">

				<div id="globalFooterContent">
					




					<div id="col1" class="col">
						<!-- ESRB PRIVACY CERTIFIED LOGO -->
						<a href="http://www.esrb.org/confirm/pokemon-confirmation.jsp" class="external">
							<img src="' . $esrbLogoURL . '" alt="ESRB" />
						</a>
					</div>

					<div id="col2" class="col">
						<img src="../assets/img/global/pokemon_company_logo.png" alt="The Pokemon Company" />
						<br />
						<span class="copyright">&copy; 2015 Pokémon/Nintendo</span>
						<br /><br />

						<!-- PRIVACY POLICY -->
						<a href="' . $privacyURL . '">' . $privacyText . '</a>
					</div>

					<div id="col3" class="col">
						<!-- LANGUAGE SELECTION DROPDOWN -->
						' . $langSelect . '<br />
						<select id="languageSelect">
							<option value="en-gb"'; 
							if ($siteLanguage == 'en-gb') { echo ' selected'; };
							echo '>' . $engUK . '</option>
							<option value="en-us"'; 
							if ($siteLanguage == 'en-us') { echo ' selected'; };
							echo '>' . $engUS . '</option>
							<option value="fr-fr"'; 
							if ($siteLanguage == 'fr-fr') { echo ' selected'; };
							echo '>' . $french . '</option>
							<option value="de-de"'; 
							if ($siteLanguage == 'de-de') { echo ' selected'; };
							echo '>' . $german . '</option>
							<option value="it-it"'; 
							if ($siteLanguage == 'it-it') { echo ' selected'; };
							echo '>' . $italian . '</option>
							<option value="es-es"'; 
							if ($siteLanguage == 'es-es') { echo ' selected'; };
							echo '>' . $spanish . '</option>
						</select>
					</div>

					<div id="col4" class="col">
						<!-- SHARING LINKS -->
						' . $shareText . '<br />';
						$currentPage = "http://xy9.pokemontcgxy.com$_SERVER[REQUEST_URI]";
						echo '
						<a href="https://www.facebook.com/sharer/sharer.php?u=' . $currentPage . '" target="_blank" class="external">
							<img src="../assets/img/global/social_fb.png" alt="Facebook" />
						</a>
						<a href="https://twitter.com/share?text=' . $twitterText . '&hashtags=' . $twitterHashtags . '&url=http://xy9.pokemontcgxy.com" target="_blank" class="external">
							<img src="../assets/img/global/social_tw.png" height="29" alt="Twitter" />
						</a>
						<a href="https://plus.google.com/share?url=' . $currentPage . '" target="_blank" class="external">
							<img src="../assets/img/global/social_gp.png" height="29" alt="Google+" />
						</a>
						<a href="http://www.reddit.com/submit?url=' . $currentPage . '&title=' . $redditTitle . '" target="_blank" class="external">
							<img src="../assets/img/global/social_rd.png" height="29" alt="Reddit" />
						</a>
						<a href="http://www.tumblr.com/share/link?url' . $currentPage . '&name=' . $tumblrTitle . '&description=' . $tumblrDesc . '" target="_blank" class="external">
							<img src="../assets/img/global/social_tm.png" height="29" alt="Tumblr" />
						</a>

						
						<br /><br />


						<!-- SOCIAL PAGES -->
						' . $findUs . '<br />
						<a href="http://facebook.com/pokemon" class="external"><img src="../assets/img/global/social_fb.png" alt="Facebook" /></a>
						<a href="' . $twitterURL . '" class="external"><img src="../assets/img/global/social_tw.png" height="29" alt="Twitter" /></a>
						<a href="' . $youtubeURL . '" class="external"><img src="../assets/img/global/social_yt.png" height="29" alt="YouTube" /></a>
					</div>



				</div>
			</div>
		</div> <!-- end of global footer -->

		
<script>
$(function () {
$(".pokemon-gus-container").GlobalUtilityStrip();
});
</script>';
?>