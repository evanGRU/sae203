<?php
            $lignes_resultat = $resultat->rowCount();
            if ($lignes_resultat>0) { 
                while($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
                    

                };
            } else { echo '<p>Pas de résultat !</p>'; 
            }
            $mabd = null;
?>




<article>
                <img src="../images/champion1.jpeg" alt="">
                <div class="text-card-bottom">
                    <div class="text-card-title">
                        <h3>AATROX</h3>
                    </div>
                    <div class="text-card">
                        <div class="text-card-lane">
                            <div class="ligne"></div>
                            <p>top</p>
                            <div class="ligne"></div>
                        </div>
                        <div class="text-card-cara">
                            <ul>
                                <li><span>RARETÉ :</span> Légendaire</li>
                                <li><span>SORTIE :</span> 24/03/2012</li>
                                <li><span>PRIX :</span> 950RP</li>
                            </ul>
                            <div>
                                <a href="">acheter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>