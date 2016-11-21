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
                <tr>                                                                                                                                                                                                                      <td>Type: <select name = "dag"> <option value = "Vrijdag" > Vrijdag </option> <option value = "Zaterdag" > Zaterdag </option> <option value = "Zondag"> Zondag </option> <option value = "Weekend">                         Weekend </option><option value = "Passe-partout"> Passe-partout </option> </select>                                                                                                                                </td> 
               <td><input type="text" name="prijs" readonly/> </td>                                                                                                                                                                  <td> Maaltijd: <select name = "maaltijd"><option value = "geen" > geen </option> <option value = "Lunch" > Lunch </option> <option value = "Diner"> Diner </option> <option value = "Lunch en Diner">                Lunch en Diner </option> </select></td>  </td> <td><input type="text" name="prijs" readonly/> </td><br>       
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
                                        
        
if(isset($_POST["submit"]))
        {   
            $Date = date('Y-m-d H:i:s');
    
            $user = $wpdb-> get_results(
                    "SELECT id FROM user where email =" .$_POST['email']."");
            echo $result;
            
            $prijsTicket = $wpdb-> get_results(
                    "SELECT prijs from ticketsoort WHERE ticketsoort.id = ticket.soort");
            
            $prijsMaaltijd = $wpdb-> get_results(
                "SELECT prijs from maaltijdsoort WHERE maaltijdsoort.id = maaltijd.soort");
            
            $prijs_totaal = $prijsTicket + $prijsMaaltijd;
    

    /*
INSERT INTO reservering
(id, user, datum, betaalmethode, prijs_totaal)
SELECT id, soort 
FROM ticket, reservering
WHERE ticket.id = reservering.id;
*/

    /* MAAK VOOR ELKE INSERT QUERY EEN INSERT SELECT QUERY ZODAT DE VELDEN DIE INGEVULD KUNNEN WORDEN, WORDEN INGEVOERD.
    ALS JE IETS WILT TESTEN GA HET ER DAN MET DE HAND IN DE DATABSE ZETTEN WAARDOOR JE KAN ZIEN OF DE DATABASE GOED IN ELKAAR ZIT.
    */

    
            $sql1 =      "INSERT INTO reservering(                   user,
                                                                    datum,
                                                                    betaalmethode,
                                                                    prijs_totaal)
                                         VALUES
                                                                    ( 
                                                                     $user,
                                                                     $Date,
                                                                     '$_POST[betaalmethode]',
                                                                     $prijs_totaal)";
    
             $sql2 =           "INSERT INTO ticket(                      streepjescode,
                                                                    reservering,
                                                                    soort
                                                                    )
                                         VALUES
                                                                    (
                                                                     '%d',
                                                                     '%d',
                                                                     '%d')";
                                                        
                     
                                        
                                                                            
    
                                                             
              $sql3 =          "INSERT INTO maaltijd(               streepjescode,
                                                                    reservering,
                                                                    soort
                                                                    )
                                         VALUES
                                                                    (
                                                                     '%d',
                                                                     '%d',
                                                                     %d')";
                                                            
      
      
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
