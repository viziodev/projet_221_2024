
    <div class="bod">
        <fieldset class="container">
            <legend align="center">Mes Demandes</legend>
            <div class="click1">
                <span class="etat">Etat</span>
                <select name="Etat" id="">
                    <option value=""></option>
                    <option value="">Acceptée</option>
                    <option value="">En Cours</option>
                    <option value="">Refusée</option>
                </select>
                <button type="submit">Ok</button>
            </div>
            <div class="tab">
                <div class="table">
                    <table>
                        <tr>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Etat</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($demandesEtu as $demande):?>
                            <tr>
                                <td><?php echo  $demande['date'] ?></td>
                                <td><?=$demande['type'] ?></td>
                                <td><?=$demande['etat'] ?></td>
                                <td><a href="wire 3 Etudiant.html">Détails?</a></td>
                            </tr>
                        <?php endforeach?>
                        
                    </table>
            </div>
            <div class="page">
                <a href="wire 1 Etudiant.html" class="li">
                    <span>&laquo; Precedent &raquo;</span>
                </a>
                <div class="link">
                    <a href="wire 1 Etudiant.html" class="active">1</a>
                    <a href="wire 1,1 Etudiant.html" class="">2</a>
                    <a href="wire 1,2 Etudiant.html" class="">3</a>
                    <a href="wire 1,3 Etudiant.html" class="">4</a>
                </div>
                <a href="wire 1,1 Etudiant.html" class="li">
                    <span>&laquo; Suivant &raquo;</span>
                </a>
            </div>
        </fieldset>
    </div>
