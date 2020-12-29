?><div class="<?=$cssClass['divClass']?>">
    <ul class="<?=$cssClass['ulClass']?>">
        <?php
            foreach ($arraySort as $value) {
               ?><li><a style="<?=$cssClass['fontSize']?>;<?=($_SERVER['REQUEST_URI'] == $value['path'])? 'text-decoration:underline' : 'text-decoration:none' ?>" href="<?=$value['path']?>"><?=cut($value['title'], 12)?></a></li>
               <?php
            }
