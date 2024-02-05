<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
            @import url("css/styleform.css");
            @import url("css/style.css");
            @import url("css/navstyle.css");
        </style>
        <title>Sign Up :</title>
    <link rel="icon" href="https://www.biobikelove.de/wp-content/uploads/2022/11/M-Icon-03_green.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    </head>
    <body>
          <div class="navbar">
    <a href="./?action="><img src="https://www.biobikelove.de/wp-content/uploads/2022/11/logo1.png.webp" alt="logo"></a>
    <div class="navbar-right">
        <a href="./?action=connexion" class="nav-button">Log In</a>
        <a href="./?action=Inscription" class="nav-button">Sign Up</a>
    </div>
 </div>

        <h1>Sign Up :</h1>
     
        <div class="form">
        <form method="post" action="./?action=Inscription">
            <ul>
                <li>
                    <label for="name">First Name :</label>
                    <input type="text" id="name" name="name" required />
                </li>
                <li>
                    <label for="lastname">Last Name :</label>
                    <input type="text" id="lastname" name="lastname" required />
                </li>
                <li>
                    <label for="mail">E-mail :</label>
                    <input type="text" id="mail" name="mail" required />
                </li>
                <li>
                    <label for="password">Password :</label>
                    <input type="password" id="password" name="password" required />
                </li>
                <li>
                    <label for="number">Phone Number :</label>
                    <input type="text" id="number" name="number" required />
                </li> 
                <li>
                    <label for="cpname">Company Name :</label>
                    <input type="text" id="cpname" name="cpname" required />
                </li> 
                <li>
                    <label for="cpadress">Company Address :</label>
                    <input type="text" id="cpadress" name="cpadress" required />
                </li>
                <li>
                    <label for="cpzipcode">Company ZipCode :</label>
                    <input type="text" id="cpzipcode" name="cpzipcode" required />
                </li>
                <li>
                    <label for="cpcity">Company City :</label>
                    <input type="text" id="cpcity" name="cpcity" required />
                </li>
                <li>
                    <label for="vatnumber">VAT Number :</label>
                    <input type="text" id="vatnumber" name="vatnumber" required />
                </li> 
            </ul>
            <div class="">
                <input type="submit" name="action" value='Inscription'>
            </div>
        </div>
        </form>
    </body>
</html>
