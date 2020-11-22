
<div class="list-group">
    <?php
    /** @var \App\Models\Uzivatel[] $data */
    foreach ($data as $uzivatel) { ?>
    <a href="?c=Checkpoint2&a=pozriet&id=<?= $uzivatel->getId() ?>" class="list-group-item list-group-item-action"><?= $uzivatel->getMeno() ?></a>
    <?php } ?>
</div>