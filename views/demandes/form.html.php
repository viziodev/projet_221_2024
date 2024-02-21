
    <div class="bod">
        <fieldset class="container1">
            <legend align="center">Nouvelle Demande</legend>
            <div class="click">
                <div><span class="etat1">Type</span></div>
                <div><span class="etat1" class="etat2">Motif</span></div>
            </div>
            <form class="deu" action="<?=WEBROOT;?>" method="post">
                <div class="lo">
                    <select name="type" id="">
                        <option value="Absence">Absence</option>
                        <option value="Suspension">Suspension</option>
                        <option value="Annulation">Annulation</option>
                    </select>
                    <div class="text" >
                        <textarea name="motif" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="val">
                        <button type="reset">Annuler</button>
                        <button type="submit" name="action" value="form-add-dem">Enregistrer</button>
                    </div>
                </div>
           </form>
        </fieldset>
    </div>

