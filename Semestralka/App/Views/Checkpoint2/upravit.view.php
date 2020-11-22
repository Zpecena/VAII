<?php /** @var \App\Models\Uzivatel $data */ ?>
<form method="post">
    <input type="hidden" value="<?= @$_GET['id']?>" name="id">
    <div class="form-group">
        <label for="meno">Meno</label>
        <input type="text" class="form-control" id="meno" name="meno" placeholder="Niekto Nejaky" value="<?= @$data->getMeno()?>" >
    </div>
    <div class="form-group">
        <label for="pohlavie">Pohlavie</label>
        <select class="form-control" id="pohlavie" name="pohlavie">
            <option>Muz</option>
            <option>Zena</option>
            <option>Other</option>
        </select>
    </div>
    <div class="form-group">
        <label for="popis">Kratky popis</label>
        <textarea class="form-control" id="popis" rows="3" name="popis" ><?= @$data->getPopis()?></textarea>
    </div>
    <div>
        <input type="submit" value="odoslat">
    </div>
</form>