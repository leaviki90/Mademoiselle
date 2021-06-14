<?php
$contactAddress = get_option("newstheme_address");
$contactPhone = get_option("newstheme_phone");
$contactEmail = get_option("newstheme_email");

?>
<?php

if(!empty($contactAddress)):
    ?>
<p class="mb-3">
    <a href="https://www.google.com/maps/place/<?php echo $contactAddress; ?>" target="_blank">
       <?php echo $contactAddress; ?>
    </a>
</p>
<?php
endif;


?>
<?php

if(!empty($contactPhone)):
    ?>
<p class="mb-3">
    <a href="tel:<?php echo $contactPhone; ?>">
        <?php echo $contactPhone; ?>
    </a>
</p>
<?php
endif;


?>
<?php

if(!empty($contactEmail)):
    ?>
<p class="mb-0">
    <a href="mailto:<?php echo $contactEmail; ?>"><?php echo $contactEmail; ?></a>
</p>   
<?php
endif;


?>

       
