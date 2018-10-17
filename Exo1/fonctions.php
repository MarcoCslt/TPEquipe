<?php
    function Calcul($nbdep,$nbfin,$pas,$color)
    {
        if ($color == "rouge")
        {
            echo '<span style = "color: red"';
        }
        elseif ($color == "bleu")
        {
            echo '<span style = "color: blue"';            
        }
        for ($i = $nbdep; $i <= $nbfin ; $i += $pas) 
        { 
            echo $i.'<br>';
        }
        echo '</span>';
    }
?>