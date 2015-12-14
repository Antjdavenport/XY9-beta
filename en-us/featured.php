<!DOCTYPE HTML>
<html lang="en-us">
    <head>
		<!-- LANGUAGE FILES -->
		<?php 
			include "localization.php";
			$curPageDisplayName = $featured_pageDisplayName;
		?>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<title><?php echo $featuredPageTitle; ?></title>		

		<meta property="og:type"      	content="website"/>
		<meta property="og:title"     	content=<?php echo $featuredPageOGTitle; ?>/>
		<meta property="og:site_name" 	content=<?php echo $siteName; ?>/>
		<meta property="og:description" content=<?php echo $featuredPageDescription; ?>/>
		<meta property="og:image" content=<?php echo $siteImage; ?>/>

		<link rel="shortcut icon" href=<?php echo $shortcutIcon; ?> />

		<meta name="robots"           content="index,follow"/>
		<meta name="description"      content=<?php echo $featuredPageDescription; ?>/>


		<!-- STYLES -->
		<link type="text/css" rel="stylesheet" href="../assets/css/global.css" />
		<link type="text/css" rel="stylesheet" href="../assets/css/featured.css" />

		<!-- SCRIPTS -->
		<script type="text/javascript" src="../assets/js/jquery-1.11.3.min.js"></script>
		<script src="../assets/js/greensock/TweenMax.min.js"></script>
		<script type="text/javascript" src="../assets/js/AnimatedSprite.js"></script>
		<script type="text/javascript" src="../assets/js/global.js"></script>
		<script type="text/javascript" src="../assets/js/featured.js"></script>

        <!-- GUS -->
		<link rel="stylesheet" href="//assets.pokemon.com/static2/_ui/css/gus.css" media="all" type="text/css"/>
        <script type="text/javascript" src="//assets.pokemon.com/static2/_ui/js/vendor/jquery-1.10.1.js"></script>
		<script type="text/javascript" src="//assets.pokemon.com/static2/_ui/js/gus.js"></script>

	</head>

	<body>

		<?php include "../assets/templates/global_pokemon_nav.php"; ?>
		<?php include "../assets/templates/global_external_link_warning.php"; ?>

		<div id="bgHero">
			<img id="hero" src="../assets/img/featured/page_bg1.png" alt="" />
			<img id="hero2" src="../assets/img/featured/page_bg2.png" alt="" />
			<img id="hero3" src="../assets/img/featured/page_bg3.png" alt="" />
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
		</div>

		<div id="arms">
			<div id="armRight">
				<img src="../assets/img/featured/machine_arm_right.png" alt="" />
			</div>

			<div id="armLeft">
				<img src="../assets/img/featured/machine_arm_left.png" alt="" />
			</div>
		</div>

		<?php include "../assets/templates/global_nav.php"; ?>
		

		<div id="container">
		<div id="content">
			<div id="cardContent">
				<div id="smokey">
					<img src="../assets/img/featured/smokey.png" alt="" />
				</div>

				<div id="border">
					<img id="horizontal" src="../assets/img/featured/cardBorderH.png" alt="" />
					<img id="vertical" src="../assets/img/featured/cardBorderV.png" alt="" />
				</div>

				<div id="cards">
					<div class="spiralCard"><img src="" alt="" /></div>
					<div class="spiralCard"><img src="" alt="" /></div>
					<div class="spiralCard"><img src="" alt="" /></div>
					<div class="spiralCard"><img src="" alt="" /></div>
					<div class="spiralCard"><img src="" alt="" /></div>
					<div class="spiralCard"><img src="" alt="" /></div>
					<div class="spiralCard"><img src="" alt="" /></div>
				</div>

				<div id="frontCard"><img src="" alt=""></div>

				<div id="cardNav">
					<img id="right" src="../assets/img/featured/arrow_right.png" alt="" />
					<img id="left" src="../assets/img/featured/arrow_left.png" alt="" />
				</div>

				<div id="cardInfoBox">
					<div id="top">
						<div id="header" class="blackOutline"></div>
						<div id="blinky"><img src="../assets/img/global/blinky.png" alt="" /></div>
						<img src="../assets/img/global/textFrame_top.png" alt="" />
					</div>
					<div id="copy"></div>
					<div id="bottom">
						<img src="../assets/img/global/textFrame_bottom.png" alt="" />
					</div>
				</div>
			</div>
			
			
			<?php include "../assets/templates/global_callouts_external.php" ?>


		</div> <!-- end of content -->
		</div> <!-- END OF CONTAINER -->

		<div id="cardInfo">
			<div id="allNightParty">
				<span id="name">All-Night Party</span>
				<span id="desc">There's no time for napping when All-Night Party (96/122) is in play! This Stadium card lets you wake up your sleeping Active Pokémon, and if you do, you'll also heal 30 damage from it so you can keep battling until dawn!</span>
			</div>
			<div id="darkrai">
				<span id="name">Darkrai-<span class="italic">EX</span></span>
				<span id="desc">Turn the lights out on your opponent with Darkrai-<span class="italic">EX</span> (118/122) and its two powerful attacks. First, Dark Pulse lets you deliver huge blows by tapping into the Darkness Energy among all your Pokémon. Then, catch your opponent napping with Dark Head, which does 160 damage if your opponent's Active Pokémon is Asleep!</span>
			</div>
			<div id="emboar">
				<span id="name">Emboar-<span class="italic">EX</span></span>
				<span id="desc">Sear your opponents with Emboar-<span class="italic">EX</span> (14/122) and its Strong Flare attack. At 150 damage, Strong Flare has the potential to knock out a <span class="italic">lot</span> of Pokémon in one shot. And with 150 HP, few Pokémon will likely be able to return the favor.</span>
			</div>
			<div id="espeon">
				<span id="name">Espeon-<span class="italic">EX</span></span>
				<span id="desc">Confound your opponent with Espeon-<span class="italic">EX</span> (117/122) and its Miraculous Shine attack! This attack devolves each of your opponent's Pokémon, returning the highest Stage Evolution back to his or her hand. This is particularly effective against Mega Evolution Pokémon&mdash;without a Spirit Link, re-Evolving these Pokémon will end your opponent's turn.</span>
			</div>
			<div id="fightingFuryBelt">
				<span id="name">Fighting Fury Belt</span>
				<span id="desc">Pump up your Basic Pokémon with the Fighting Fury Belt (99/122) Pokémon Tool card. It both jacks up your Pokémon's HP and the amount of damage its attacks will do. Remember that Pokémon-<span class="italic">EX</span> are also Basic Pokémon, so Fighting Fury Belt will work on them, too!</span>
			</div>
			<div id="golduck">
				<span id="name">Golduck BREAK</span>
				<span id="desc">Golduck BREAK (18/122) doesn't add any attacks to the Golduck it is played on, but it adds an Ability that could useful in any deck. Hyper Transfer lets you move basic Energy around on your Pokémon as much as you'd like during your turn. With this flexibility you'll be able to get and of your Pokémon ready to attack much quicker.</span>
			</div>
			<div id="greninja">
				<span id="name">Greninja BREAK</span>
				<span id="desc">Slice your opponents with the awesome power of Greninja BREAK's (41/122) Giant Water Shuriken Ability. Just by discarding a Water Energy from your hand, you can drop six damage counters on one of your opponent's Pokémon. Even if that was an attack, it'd be pretty good; as an Ability it's out of this world.</span>
			</div>
			<div id="gyrados">
				<span id="name">Gyarados-<span class="italic">EX</span></span>
				<span id="desc">Gyarados-<span class="italic">EX</span> (114/122) can rapidly power itself up with Energy with its Stormy Seas attack (based on a few lucky coin flips). Then, once it has the Energy Needed, it can unleash its 130-damage Splash Burn attack. Splash Burn also dings your own Benched Pokémon a little; be ready to heal them after using Splash Burn a few times.</span>
			</div>
			<div id="hoOh">
				<span id="name">Ho-Oh-<span class="italic">EX</span></span>
				<span id="desc">Ho-Oh-<span class="italic">EX</span> (121/122) shines bright in the Pokémon TCG with its Powerful Elemental Feather attack. It's tough to use, requiring a Grass, Water, and Lightning Energy, but the 130 damage plus 30 more damage to an opponent's Benched Pokémon is worth the effort. And when Ho-Oh-<span class="italic">EX</span> has begun to wear down, attach a Fire Energy to it to let it use its Purifying Fire Ability, healing 50 damage.</span>
			</div>
			<div id="hypno">
				<span id="name">Hypno</span>
				<span id="desc">Tuck in both Active Pokémon with Hypno's (51/122) Goodnight, Babies Ability, leaving both Pokémon Asleep. Take advantage of the quiet time to set up your next moves.</span>
			</div>
			<div id="luxray">
				<span id="name">Luxray BREAK</span>
				<span id="desc">Luxray BREAK (47/122) is always a just a couple of coin tosses away from knocking out virtually any Pokémon in one hit. Its Wild Fury attack starts at 130 damage, then adds 40 for every heads you flip until you get tails. That kind of potential makes Luxray BREAK a Pokémon worth building a deck around.</span>
			</div>
			<div id="manaphy">
				<span id="name">Manaphy-<span class="italic">EX</span></span>
				<span id="desc">Manaphy-<span class="italic">EX</span> (116/122) is a must for any deck that features Water-type Pokémon. Its Aqua Tube attack makes any Pokémon with Water Energy attached to it to have no Retreat Cost, and its Mineral Pump attack can heal all of your Benched Pokémon in addition to doing 60 damage. Support, healing, and damage—Manaphy-<span class="italic">EX</span> can do it all.</span>
			</div>
			<div id="megaGyrados">
				<span id="name">Mega Gyarados-<span class="italic">EX</span></span>
				<span id="desc">All the Water Energy you've attached to Gyarados-<span class="italic">EX</span> get put to use once it Mega Evolves into Mega Gyarados-<span class="italic">EX</span> (115/122). Its Blast Geyser attack can do massive extra damage for each Water Energy attached to it! And at 240 HP, Mega Gyarados-<span class="italic">EX</span> can withstand even the stormiest of situations.</span>
			</div>
			<div id="meganium">
				<span id="name">Meganium</span>
				<span id="desc">The Grass-type Meganium (3/122) is at its best when it has already taken something of a beating in battle. Its Overgrow Ability makes Meganium's attack do more damage when it is low on HP, and its Green Force attack will heal Meganium equal to the damage the attack does. With 150 HP, Meganium can already take some substantial hits before getting knocked out, and this synergy between its Ability and attack make it even more difficult.</span>
			</div>
			<div id="megaScizor">
				<span id="name">Mega Scizor-<span class="italic">EX</span></span>
				<span id="desc">You won't get much more damage out of Mega Scizor-<span class="italic">EX</span> (120/122) than you did out of Scizor-<span class="italic">EX</span>, but its Iron Crusher attack has some extra tricks to help you win. When you use it, not only do you deliver 120 damage, you can also discard a Special Energy off your target or a Stadium card in play. Those extra tactical advantages can quickly turn the tide of battle in your favor.</span>
			</div>
			<div id="mistysDetermination">
				<span id="name">Misty's Determination</span>
				<span id="desc">Misty's Determination (104/122) gives you a pretty good shot at getting a card you need, letting you choose one card from the top eight card of your deck. The penalty of discarding a card from your hand is hardly an issue with so many strong ways to use and retrieve cards in your discard pile right now.</span>
			</div>
			<div id="palkia">
				<span id="name">Palkia-<span class="italic">EX</span></span>
				<span id="desc">Palkia-<span class="italic">EX</span>'s (31/122) Aqua Turbo is the kind of attack that top players seek out. Not only does it deliver a decent 40 damage, it also helps get Energy into play quickly. And once Palkia-<span class="italic">EX</span> is fully charged, it can switch to a more offensive role with its great (but expensive) Pearl Hurricane attack.</span>
			</div>
			<div id="puzzleOfTime">
				<span id="name">Puzzle of Time</span>
				<span id="desc">The Puzzle of Time (109/122) Item card is one of the more curious cards to come to Pokémon TCG. Its behavior changes depending on whether you play one or two of them at a time. Play one, and you get to reorder the top three cards in your hand. Play two and you get to pull two cards from your discard pile into your hand. Depending on the situation, Puzzle of Time gives you multiple possibilities to consider.</span>
			</div>
			<div id="raticate">
				<span id="name">Raticate BREAK</span>
				<span id="desc">With Raticate BREAK (89/122) you can quickly cut even the biggest Pokémon down to size. Its Super Fang attack leaves its target with only 10 HP, making it easy to knock down on the next turn (or right away if the Pokémon is Poisoned or Burned).</span>
			</div>
			<div id="reverseValley">
				<span id="name">Reverse Valley</span>
				<span id="desc">Choose your destiny with the two-sided Reverse Valley (110/122) Stadium card. Who will get the benefit of harder attacks from Darkness-type Pokémon, and who will get any protection from Metal-type Pokémon? You get to decide when you put Reverse Valley into play.</span>
			</div>
			<div id="scizor">
				<span id="name">Scizor-<span class="italic">EX</span></span>
				<span id="desc">Scizor-<span class="italic">EX</span> (119/122) is great for quick strikes early in battle, with two attacks that require very little Energy. For one Metal Energy, Steel Wing pips your opponent for 20 damage, but also reduces return damage by 20 on the next turn. Then for only two Metal Energy, Gale Thrust can do upwards of 110 damage. That kind of fast power is just what you need to get going at the start of a match.</span>
			</div>
			<div id="slowbro">
				<span id="name">Slowbro</span>
				<span id="desc">Edging closer to victory, but you're not sure how to seal the win? Slowbro (20/122) can help finish games in an instant. When you're down to one Prize card left, use the Walk-Off Homer attack, shake hands, and walk away the victor.</span>
			</div>
			<div id="splashEnergy">
				<span id="name">Splash Energy</span>
				<span id="desc">It's Water-type Pokémon's turn to get the benefit of Special Energy. If a Water-type Pokémon is Knocked Out while a Splash Energy (113/122) is attached to it, the Pokémon goes back into your hand instead of the discard pile, ready to be played again.</span>
			</div>
			<div id="togekiss">
				<span id="name">Togekiss-<span class="italic">EX</span></span>
				<span id="desc">Keep the Energy flowing with Togekiss-<span class="italic">EX</span> (83/122) and its Mighty Wind attack. It lets you attach an Energy card from your hand onto one of your Benched Pokémon. It doesn't have to be a Basic Energy, either, which could be a huge advantage in quickly preparing a Pokémon for attack.</span>
			</div>
			<div id="trevenant">
				<span id="name">Trevenant BREAK</span>
				<span id="desc">Trevenant BREAK (66/122) adds a terrifying attack to the Pokémon it Evolves from. For just 1 Psychic and 1 Colorless Energy, Silent Fear lets you put three damage counters on each of your opponent's Pokémon. Trevenant BREAK also has a solid 160 HP, putting up near the range of Pokémon-<span class="italic">EX</span>.</span>
			</div>
		</div>
		
			
		<?php include "../assets/templates/global_footer.php"; ?>

		
	</body>
</html>
