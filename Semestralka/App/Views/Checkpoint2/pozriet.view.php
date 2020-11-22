<?php /** @var \App\Models\Uzivatel $data */ ?>
<div class="container">
    <div class="row">
        <div class="span4 well">
            <div class="row">
                <div class="span1"><a class="thumbnail"><img src="./App/Pictures/<?= $data->getPohlavie()?>.png" alt="" width="200" height="200"></a></div>
                <div class="span3">
                    <p><strong><?= $data->getMeno()?></strong></p>
                    <p><?= $data->getPohlavie()?></p>
                    <p><?= $data->getPopis()?></p>
                    <a class="btn btn-primary" href="?c=Checkpoint2&a=upravit&id=<?= $data->getId()?>" role="button">Edit</a>
                    <a class="btn btn-Danger" href="?c=Checkpoint2&a=vymazat&id=<?= $data->getId()?>" role="button">Vymazat</a>

                </div>
            </div>
        </div>
    </div>
</div>