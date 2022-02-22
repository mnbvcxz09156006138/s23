<html>
<head>
	<link rel="stylesheet" href="s12.css">
</head>

<body>
<div id="stars">
        <?php 
        $star="☆";   ?>
          <?php for($j=0;$j<46;$j++):?>
               <span style="position:fixed; top:<?php print(rand(1,99));?>; left:<?php print(rand(1,149));?>;">
               <?php  echo($star);?>
               <?php echo(" ");?>
               <?php endfor; ?>
          </span>
        </div>
        <div id="main">
        <table border="1" id="flag">
         <?php for($i=0;$i<7; $i++): ?>
         <tr>
        
            <td id="td_style"></td>
            
         </tr>  
         <tr></tr>
         <?php endfor; ?>
         </table>
        </div>
</body>

</html>