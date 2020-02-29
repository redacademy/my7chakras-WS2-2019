<!-- This file is used to markup the public-facing widget. -->

<div class="box-row">


    
    <P>
        <?php if (strlen(trim($facebook))>0): ?>
            <a href="https://www.facebook.com/<?php echo $facebook; ?>">
            
            <img src= "<?php echo get_template_directory_uri();?>/assets/logo/FB.svg" alt="Inhabitent logo text">				
            
        </a>
        
        <?php endif; ?>
    </P>

    <P>
        <?php if (strlen(trim($instagram))>0): ?>
            <a href="https://www.instagram.com/<?php echo $instagram; ?>">
            <img src= "<?php echo get_template_directory_uri();?>/assets/logo/IG.svg" alt="Instagram logo text">				
        </a>
        
        
        <?php endif; ?>
    </P>
    
</div>

