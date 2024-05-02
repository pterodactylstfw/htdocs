<!DOCTYPE html>
<html>
    <head>
<title>Avantaje Li-Fi</title>
<meta charset="utf-8" lang="ro">

<link href="avantaje.css" type="text/css" rel="stylesheet">

<style>

#main{
    margin-top:80px;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

#form {
  border-radius: 5px;
  background-color:#0e1c71;
  padding: 20px;
}
</style>

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
                <a href="avantaje.php">Avantajele Li-Fi-ului</a>
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

                <center><h1 style="font-size: 42px;">Formular de contact pentru comandă </h1>
            <h2>Rămâi fascinat de viteza luminii...</h2></center>
<br><br><br>
                <div id="form">
  <form method="POST" action="comanda.php">
    <label for="fname">Prenume</label>
    <input type="text" id="fname" name="fname" placeholder="Prenumele tău..">

    <label for="lname">Nume</label>
    <input type="text" id="lname" name="lname" placeholder="Numele tău..">

    <label for="email">E-Mail</label>
    <input type="text" id="email" name="email" placeholder="E-Mailul tău..."> 
    
    <label for="numar">Număr de telefon</label>
    <input type="text" name="number" id="number" placeholder="Numarul tău de telefon...">
    

  
    <input type="submit" name="submit" id="submit" value="Trimite">
  </form>
</div>

            </div>


            <div class="footer">
      <center><p>© 2024 Raul Constantin. Toate drepturile rezervate.</p></center></div>
    </body>

</html>
