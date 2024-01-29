<!DOCTYPE html>
<html>
    <head>
<title>Avantaje Li-Fi</title>
<meta charset="utf-8" lang="ro">

<link href="avantaje.css" type="text/css" rel="stylesheet">

<script>
    /* Set the width of the side navigation to 250px */
function openNav() {
document.getElementById("mySidenav").style.width = "300px";
document.getElementById("main").style.marginLeft = "300px";
  
}

function myFunction() {
location.replace("http://localhost/phpmyadmin")
}


/* Set the width of the side navigation to 0 */
function closeNav() {
document.getElementById("mySidenav").style.width = "0";
document.getElementById("main").style.marginLeft = "0";
  
}

document.getElementById('contact').addEventListener('submit', function(event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Handle form submission logic here (e.g., send data with AJAX)

    // You can also scroll to a specific element or perform other actions after submission

    // Optional: return false to prevent any further event propagation
    return false;
});
</script>
    </head>
    <body>
        <div class="blur"><div class="header">
            <table class="headtable">
            <tr>
                <td style=" position: relative;left: 9px;width: 33.33%;"><div id="mySidenav" class="sidenav" style="border: 1px solid white;">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <br><br><br>
                <a href="index.html">Acasă</a>
                <br>
                <a href="tehnologie.html">Tehnologie</a>
                <br>
                <a href="produs.html">Produs</a>
                <br>
                <a href="avantaje.html">Avantajele Li-Fi-ului</a>
                <br>
                <a href="contact.html">Contact</a>
                <br>
                <a href="about.html">Despre noi</a>
        
          <center><div id="imaginesdb"><a href="index.html"><img src="icons/LEDNETtxt.png"></a></div></center>
              </div>
              
              <!-- Use any element to open the sidenav -->
              <span onclick="openNav()"><div class="hamburger"></div>
                <div class="hamburger"></div>
                <div class="hamburger"></div></span></td>
        
              <center><td id="lednetlogo" ><a href="index.html"><center><img src="icons/LEDNETtxt.png"></center></a></td></center>
        
              <td><button onclick="myFunction()" style="float: right; width: 100px; height: 40px;  border-radius: 5px; text-align: center; font-size: medium;">PHP</button></td>
        
        
            </tr> </table>
        </div></div>
        
        
        
            <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
            <div id="main">

                <center><h1> Descoperă ce opțiune ți se potrivește cel mai bine.</h1></center>
                
                <center>
                    <div class="flex-parent-element">
                        <div class="flex-child-element magenta">

                            <h1>Li-Fi by pureLiFi</h1>
                            <table width="100%" style="border: 1px solid whitesmoke; border-radius: 10px;" >
                            <tr>
                                <td style="display: flexbox;" width="100%"><center><img src="icons/stick.png" height="280px"><img src="icons/accpoint2.png" height="280px" ></center></td>
                                
                            </tr>
                        </table>
                        <center>
                            <h2>Tehnologie bazată pe lumina LED, de acasă sau de la birou.</h2>
                            <h3>Folosește Li-Fi, dacă:</h3>
                            <ul>
                                <li>Ai nevoie de o rețea de 10x mai rapidă decât Wi-Fi.</li>
                                <br>
                                <li>Folosești rețeaua într-un spațiu închis, fără a dori comunicarea între camere.</li>
                                <br>
                                <li>Dispui de lumină LED în spațiul unde dorești să amplasezi echipamentul.</li>
                                <br>
                                <li>Dorești să elimini undele radio utilizate de Wi-Fi, dăunătoare sănătății tale.</li>
                            </ul>
                        </center>

                        </div>



                        <div class="flex-child-element green">
                            <center>
                            <h1>Wi-Fi convențional</h1>
                            <table style="border: 1px solid whitesmoke; border-radius: 10px;" height="292px">
                                <tr>
                                    <td width="100%"><img src="icons/wifi.png" width="420px"></td>
                                </tr>
                                </table>
                                <h2>Tehnologie bazată pe unde radio, penetrabile prin orice mediu.</h2>
                                <h3>Folosește Wi-Fi, dacă:</h3>
                                <ul>
                                    <li>Nu ai nevoie de o rețea foarte rapidă.</li>
                                    <br>
                                    <li>Dorești să ai acces la internet și în celelalte încăperi.</li>
                                    <br>
                                    <li>Îți asumi efectele produse de undele radio, dăunătoare corpului uman.</li>
                                    
                                </ul>
                            </center>
                        </div>
                      </div>
                </center>

                
                <br><br>

                <div id="form">

                    <h1 style="font-weight: 300;">Află ce soluție ți s-ar potrivi!</h1>

                    <center>
                       
                        <form method="post" action="avantaje.php">
                            <table  style="border: 1px solid blueviolet; border-spacing: 10px; font-size: 20px; border-radius: 8px;">
                                <tr>
                                    <td>
                                        Folosești rețeaua într-o casă/clădire mare, dorind să ai acces la internet oriunde?
                                    </td>
                                    <td>
                                        <input type="radio" value="0" name="int1">Nu
                                        <input type="radio" value="1" name="int1">Da
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ai nevoie de viteză de descărcare și încărcare rapidă?
                                    </td>
                                    <td>
                                        <input type="radio" value="1" name="int2">Nu
                                        <input type="radio" value="0" name="int2">Da
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Ești influențat de efectele negative ale undelor radio asupra sănătății?
                                    </td>
                                    <td>
                                        <input type="radio" value="1" name="int3">Nu
                                        <input type="radio" value="0" name="int3">Da
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Dispui de o sumă mai mare de bani, pentru a utiliza Li-Fi-ul, ce este o tehnologie nouă, aflată în dezvoltare.
                                    </td>
                                    <td>
                                        <input type="radio" value="1" name="int4">Nu
                                        <input type="radio" value="0" name="int4">Da
                                    </td>


                                </tr>

                                <tr>
                                    <td colspan="2"><center><input type="submit" name="buton" value="Verifica!" style="width: 80%; font-size: 20px; border-radius: 30px;"></center></td>
                                </tr>
                            </table>
                        </form>

                        <?php if(isset($_REQUEST['buton']))
                        {
                            $i1=$_POST["int1"];
                            $i2=$_POST["int2"];
                            $i3=$_POST["int3"];
                            $i4=$_POST["int4"];
                            
                            $ct1=0;
                            $ct0=0;
                            
                            if($i1==0) $ct0=$ct0+1;
                                else $ct1=$ct1+1;
                            
                            if($i2==0) $ct0=$ct0+1;
                                else $ct1=$ct1+1;
                            
                            if($i3==0) $ct0=$ct0+1;
                                else $ct1=$ct1+1;
                            
                            if($i4==0) $ct0=$ct0+1;
                                else $ct1=$ct1+1;
                            
                               
                                if($ct0+$ct1<4) echo '<h1>Te rog sa completezi formularul!</h1>';
                                else if($ct0>$ct1) echo '<h1>Rețeaua cea mai potrivită pentru tine este Li-Fi!</h1>';
                            
                                else if($ct0<$ct1) echo '<h1>Rețeaua cea mai potrivită pentru tine este Wi-Fi!</h1>';
                            
                                else echo '<h1>Ambele rețele ți se potrivesc cerințelor tale.</h1>';
                                header("Location: avantaje.php");
                            
                        }?>
                    </center>

                </div>
                <br><br><br><br><br><br>


                <div id="review">

                    <h1 style="font-weight: 300; float: right;">Ce spun clienții despre Li-Fi XC:</h1>

                        <div id="parere">
                            <h3 style="font-weight: 200;">„Li-Fi XC este produsul revoluționar care, după părerea mea, va funcționa impecabil la finalul dezvoltării sale. Cred că momentan poate fi folosit 
                                doar concomitent cu Wi-Fi, din cauza lipsurilor pe care le are în ceea ce privește raza de acoperire.” - Cristi</h3>
                        </div>

                        <div id="parere" style="position: relative; left: 40px;">
                            <h3 style="font-weight: 200;">„Sunt pur și simplu impresionat de viteza pe care o poate oferi lumina de acasă. De acum, mă voi folosi doar de acest protocol de transmitere
                                a datelor.” -Andrei </h3>
                        </div>

                        <div id="parere" style="position: relative; left: 120px;">
                            <h3 style="font-weight: 200;">„Numai pentru simplul fapt că nu mai utilizează undele radio, despre care știam că pot afecta omul, Li-Fi-ul a câștigat detașat în fața Wi-Fi-ului. Mă simt mai sigur 
                                când știu că nu mă afectează. De asemenea, nimeni nu îmi poate accesa rețeaua de afară, pentru că nu pot percepe lumina dinăuntrul casei.” - Paul</h3>
                        </div>

                        <div id="parere" style="position: relative; left: 260px;">
                            <h3 style="font-weight: 200;">„Deși mai este de lucrat pentru perfecționarea acestui tip de transmitere a datelor, simt că are potențial enorm în epoca vitezei. Momentan voi rămâne la Wi-Fi, însă voi face schimbarea când voi simți că
                                tehnologia este pregătită să fie folosită în industrie.” - Mihai </h3>
                        </div>

                        

                </div>
                <h2 style="float: right; margin-right: 40px; margin-bottom: 10px; font-weight: 100;">Tu ce părere ai? Lasă-ne un review pe adresa noastră de mail.</h2>

             </div>

             <br>

                <div class="footer">
                    <center><p>© 2024 Raul Constantin. Toate drepturile rezervate.</p></center></div>
    </body>
</html>