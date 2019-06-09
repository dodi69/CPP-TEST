<?php
include_once 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
 

    <title>CPP učenje in testi</title>

    <link rel="stylesheet" type="text/css" href="stran.css">
   
</head>

    <body>    
        
        <div class="container">
            <div class="row">
                <div class="tm-left-right-container">
                    <!-- Left column: logo and menu -->
                    <div class="tm-blue-bg tm-left-column">                        
                        <div class="tm-logo-div text-xs-center">
                           
                            <div class="log">
                            <a href="logout.php">LOG OUT</a>
                            </div>
                            <h1 class="tm-site-name">CPP TEST</h1>
                        </div>
                        <?php
                        if (isset($_SESSION['tip']) && $_SESSION['tip'] == 'admin')
                        {
                        ?>
                       
                             
                                
                        <nav>
                            <form method="get" action="vprasanja.php" >
                                <button type="submit"name=".button">Vprasanja</button>
                                </form>
                        <form method="get" action="uporabnik_show.php">
                                <button type="submit">Uporabniki</button>
                                </form>
                        </nav>
                                   
                            
                        
                        <?php
                        }
                        ?>
                   
                    
                    <!-- Right column: content -->
                    <div class="tm-right-column">
                                              <div class="tm-content-div">
                            <!-- Welcome section -->
                            <footer>
                                <p class="tm-copyright-p">Copyright &copy; <span class="tm-current-year">2017</span> Your Company 
                                
                                | Designed by <a href="http://www.templatemo.com" target="_parent">templatemo</a></p>
                            </footer>
                        </div>  
                        
                    </div> <!-- Right column: content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
           
</body>
</html>