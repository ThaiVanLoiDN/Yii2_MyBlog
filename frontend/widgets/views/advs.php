<?php

use frontend\widgets\Advs;
use yii\helpers\Html;

?>

<?php 

    if(count($listAdvs)){
        $count = count($listAdvs);

        $random = rand(1, $count);
?>

<a href="<?= $listAdvs[$count-1]->link; ?>" title="<?= $listAdvs[$count-1]->name; ?>" rel="dofollow" target="_blank">
    <img style="margin-top: 20px" src="/upload/<?= $listAdvs[$count-1]->image; ?>" alt="<?= $listAdvs[$count-1]->name; ?>"> 
</a>

<?php                                    
    }
?>