<?PHP 
$contactAddress = get_option("newstheme_address");
$contactPhone = get_option("newstheme_phone");
$contactEmail = get_option("newstheme_email");

?>
<?PHP 

if(!empty($contactAddress)):
    ?>
<p class="mb-3">
    <a href="https://www.google.com/maps/place/<?PHP echo $contactAddress; ?>" target="_blank">
       <?PHP echo $contactAddress; ?>
    </a>
</p>
<?PHP
endif;


?>
<?PHP 

if(!empty($contactPhone)):
    ?>
<p class="mb-3">
    <a href="tel:<?PHP echo $contactPhone; ?>">
        <?PHP echo $contactPhone; ?>
    </a>
</p>
<?PHP
endif;


?>
<?PHP 

if(!empty($contactEmail)):
    ?>
<p class="mb-0">
    <a href="mailto:<?PHP echo $contactEmail; ?>"><?PHP echo $contactEmail; ?></a>
</p>   
<?PHP
endif;


?>

       
