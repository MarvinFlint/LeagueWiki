<html>
	<head>
        <meta charset="utf-8">
        <title>Ezreal, the Explorer</title>
        <link rel="stylesheet" type="text/css" href="ezreal.css">
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
						<img src="../img/abilities_ezreal/champion_icon.png" data-toggle="tooltip" title="Ezreal">
						<strong>Ezreal</strong><br/>
					</div>					
				    <div id="detail">
				        <ul>
							<li>Class: Marksman, Mage</li>
							<li>Primary Stats: Attack damage, Cooldown reduction</li>
							<li>Position: Botlane, Midlane</li>
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
					<img class="skill_pic" src="../img/abilities_ezreal/rising_spell_force.png" data-toggle="tooltip" title="Rising Spell Force">					
					<div class="skill_desc">
						Affecting enemies or allies with one of his abilities generates a stack of Rising Spell Force. Each stack grants <strong class="yellow">10% attackspeed</strong>
					</div>					
					<video controls src="../vid/ezreal/passive.mp4"/>					
				</div>	
				<div class="center">
				<div id="sec2">
					<img class="skill_pic" src="../img/abilities_ezreal/Mystic_Shot.png" data-toggle="tooltip" title="Mystic Shot">					
					<div class="skill_desc">
						Fires an arcane bolt of energy dealing <strong class="orange">physical damage</strong> to the first enemy hit. Applies on-hit effects. Succesfully hitting a target reduced Ezreals 
                        cooldowns by 1 second.
					</div>					
					<video controls src="../vid/ezreal/q.mp4"/>					
				</div>
				</div>
				<div id="sec3">
					<img class="skill_pic" src="../img/abilities_ezreal/Essence_Flux.png" data-toggle="tooltip" title="Essence Flux">					
					<div class="skill_desc">
						Fires a wave of energy dealing <strong class="blue">magic damage</strong> to all enemies hit. Allies hit gain <strong class="yellow">attackspeed</strong>.
					</div>					
					<video controls src="../vid/ezreal/w.mp4"/>
				</div>   
				<div id="sec4">
					<img class="skill_pic" src="../img/abilities_ezreal/Arcane_Shift.png" data-toggle="tooltip" title="Arcane Shift">					
					<div class="skill_desc">
						Ezreal blinks to a nearby location. Once he lands, he fires a bolt dealing <strong class="blue">magic damage</strong> to the closest enemy unit.															
					</div>					
					<video controls src="../vid/ezreal/e.mp4"/>					
				</div> 
				<div id="sec5">					
					<img id="r2" class="skill_pic" src="../img/abilities_ezreal/Trueshot_Barrage.png" data-toggle="tooltip" title="Trueshot Barrage">								
					<div id="r3" class="skill_desc">
						Fires a giant wave of arcane energy dealing massive <strong class="blue">magic damage</strong> scaling with both <strong class="orange">bonus attack damage</strong> and <strong class="blue">
                        ability power</strong>
					</div>					
					<video controls src="../vid/ezreal/r.mp4"/>
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