<?php ?>
    
<html>
    <head>
    
        <script>
    
        var Tab() = document.getElementById("ProductTab");
        Tab.style.top = "-170";
        
        function openTab() {
            
            if (Tab.style.top === "-170px"){
                
                Tab.style.top = "15%";
                
            } else {
                
                Tab.style.top = "-170px";
                
            }
            
        }
        
    </script>
    
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="header.css">
    
    <header id="Header" >
        
        <div id="ProductTab">
            <h3 onclick="href='https://www.curseforge.com/minecraft/mc-mods/mitrek'" >Mitrek</h3>
            <h3>Aperture-Sciences</h3>
    </div>
        
        <a href="#Header" style="text-decoration:none"><h3 style="text-decoration:none" id="TopText" class="Name" >BP TEAM</h3></a>
        <h3 id="TopText" class="About">ABOUT US</h3>
        <h3 id="TopText" onclick="openTab();" class="Products" >PRODUCTS</h3>
        <a href="#Header"><img class="Logo" src="https://bpteam.xyz/assets/bplogo.png" ></a>
</header>
        
        </head>
</html>
