<?php
    ob_start();
    /*
    Plugin Name: test
    Version: 1.0
    Author: Mitchell van der Woude
    Author URI: https://github.com/Mitchfire1997
    Description: Dit wordt een organisator aanmeld pagina
    Text Domain: Test.nl
    */

    function test_plugin_shortcode()
    {
        date_default_timezone_set("Europe/Amsterdam");
        global $wpdb;       
    ?>

<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("uitnodiging.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("uitnodiging.txt"));
fclose($myfile);
?>

</body>
</html> 
<?php
    }

    function test_shortcode()
    {
        add_shortcode('test','test_plugin_shortcode');
    }

    add_action('init', 'test_shortcode');

?>