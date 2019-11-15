<section class="Infos">
        <h1>Titre :<?php  echo $maladie['title']  ?></h1>
        <p>Date de sortie : <time datetime="<?php  echo $maladie['releaseDate']  ?>"><?php  echo $maladie['releaseDate']  ?></time></p>

        <div class="Note"><p>Note :<?php  echo $maladie['rating']  ?></p><meter min="0" max="5" low="2.5" high="3.5" value="<?php  echo $maladie['rating']  ?>">Note</meter></div>
        <article class="synop"> Synopsis : <?php  echo $maladie['Synopsis']  ?></article>
    </section>
