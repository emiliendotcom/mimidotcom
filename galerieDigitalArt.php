<?php 
    function galerieDigitalArt($titre)
    {
        $dir = 'digitalart/'.$titre.'/*.{jpg,jpeg,gif,png}';
        $files = glob($dir,GLOB_BRACE);
        $i = 1;
        foreach($files as $image)
        { 
            $f= str_replace($dir,'',$image);
            echo '<div class="item"><a href="image.php?dessin='.$f.'"><img alt="" src="'.$f.'"></a></div>';
            $i++;
        }
    }

?>