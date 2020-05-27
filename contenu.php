<?php

$contenuSite = array(
  "accueil" => array(
        "titre" => $nom_du_musee,
        "sous-titre" => "<h2>Le Musée</h2>",
        "musee-img" => "<img class=\"photo-musee\" src='templates/img/musee.jpg' alt='photo du musée alix pelletier'>",
        "texte" => "Lorem ipsum dolor sit amet. Integer rhoncus ornare dolor, at aliquam erat eleifend a. Morbi sed orci aliquam, fringilla nunc sed, ultrices tortor. In aliquam porttitor mauris eget laoreet.<br> In tincidunt quam vulputate turpis consequat feugiat. Nulla faucibus lectus in pharetra aliquet. Vivamus vehicula, eros vel vulputate tristique, lorem magna placerat diam, id pretium tellus magna et nisl. Fusce ornare tincidunt erat, in luctus sem dignissim eu. Nulla id orci ut tellus cursus tempus. Nulla at nunc consectetur, scelerisque erat sed, rutrum lacus. Nullam nec neque facilisis ex scelerisque mollis sit amet sit amet arcu. Ut volutpat metus eu eleifend euismod. Nunc dapibus et mi in cursus. Ut nunc magna, gravida vitae quam quis, consequat maximus ipsum. Cras mi odio, commodo sed massa at, blandit pellentesque nibh. Nunc sodales, dolor nec facilisis ultricies, eros tortor vestibulum sapien, id egestas risus turpis vitae tellus.",
      ),

  "recherche" => array(
        "sous-titre" => "Recherche d‘artiste",
        /*"menu-deroulant" => "<select name='formal' onchange='javascript:handleSelect(this)'>
                              <option disabled='disabled' default='true' disabled selected>Choisissez</option>
                              <option value='artiste1.php'>Elna Bernina</option>
                              <option value='artiste2.php'>Rat Musqué</option>
                              <option value='artiste3.php'>Chèvre Seguin</option>
                              <option value='artiste4.php'>Dolores Ipsum</option>
                            </select>"*/
        ),
  "artiste" => array(
          "artiste-1" => array(
                "nom" => "Elna Bernina",
                "figure-oeuvre" => "<img class='sample' src='templates/img/peinture-bernina.jpg' alt='peinture de montagnes'>
                                    <figcaption>La montagne</figcaption>",
                "biographie" => "<div class=\"citation\"><span>\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"</span></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla molestie imperdiet purus, sed convallis dolor rutrum a. Etiam molestie nibh quam, sit amet tincidunt velit interdum et. Mauris blandit est et dui aliquam mollis. Aliquam a ullamcorper velit. Donec condimentum risus et nisi posuere pulvinar. Maecenas malesuada, sem eu ultrices eleifend, eros felis consequat lacus, sit amet tempus orci eros et urna. Donec pharetra justo sed ligula fermentum aliquam. Morbi eget augue ante. Nulla sollicitudin tellus neque. Integer imperdiet varius dui, vel lacinia dolor viverra vitae. Cras vestibulum laoreet turpis vel ornare. Nunc quis velit id orci tincidunt pulvinar.</p>
                                    <p>Pellentesque risus nisi, sollicitudin vitae nulla in, dictum lobortis ligula. Duis at pellentesque purus. Etiam porta ex sit amet dolor malesuada, sit amet vestibulum lectus varius. Duis eu magna molestie ante tincidunt lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse mollis porta tortor, nec ultrices turpis luctus at. Vivamus dapibus odio et nisi finibus, nec suscipit dolor mattis. Curabitur tortor quam, sollicitudin rutrum dolor a, tincidunt semper augue. Pellentesque interdum libero non vehicula tempor. Integer aliquam varius enim.</p>
                                    <p>Cras molestie a sem vel iaculis. Ut eu luctus ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent maximus massa et feugiat luctus. Mauris erat nisi, cursus a fringilla ut, blandit nec enim. Fusce dictum porttitor erat, vitae rhoncus massa feugiat sed. Integer mollis justo purus, eu pharetra ligula molestie ut. In tristique commodo ex sit amet tempus. Morbi eget nibh id lorem ornare vehicula id eu augue. Phasellus blandit odio pretium lacus vulputate, in lobortis mauris sollicitudin.</p>
                                    <p>Nunc dictum est non vulputate aliquam. Aenean cursus odio et nibh ultrices maximus. Ut vitae diam neque. Etiam sit amet nibh neque. Mauris in interdum nulla, sit amet consequat orci. Aliquam erat volutpat. Vivamus eget dui et nulla finibus auctor nec eu tortor. Quisque tincidunt risus id libero semper, eu hendrerit nibh luctus. Nam ac ultrices lectus. Morbi euismod nisi auctor tortor condimentum accumsan. Proin porttitor ex magna, eget vestibulum quam faucibus vitae. Vestibulum tempor aliquet viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam eu ultricies nisl, id feugiat nisi. Aliquam sodales non magna vel vestibulum. Proin et sodales ex.</p>
                                    <p>Nullam nec aliquet risus, nec iaculis purus. Proin odio neque, sodales eu convallis at, tincidunt sit amet lacus. Nulla rutrum velit mi, eu tempus elit imperdiet ac. Pellentesque suscipit lectus ac urna tincidunt, quis lacinia lorem tincidunt. Cras cursus, metus vel suscipit ultricies, felis felis iaculis arcu, vitae tempor felis est in massa. Fusce dictum ullamcorper pellentesque. Praesent id dolor pharetra risus tincidunt faucibus. Quisque consectetur, dolor ac euismod convallis, ligula risus vulputate ipsum, vel hendrerit enim enim nec sapien. In posuere porta maximus. Pellentesque quis ornare lorem, nec vestibulum est.</p>",
                "aside" => array(
                  "portrait" => "<img class='portrait-artiste' src='templates/img/portrait-bernina.png' alt='portrait de Elna Bernina'>
                                      <figcaption>Elna Bernina en 1895.</figcaption>",
                  "citation" => "<p>Aliquam sodales non magna vel vestibulum. Proin et sodales ex. Nullam nec aliquet risus, neciaculis purus.</p>",
                ),
              ),
          "artiste-2" => array(
            "nom" => "Rat Musqué",
            "figure-oeuvre" => "<img class='sample' src='templates/img/bayard.jpg' alt='gravure bayard'>
                                <figcaption>Le chevalier Bayard</figcaption>",
              "biographie" => "<div class=\"citation\"><span>\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla molestie imperdiet purus, sed convallis dolor rutrum a. Etiam molestie nibh quam, sit amet tincidunt velit interdum et. Mauris blandit est et dui aliquam mollis. Aliquam a ullamcorper velit. Donec condimentum risus et nisi posuere pulvinar. Maecenas malesuada, sem eu ultrices eleifend, eros felis consequat lacus, sit amet tempus orci eros et urna. Donec pharetra justo sed ligula fermentum aliquam. Morbi eget augue ante. Nulla sollicitudin tellus neque. Integer imperdiet varius dui, vel lacinia dolor viverra vitae. Cras vestibulum laoreet turpis vel ornare. Nunc quis velit id orci tincidunt pulvinar.</p>
                                <p>Pellentesque risus nisi, sollicitudin vitae nulla in, dictum lobortis ligula. Duis at pellentesque purus. Etiam porta ex sit amet dolor malesuada, sit amet vestibulum lectus varius. Duis eu magna molestie ante tincidunt lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse mollis porta tortor, nec ultrices turpis luctus at. Vivamus dapibus odio et nisi finibus, nec suscipit dolor mattis. Curabitur tortor quam, sollicitudin rutrum dolor a, tincidunt semper augue. Pellentesque interdum libero non vehicula tempor. Integer aliquam varius enim.</p>
                                <p>Cras molestie a sem vel iaculis. Ut eu luctus ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent maximus massa et feugiat luctus. Mauris erat nisi, cursus a fringilla ut, blandit nec enim. Fusce dictum porttitor erat, vitae rhoncus massa feugiat sed. Integer mollis justo purus, eu pharetra ligula molestie ut. In tristique commodo ex sit amet tempus. Morbi eget nibh id lorem ornare vehicula id eu augue. Phasellus blandit odio pretium lacus vulputate, in lobortis mauris sollicitudin.</p>
                                <p>Nunc dictum est non vulputate aliquam. Aenean cursus odio et nibh ultrices maximus. Ut vitae diam neque. Etiam sit amet nibh neque. Mauris in interdum nulla, sit amet consequat orci. Aliquam erat volutpat. Vivamus eget dui et nulla finibus auctor nec eu tortor. Quisque tincidunt risus id libero semper, eu hendrerit nibh luctus. Nam ac ultrices lectus. Morbi euismod nisi auctor tortor condimentum accumsan. Proin porttitor ex magna, eget vestibulum quam faucibus vitae. Vestibulum tempor aliquet viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam eu ultricies nisl, id feugiat nisi. Aliquam sodales non magna vel vestibulum. Proin et sodales ex.</p>
                                <p>Nullam nec aliquet risus, nec iaculis purus. Proin odio neque, sodales eu convallis at, tincidunt sit amet lacus. Nulla rutrum velit mi, eu tempus elit imperdiet ac. Pellentesque suscipit lectus ac urna tincidunt, quis lacinia lorem tincidunt. Cras cursus, metus vel suscipit ultricies, felis felis iaculis arcu, vitae tempor felis est in massa. Fusce dictum ullamcorper pellentesque. Praesent id dolor pharetra risus tincidunt faucibus. Quisque consectetur, dolor ac euismod convallis, ligula risus vulputate ipsum, vel hendrerit enim enim nec sapien. In posuere porta maximus. Pellentesque quis ornare lorem, nec vestibulum est.</p>",
                "aside" => array(
                  "portrait" => "<img class='portrait-artiste' src='templates/img/portrait-rat-musque.png' alt='portrait de Rat Musqué'>
                                      <figcaption>Rat Musqué à Grenoble.</figcaption>",
                  "citation" => "<p>Aliquam sodales non magna vel vestibulum. Proin et sodales ex. Nullam nec aliquet risus, neciaculis purus.</p>",
                ),
          ),
        ),

);
