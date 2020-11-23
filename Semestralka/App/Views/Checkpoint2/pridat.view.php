
<form method="post">

    <div class="form-group">
        <label for="meno">Meno</label>
        <input type="text" class="form-control" id="meno" name="meno" placeholder="Niekto" required minlength="5" maxlength="25" pattern="^\S+$">
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
        <textarea class="form-control" id="popis" rows="3" name="popis" placeholder="Nejaky popisok" required minlength="20" maxlength="150"></textarea>
    </div>
    <div>
        <input type="submit" value="odoslat">
    </div>
</form>

