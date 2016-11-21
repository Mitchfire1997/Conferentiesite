<?php
    ob_start();
    /*
    Plugin Name: overzicht sloten plugin
    Version: 1.0
    Author: Mitchell van der Woude
    Author URI: https://github.com/Mitchfire1997
    Description: Dit wordt form met overzicht van de sloten
    Text Domain: Test.nl
    */

    function overzicht_plugin_shortcode()
    {
        ?>
<?php
       
       
   date_default_timezone_set("Europe/Amsterdam");
        global $wpdb;  
        
         session_start();
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'conferentie');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    
       
       
       
?>
            <style>
                #content tr td:last-child{
                        border: 1px solid #000000;
                    }

                    #content tr td {
                        border: 1px solid rgb(0, 0, 0);
                        padding: 6px 24px;
                    }
        </style>
        <div id="AgendaForm">
         <table>
                        <tr>
                        <td>
                            Vrijdag
                        </td>        
                            <td>
                                Zaal 1
                            </td>
                            <td>
                                Zaal 2
                            </td>
                            <td>
                                Zaal 3
                            </td>
                            <td>
                                Zaal 4
                            </td>
                    </tr>
                    <tr>  
                        <td>
                            15:30 - 16:30
                        </td>
                            <td>
                                    
                                        
                                       <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 1";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "Naam Spreker: " . $row["naam"]. "<br> Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                          <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 6";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 11";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 16";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                    <tr>  
                        <td>
                            16:45 - 17:45
                        </td>
                            <td>
                                 
                                        
                                  <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 2";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                            <td>
                                 
                                        
                                  <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 7";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 12";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 17";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>   
                    </tr>
                    <tr>  
                        <td>
                            18:45 - 19:45
                        </td>
                            <td>
                                
                                        
                                  <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                             
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 8";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 13";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                
                                        
                                  <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 18";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                    <tr>
                        <td>
                           20:00 - 21:00
                        </td>
                            <td>            
                             
                                        
                                 <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 4";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 9";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 14";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 19";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td> 
                    </tr>
                    <tr>  
                        <td>
                            21:30 - 22:30
                        </td>
                            <td>   
                                 
                                        
                                  <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 5";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                            <td>
                                
                                        
                                  <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 10";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 15";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 20";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                        </table>
                        <table>
                         <tr>
                        <td>
                            Zaterdag
                        </td>        
                            <td>
                                Zaal 1
                            </td>
                            <td>
                                Zaal 2
                            </td>
                            <td>
                                Zaal 3
                            </td>
                            <td>
                                Zaal 4
                            </td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>  
                        <td>
                            10:15 - 11:15
                        </td>
                            <td>
                                 
                                        
                                  <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 21";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 30";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 39";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 48";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                    <tr>  
                        <td>
                            11:30 - 12:30
                        </td>
                            <td>
                                 
                                        
                                 <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 22";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                        <td>
                                 
                                        
                              <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 31";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 40";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 49";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                    <tr>  
                        <td>
                            13:00 - 14:00
                        </td>
                            <td>
                                 
                                        
                                  <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 23";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td> 
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 32";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 41";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                  <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 50";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                    <tr>
                        <td>
                           14:15 - 15:30
                        </td>
                            <td>            
                                
                                        
                                  <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 24";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 33";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 42";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 51";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                    <tr>  
                        <td>
                           15:30 - 16:30
                        </td>
                            <td>
                                 
                                        
                                 <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 25";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td> 
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 34";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td> 
                             <td>
                                
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 1";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td> 
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 52";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td> 
                    </tr>
                        <tr>
                        <td>
                            16:45 - 17:45
                        </td>
                            <td>            
                               
                                      
                                  <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 26";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                
                                        
                                  <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 35";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 44";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 53";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                        <tr>
                        <td>
                           18:45 - 19:45
                        </td>
                            <td>            
                                
                                        
                                  <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 27";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 36";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                
                                        
                                  <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 45";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 54";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                        <tr>
                        <td>
                            20:00 - 21:00
                        </td>
                            <td>            
                                
                                        
                                  <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 28";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                  <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 37";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 46";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 55";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                        <tr>
                        <td>
                           21:30 - 22:30
                        </td>
                            <td>            
                                
                                        
                                  <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 29";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 38";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 47";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 56";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
             </table>
                            <table>
                         <tr>
                        <td>
                            Zondag
                        </td>        
                            <td>
                                Zaal 1
                            </td>
                            <td>
                                Zaal 2
                            </td>
                            <td>
                                Zaal 3
                            </td>
                            <td>
                                Zaal 4
                            </td>
                    </tr>
                    <tr>  
                        <td>
                            12:15 - 13:15
                        </td>
                            <td>
                                 
                                        
                                  <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 57";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 61";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td> 
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 65";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td> 
                                 
                                        
                                    <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 69";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td> 
                    </tr>
                    <tr>  
                        <td>
                            13:30 - 14:30
                        </td>
                            <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 58";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td> 
                                 
                                        
                                    <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 62";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                    <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 66";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                    <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 70";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                    <tr>  
                        <td>
                            15:00 - 16:00
                        </td>
                            <td>
                                 
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 59";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                    <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 63";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                    <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 67";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                    <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 71";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                    <tr>
                        <td>
                           16:15- 17:15
                        </td>
                            <td>            
                                
                                        
                                   <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 60";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                    <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 64";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                    <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 68";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                    <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "conferentie";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 72";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                    </form>
                    </table>
                <a href="http://localhost/conferentie/wordpress/aanvraag/">
    <button>Aanvragen</button>
</a>
       </div>
<?php
    }
    function overzicht_sloten_register_shortcode()
    {
        add_shortcode('overzicht-sloten','overzicht_plugin_shortcode');
    }

    add_action('init', 'overzicht_sloten_register_shortcode');
?>
