<html>
	<head>
        <meta charset="utf-8">
        <title>Riven, the Exile</title>
        <link rel="stylesheet" type="text/css" href="riven.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>	
<!--  Login etc          -->
        <div id="top">
            <form action="index.php" method="post" name="login">
                <label>Username </label>				
                <input type="text" name="username"  id="username">            
                <label>Password </label>
                <input type="password" name="passwort">
            </form>  
			<img src="../img/logo_try.jpg">
        </div>
        <div id="main">
<!--  Header          -->
            <div id="header">

            </div>
<!--  General		   -->
			<div id="general">				
				<div id="desc">
					<div id="title">
						<img src="../img/abilities_riven/champion_icon.png" data-toggle="tooltip" title="Riven">
						<strong>Riven</strong><br/>
					</div>					
				    <div id="detail">
				        <ul>
							<li>Class: Fighter, Assassin</li>
							<li>Primary Stats: Attack damage, Cooldown reduction</li>
							<li>Position: Toplane, Jungle, Midlane</li>
				        </ul>
				    </div>
				</div>				
			</div>
<!--  Menubar          -->
            <div id="menu">
                <ul>
                    <li id="p" onclick="show_con1()"><span>Passive</span></a></li>
                    <li id="q" onclick="show_con2()"><span>Ability 1 [Q]</span></li>
                    <li id="w" onclick="show_con3()"><span>Ability 2 [W]</span></li>
                    <li id="e" onclick="show_con4()"><span>Ability 3 [E]</span></li>
                    <li id="r" onclick="show_con5()"><span>Ability 4 [R]</span></li>                   
                </ul>
            </div>
<!--   Sections         -->				
            <div id="sections">	
				<div id="sec1">					
					<img class="skill_pic" src="../img/abilities_riven/runic_blade.png" data-toggle="tooltip" title="Runic Blade">					
					<div class="skill_desc">
						Rivens abilities charge her weapon, causing her to deal bonus damage based
						<strong>on her level</strong> + a percentage of her total <strong><orange>attack 
						damage</orange></strong>.
					</div>					
					<video controls src="../vid/riven/passive.mp4"/>					
				</div>	
				<div class="center">
				<div id="sec2">
					<img class="skill_pic" src="../img/abilities_riven/broken_wings.png" data-toggle="tooltip" title="Broken Wings">					
					<div class="skill_desc">
						Riven strikes our in front of her, dealing <strong><orange>physical 
						damage</orange></strong> to all enemies in the area. Can be recast 2 additional 
						times. The third strike will knock up.						
					</div>					
					<video controls src="../vid/riven/q.mp4"/>					
				</div>
				</div>
				<div id="sec3">
					<img class="skill_pic" src="../img/abilities_riven/ki_burst.png" data-toggle="tooltip" title="Ki Burst">					
					<div class="skill_desc">
						Releases a shockwave that <strong>stuns all nearby enemies for 0.75s</strong>
						as well as dealing <strong><orange>physical damage</orange></strong>
					</div>					
					<video controls src="../vid/riven/w.mp4"/>
				</div>   
				<div id="sec4">
					<img class="skill_pic" src="../img/abilities_riven/valor.png" data-toggle="tooltip" title="Valor">					
					<div class="skill_desc">
						Causes Riven to dash towards the cursor, gaining a <strong>shield for 1.5 seconds
						</strong> which scales with her <strong><orange>total attack damage</orange>
						</strong>.							
					</div>					
					<video controls src="../vid/riven/e.mp4"/>					
				</div> 
				<div id="sec5">
					<div id="fade">
					<img id="r1" class="skill_pic" src="../img/abilities_riven/wind_slash.png" data-toggle="tooltip" title="Blade of Exile/Windslash">
					<img id="r2" class="skill_pic" src="../img/abilities_riven/bladeoftheexile.jpg" data-toggle="tooltip" title="Blade of Exile/Windslash">					
					</div>
					<div id="r3" class="skill_desc">
						Grants Riven <strong><orange>additional attack damage</orange>
						</strong> and increases the range of all damaging abilities. The second cast fires
						a cone-missile, <strong><orange>dealing physical damage</strong></orange>
					</div>					
					<video controls src="../vid/riven/r.mp4"/>
				</div>  
			</div>
			<script>					
						var con1 = document.getElementById("sec1");					
						var con2 = document.getElementById("sec2");					
						var con3 = document.getElementById("sec3");					
						var con4 = document.getElementById("sec4");					
						var con5 = document.getElementById("sec5");					
						con1.style.visibility = "hidden";				
						con2.style.visibility = "hidden";				
						con3.style.visibility = "hidden";				
						con4.style.visibility = "hidden";				
						con5.style.visibility = "hidden";											
						function show_con1(){
							con1.style.visibility = "visible";
							con2.style.visibility = "hidden";				
							con3.style.visibility = "hidden";				
							con4.style.visibility = "hidden";				
							con5.style.visibility = "hidden";
						}
						function show_con2(){
							con1.style.visibility = "hidden";
							con2.style.visibility = "visible";				
							con3.style.visibility = "hidden";				
							con4.style.visibility = "hidden";				
							con5.style.visibility = "hidden";
						}
						function show_con3(){
							con1.style.visibility = "hidden";
							con2.style.visibility = "hidden";				
							con3.style.visibility = "visible";				
							con4.style.visibility = "hidden";				
							con5.style.visibility = "hidden";
						}
						function show_con4(){
							con1.style.visibility = "hidden";
							con2.style.visibility = "hidden";				
							con3.style.visibility = "hidden";				
							con4.style.visibility = "visible";				
							con5.style.visibility = "hidden";
						}
						function show_con5(){
							con1.style.visibility = "hidden";
							con2.style.visibility = "hidden";				
							con3.style.visibility = "hidden";				
							con4.style.visibility = "hidden";				
							con5.style.visibility = "visible";
						}						
			</script>
		</div>
		</div>
        <div id="footer">
            <img src="../img/logo_try.jpg">			
        </div>
	</body>
</html>