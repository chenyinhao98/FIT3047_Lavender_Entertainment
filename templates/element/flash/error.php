<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<<<<<<< HEAD
<div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div>
=======
<div class="alert alert-danger alert-dismissable" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <?= strip_tags($message, '<br>') ?>
</div>
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
