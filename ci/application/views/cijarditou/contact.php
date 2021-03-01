            <br><br>
        <p>* Ces zones sont obligatoires</p>
<!--formulaire -->
<!--SANS CODEIGNITER :<form name="jarditouessai" action="contact_script.php" method="POST" id="formulaire">-->
<!--AVEC CODEIGNITER:-->
    <?php echo form_open(); ?>
    <fieldset>
            <legend><h3>Vos coordonnées</h3></legend>
                <div class="form-group">
                    <label for="nom">Votre nom*</label>
                    <!-- php: Si l'utilisateur rempli le champ, les caractères saisis sont insérés dans value et persistent tat que le formulaire n'est pas correct et envoyé. Idem pour les champs suivants -->
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Veuillez saisir votre nom" value="<?php echo htmlentities($_POST["nom"])?>"><Br>
                    <!-- php =  affichage d'un message d'erreur si le champ est vide ou incorrect (idem pour les champs suivant) -->
                    <?php if(isset($erreur_nom)){?>
                        <?php echo "<span style='color:red;'>$erreur_nom</span>";?>
                        <?php }?>
                </div>
                <div class="form-group">
                    <label for="prenom">Votre prénom*</label>
                    <input type="text" class="form-control" name ="prenom" id="prenom" placeholder="Veuillez saisir votre prénom" value="<?php echo htmlentities($_POST["prenom"])?>"> <br>
                    <!-- Validation php-->
                    <?php if(isset($erreur_prenom)){?>
                        <?php echo "<span style='color:red;'>$erreur_prenom</span>";?>
                        <?php }?>
                </div>
                <div class="form-group">
                <legend class="col-form-label">Genre*</legend>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="genre" id="optionsexe" <?php if (isset($_POST["genre"])) { if ($_POST["genre"] == "femme") { echo "checked"; } } ?> value="femme">
                    <label class="form-check-label" for="inlineRadio1">Féminin</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="genre" id="optionsexe2" <?php if (isset($_POST["genre"])) { if ($_POST["genre"] == "homme") { echo "checked"; } } ?> value="homme">
                    <label class="form-check-label" for="inlineRadio1">Masculin</label>
                    </div>
                    <br>
                    <!-- validation php -->
                    <?php if(isset($erreur_genre)){?>
                        <?php echo "<span style='color:red;'>$erreur_genre</span>";?>
                        <?php }?>
                </div>
                <div class="form-group">
                    <label for="datenaissance">Date de naissance</label>
                    <input type="text" class="form-control" name="date" id="datenaissance" placeholder="jj/mm/aaaa" value="<?php echo htmlentities($_POST["date"])?>"><br>
                    <!-- Validation php-->
                    <?php if(isset($erreur_date)){?>
                        <?php echo "<span style='color:red;'>$erreur_date</span>";?>
                        <?php }?>
                </div>
                <div class="form-group">
                    <label for="postal">Code postal*</label>
                    <input type="text" class="form-control" name="postal" id="postal"value="<?php echo htmlentities($_POST["postal"])?>"><br>   
                    <!-- validation php -->
                    <?php if(isset($erreur_postal)){?>
                        <?php echo "<span style='color:red;'>$erreur_postal</span>";?>
                        <?php }?>
                </div> 
                <div class="form-group">
                    <label for="adresse">Adresse*</label>
                    <input type="text" class="form-control" name ="adresse" id="adresse"value="<?php echo htmlentities($_POST["adresse"])?>"><br>
                    <!-- validation php -->  
                    <?php if(isset($erreur_adresse)){?>
                        <?php echo "<span style='color:red;'>$erreur_adresse</span>";?>
                        <?php }?>
                </div> 
                <div class="form-group">
                    <label for="ville">ville*</label>
                    <input type="text" class="form-control" name="ville" id="ville" value="<?php echo htmlentities($_POST["ville"])?>"><br> 
                     <!-- validation php --> 
                    <?php if(isset($erreur_ville)){?>
                      <?php echo "<span style='color:red;'>$erreur_ville</span>"?>
                      <?php }?>
                </div>
                <div class="form-group">
                    <label for="mail">Email*</label>
                    <input type="text" class="form-control" name="mail" id="mail" placeholder="dave.loper@afpa.fr" value="<?php echo htmlentities($_POST["mail"])?>"><br>  
                    <!-- validation php --> 
                    <?php if(isset($erreur_mail)){?>
                      <?php echo "<span style='color:red;'>$erreur_mail</span>";?>
                      <?php }?>  
                </div> 
          </fieldset>
          <!--formulaire 2e partie: demande-->
          <fieldset>
            <legend><h3>Votre demande</h3></legend>
                <div class="form-group">
                    <label for="sujet">Sujet*</label>
                    <select class="form-control" name="sujet[]" id="sujet"><br>
                        <option value = "Veuillez sélectionner un sujet">Veuillez sélectionner un sujet</option>
                        <option value = "Mes commandes"<?php if ($choixsujet == "Mes commandes") {echo "selected";}?>>Mes commandes</option>
                        <option value = "Question sur un projet"<?php if ($choixsujet == "Question sur un projet") {echo "selected";}?>>Question sur un projet</option>
                        <option value = "Réclamation"<?php if ($choixsujet == "Réclamation") {echo "selected";}?>>Réclamation</option>
                        <option value = "Autres"<?php if ($choixsujet == "Autres") {echo "selected";}?>>Autres</option>
                    </select><br>
                    <!-- validation php -->
                    <?php if($choixsujet == "Veuillez sélectionner un sujet"){echo "<span style='color:red;'>$erreur_sujet</span>";}?> 
                    </div>
                <div class="form-group">
                    <label for="question">Votre question*:</label>
                    <textarea class="form-control" name ="question" id="question" rows="3"><?php echo htmlspecialchars($_POST["question"]); ?></textarea><br>
                    <!-- validation php -->
                    <?php if(isset($erreur_question)){?>
                      <?php echo "<span style='color:red;'>$erreur_question</span>";?>
                      <?php }?> 
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                        J'accepte le traitement informatique de ce formulaire
                        </label>
                    </div>
                </div>
                <input type="submit" class="btn btn-dark" value="Envoyer" id="envoyer">
                <input type="submit" class="btn btn-dark" value="Annuler">
            </fieldset>             
        </form>
<!--fin du formulaire-->
        <br>
        
