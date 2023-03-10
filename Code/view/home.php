<?php

$title = 'home';

ob_start();
?>
    
<table>
    <thead>
        <tr>
            <th>N° d'abri</th>
            <th>Région</th>
            <th>Commune</th>
            <th>Rue</th>
            <th>N° rue</th>
        </tr>
    </thead>
    <tbody><?php foreach ($shelters as $shelter) : ?>
        <tr>

            <td><?=$shelter['id']; ?></td>
            <td><?=$shelter['region']; ?></td>
            <td><?=$shelter['commun']; ?></td>
            <td><?=$shelter['street']; ?></td>
            <td><?=$shelter['streetNumber']; ?></td>

        </tr>
    </tbody><?php endforeach; ?>
</table>

<?php
$content = ob_get_clean();
require 'view/gabarit.php';
?>