<html>
	<head>
        <meta charset="utf-8">
        <title>Irelia, the Will of Blades</title>
        <link rel="stylesheet" type="text/css" href="irelia.css">
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
				<div id="test">
					<div id="desc">
						<div id="title">
							<img src="../img/abilities_irelia/champion_icon.png" data-toggle="tooltip" title="Irelia">
							<strong>Irelia</strong><br/>
						</div>					
						<div id="detail">
							<ul>
								<li>&nbsp;&nbsp;Class: Fighter</li>
								<li>&nbsp;&nbsp;Primary Stats: Attack speed, Attack damage, Health</li>
								<li>&nbsp;&nbsp;Position: Toplane, Jungle</li>
							</ul>
						</div>
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
					<img class="skill_pic" src="../img/abilities_irelia/ionianfervor.jpg" data-toggle="tooltip" title="Ionian Fervor">					
					<div class="skill_desc">
						Ionian Fervor grants Irelia additional <strong>tenacity</strong> based on how many enemy champions
						are nearby.						
					</div>					
					<video controls src="../vid/irelia/passive.mp4"/>					
				</div>	
				<div class="center">
				<div id="sec2">
					<img class="skill_pic" src="../img/abilities_irelia/bladesurge.png" data-toggle="tooltip" title="Bladesurge">					
					<div class="skill_desc">
						Dashes to an enemy unit, dealing <orange><strong>physical damage</strong></orange> and 
						applying on-hit effects.<br/> If this kills the target, it refunds mana and completely resets
						its cooldown.
					</div>					
					<video controls src="../vid/irelia/q.mp4"/>					
				</div>
				</div>
				<div id="sec3">
					<img class="skill_pic" src="../img/abilities_irelia/Hiten_Style.png" data-toggle="tooltip" title="Hiten Style">					
					<div class="skill_desc">
						Passively restores a flat amount of <strong><green>health</green></strong> on hit. 
						When activated, health-restoration
						is doubled and Irelia deals <strong>true damage</strong> on hit for 6 seconds.
					</div>					
					<video controls src="../vid/irelia/w.mp4"/>
				</div>   
				<div id="sec4">
					<img class="skill_pic" src="../img/abilities_irelia/equilibrium_strike.jpg" data-toggle="tooltip" title="Equilibrium Strike">					
					<div class="skill_desc">
						Pierces an enemy unit, dealing <strong><blue>magic damage</blue></strong> slowing it by 60% for 1-2. If the target has a higher 
						<strong><green>health</green></strong>percentage than Irelia, it <strong>stuns</strong> for the duration instead.	
					</div>					
					<video controls src="../vid/irelia/e.mp4"/>					
				</div> 
				<div id="sec5">									
					<img class="skill_pic" src="../img/abilities_irelia/transcendent_blades.png" data-toggle="tooltip" title="Transcendent Blades">					
					<div class="skill_desc">
						Fires four spirit-blades that deal <strong><orange>physical damage</orange></strong> to all enemies they pass through,
						healing Irelia for 20% of the damage dealt (halfed healing against minions).
					</div>					
					<video controls src="../vid/irelia/r.mp4"/>
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