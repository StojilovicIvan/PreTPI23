<?php

$title = 'home';

ob_start();
?>

<?php foreach ($shelters as $shelter) : ?>
    <?php if ($shelter['active'] == true) : ?>
        <?php $shelter['Address']; ?>
    <?php endif; ?>
<?php endforeach; ?>


<?php
$content = ob_get_clean();
require 'gabarit.php';
?>