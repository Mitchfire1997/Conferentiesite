<?php
    ob_start();
    /*
    Plugin Name: aanvraag
    Version: 1.0
    Author: Mitchell van der Woude
    Author URI: https://github.com/Mitchfire1997
    Description: Dit wordt een organisator aanvraag bekijk pagina
    Text Domain: Test.nl
    */

    function aanvraag_plugin_shortcode()
    {
 ?>
   
<?php
        date_default_timezone_set("Europe/Amsterdam");
        global $wpdb;  
        
        if(isset ($_GET["id"])&& isset($_GET["action"])){
                if($_GET["action"] == "delete")
                {
                    $wpdb-> query(
                    $wpdb->prepare(
                        "DELETE FROM `login` WHERE `id` = '%d'" ,$_GET["id"])
                );
                }
             elseif($_GET["action"] == "update")
                {
                    $wpdb-> query(
                    $wpdb->prepare(
                        //"UPDATE login, slot SET tag = 1 ", $_GET["1e_slot"])
                        "UPDATE slot JOIN login ON login.1e_slot = slot.id
                        SET slot.tag = 3
                        WHERE login.1e_slot = '%d'" ,$_GET["1e_slot"])
                );
                }
            
        }
       
         $result = $wpdb-> get_results(
                    "SELECT `id`, `1e_slot`, `onderwerp`, `omschrijving` FROM `login` ", ARRAY_A
                );

        
          echo "<table>
                <tr>
                    <th>ID</th>
                    <th>1e_slot</th>
                    <th>onderwerp</th>
                    <th>omschrijving</th>
                    <th>Accept Verander tag in 3</th>
                    <th>Delete</th>
                </tr>";
            
            for( $i = 0; $i < sizeof($result); $i++){
                echo"<tr>
                        <td>".$result[$i]["id"]."</td>
                        <td>".$result[$i]["1e_slot"]."</td>
                        <td>".$result[$i]["onderwerp"]."</td>
                        <td>".$result[$i]["omschrijving"]."</td>
                        <td><a href='http://localhost/conferentie/wordpress/aanvraag/?id=".$result[$i]["id"]."&action=update'>
                        <img src='http://localhost/conferentie/wordpress/wp-content/plugins/Organisator-aanmelden-plugin/images/vink.png' alt='vink'</a></td>
                        <td><a href='http://localhost/conferentie/wordpress/aanvraag/?id=".$result[$i]["id"]."&action=delete'>
                        <img src='http://localhost/conferentie/wordpress/wp-content/plugins/Organisator-aanmelden-plugin/images/drop.png' alt='cross'</a></td>
                    </tr>" ;  
            }
            echo "</table>";
            echo "</form>";
        


    }

    function aanvraag_shortcode()
    {
        add_shortcode('aanvraag','aanvraag_plugin_shortcode');
    }

    add_action('init', 'aanvraag_shortcode');

?>