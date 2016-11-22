<?php
    ob_start();
    /*
    Plugin Name: ticket plugin
    Version: 1.0
    Author: Mitchell van der Woude
    Author URI: https://github.com/Mitchfire1997
    Description: Dit wordt een ticket form
    Text Domain: Test.nl
    */

    function form_ticket_shortcode()
    {
        date_default_timezone_set("Europe/Amsterdam");
        global $wpdb;  
        session_start();
     

        
        
        
 /*      

$to  = "$_GET(email)"; 


// subject
$subject = 'Kaartjes kopen netwerkbijeenkomst';

// message
$message = '
<html>
<head>
  <title>Welcome to the conferentie of games.</title>
</head>
<body>
 click on <a href="http://localhost/conferentie/wordpress/netwerkbijeenkomst/">Here</a> to buy ticket for the netwerkbijeenkomst.
  
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= 'From: Conferentie <conferentie1234@gmail.com>' . "\r\n";

        mail($to, $subject, $message, $headers);
        
      */  
    
        
    
        
        
?>
                
    
        <!DOCTYPE html>
    <html>
        <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
        <?php
            
            $result = $wpdb-> get_results(
                    "SELECT * FROM `ticketsoort` ", ARRAY_A
                );
        for($i = 0; $i < sizeof($result); $i++){
        echo $result[$i]["id"];
        echo $result[$i]["soort"];
        echo $result[$i]["prijs"];
        echo $result[$i]["beschikbaar"];
        }
        
        ?>
        $(document).ready(function(){
               $("#button1").click(function(){
                $("ol").append("<li><select name='dag'></select> <select name='maaltijd'></select><button value='delete'</li>");
            });
        });
            
    $(function(){
                var maxAppend = 0;

                $("#button1").click(function(){

                    if (maxAppend >= 250) return;

                    var newTicket = 
                    '<tr>                                                                                                                                                                                                                       <td>Type: <select name = "dag"> <option value = "Vrijdag" > Vrijdag </option> <option value = "Zaterdag" > Zaterdag </option> <option value = "Zondag"> Zondag </option> <option value = "Weekend"> Weekend </option><option value = "Passe-partout"> Passe-partout </option> </select>                                                                                                                                           </td> <td><input type="text" name="prijs" readonly/> </td>                                                                                                                                                                                                                 <td> Maaltijd: <select name = "geen"><option value = "geen" > geen </option> <option value = "Lunch" > Lunch </option> <option value = "Diner"> Diner </option> <option value = "Lunch en Diner"> Lunch en Diner </option> </select>               </td>  </td> <td><input type="text" name="prijs" readonly/> </td>                                                                                                                                                                                                                <td> <button class = "delete" type = "button" > Verwijder Ticket </button></td>                                                                                                                                                                                                   </tr><br>';

                $('#newTicket').append(newTicket); 

                maxAppend++;

            });

            $("#newTicket").delegate(".delete", "click", function(){

                $(this).parent().parent().remove();

                maxAppend--;

            });
            
        });

        
        </script>
        </head>
        <body>       
            <form action='http://localhost/conferentie/wordpress/ticket' method='post'>
           
                <tr>    
                    <button type = "button" id="button1">Ticket toevoegen</button><br>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $_SESSION['email']; ?>" placeholder="geef hier je emailadres" readonly/></td><br>
                </tr>
                <tr>                                                                                                                                                                                                                      <td>Type: <select name = "dag"> <option value = "1" > Vrijdag </option> <option value = "2" > Zaterdag </option> <option value = "3"> Zondag </option> <option value = "5">                         Weekend </option><option value = "4"> Passe-partout </option> </select>                                                                                                                                </td> 
               <td><input type="text" name="prijs" value="10" readonly/> </td>                                                                                                                                                                  <td> Maaltijd: <select name = "maaltijd"><option value = "1" > geen </option> <option value = "2" > Lunch </option> <option value = "3"> Diner </option> <option value = "4">                Lunch en Diner </option> </select></td>  </td> <td><input type="text" name="prijs" readonly/> </td><br>       
            </tr>          
                <tr>
                     <div id='newTicket'></div>
                </tr>    
                <tr>
                <td>Betaalmethode<select name="betaalmethode"><option value="IDEAL">IDEAL</option>
                                                              <option value="PAYPAL">PAYPAL</option>
                                                              <option value="CREDITCARD">CREDITCARD</option>
                    </select>
                </td>
            </tr>  
        <tr>
        <td><input type='submit' name='submit' value='Volgende'/></td>
        </tr>
        </body>
</html>

     <?php
            $conn = new mysqli('localhost', 'root', '', 'conferentie') 
            or die ('Cannot connect to db');

    $result = $conn->query("select id, dag, zaal, begintijd, eindtijd from slot");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='id'>";

    while ($row = $result->fetch_assoc()) {

                  unset($id, $dag, $zaal, $begintijd, $eindtijd);
                  $id = $row['id'];
                  $dag = $row['dag']; 
                  $zaal = $row['zaal']; 
                  $begintijd = $row['begintijd']; 
                  $eindtijd = $row['eindtijd']; 
                  echo '<option value="'.$id.'">Dag: '.$dag.' Zaal: '.$zaal.' Begintijd: '.$begintijd.' Eindtijd: '.$eindtijd.' </option>';
                 
}
        
if(isset($_POST["submit"]))
        {   
            
            
  
            $maxid = $wpdb-> get_results(
                    "SELECT MAX(id) FROM `reservering` ", ARRAY_A
                );
       
        for($i = 0; $i < sizeof($maxid); $i++){
        echo $maxid[$i]["id"];
       
        }
        
            
            /*$prijsTicket = $wpdb-> get_results(
                    "SELECT prijs from ticketsoort WHERE ticketsoort.id = ticket.soort");
            
            $prijsMaaltijd = $wpdb-> get_results(
                "SELECT prijs from maaltijdsoort WHERE maaltijdsoort.id = maaltijd.soort");
            
            $prijs_totaal = $prijsTicket + $prijsMaaltijd;
    
            $test = 1;*/
    
    
          /*  $sql1->query(
                        $sql1 -> prepare =     ( "INSERT INTO `reservering`(    `user`,
                                                                    `datum`,
                                                                    `betaalmethode`,
                                                                    `prijs_totaal`)
                                         VALUES
                                                                    ('%d',
                                                                     '%s',
                                                                     '%s',
                                                                     '%d')", 
                                                                     $user,
                                                                     $date,
                                                                     $_POST["betaalmethode"],
                                                                     $prijs_totaal)
                                                                    );*/
    $wpdb->insert( 
    'reservering', 
    array( 
        'user' => 10,
        'betaalmethode' => $_POST["betaalmethode"],
        'prijs_totaal' => 50
    )
    
);
    
     $wpdb->insert( 
    'ticket', 
    array( 
        'streepjescode' => md5(uniqid(rand(), true)), 
        'reservering' => 10,
        'soort' => 3
    )
    
);
    
     $wpdb->insert( 
    'maaltijd', 
    array( 
        'streepjescode' => md5(uniqid(rand(), true)), 
        'reservering' => 10,
        'soort' => 3
    )
    
);
                                        
                       /* $wpdb->query(
                                        $wpdb -> prepare = ("INSERT INTO `reserervering`
                                                            (       `user`,
                                                                    
                                                                    `betaalmethode`,
                                                                    `prijs_totaal`)
                                         VALUES
                                                                    ('%d',
                                                                     
                                                                     '%s',
                                                                     '%d',
                                                                     
                                                                     )", 
                                                                     $user,
                                                                     
                                                                     $_POST["betaalmethode"],
                                                                     $prijs_totaal
                                                                    )
                );
    //var_dump($_POST);
    
        /*     $sql2 =           "INSERT INTO ticket(                 streepjescode,
                                                                    reservering,
                                                                    soort
                                                                    )
                                         VALUES
                                                                    (
                                                                     $test,
                                                                     $test,
                                                                    $test )";
    
                                                        
                     
                                        
                                                                            
    
                                                             
              $sql3 =          "INSERT INTO maaltijd(               streepjescode,
                                                                    reservering,
                                                                    soort
                                                                    )
                                         VALUES
                                                                    (
                                                                     $test,
                                                                    $test,
                                                                    $test)";
    
                                                            
      */
      
       $output = "<table>
                    <tr>
                        <td>Ticket:</td>
                        <td>Prijs:</td>
                    </tr>
                    <tr>
                        <td>Vrijdag</td>
                        <td>€45</td>
                    </tr>
                    <tr>
                        <td>Zaterdag</td>
                        <td>€60</td>
                    </tr>
                    <tr>  
                       
                        <td>Zondag</td>
                        <td>€30</td>
                    </tr>
                    <tr>  
                        
                        <td>Weekend</td>
                        <td>€80</td>
                    </tr>
                    <tr>  
                       
                        <td>Passe-partout</td>
                        <td>€100</td>
                    </tr>
                   <tr>
                        <td></td>
                   </tr>
                    </form>
                    </table>";
        
        return $output;
    }
    }
       

    function form_ticket_register_shortcode()
    {
        add_shortcode('form-ticket','form_ticket_shortcode');
    }

    add_action('init', 'form_ticket_register_shortcode');
?>
