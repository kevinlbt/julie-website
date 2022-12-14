
<div class="bloc_page forest-back">
    <section class="defeco">
        <article class="art-def">
            <h1 class="Titre_Def"> ECOCENTRISME C'EST QUOI ? </h1>
            <p class="texte">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec sagittis massa. 
                Nulla facilisi. Cras id arcu lorem, et semper purus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Duis vel enim mi, in lobortis sem. 
                Vestibulum luctus elit eu libero ultrices id fermentum sem sagittis
            </p>
            <p class="texte">
                Nulla imperdiet mauris sed sapien dignissim id aliquam est aliquam. Maecenas non odio ipsum, a elementum nisi. 
                Mauris non erat eu erat placerat convallis.
            </p>
            <p class="texte">
                Vivamus sed libero nec mauris pulvinar facilisis ut non sem. Quisque mollis ullamcorper diam vel faucibus. 
                Vestibulum sollicitudin facilisis feugiat. Nulla euismod sodales hendrerit. 
            </p>
        </article>
        <img src="assets/images/tableau.jpg" alt="" class="tableau">
    </section>
</div> 


<div class="background" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="25"> <!-- Image de fond-->
    <div class="zone_texte_wrapper"> 
        <div class="zone_texte"><!-- fond blanc/zone de texte -->
            <p class="cit"> Nulla imperdiet mauris sed sapien dignissim id aliquam est aliquam. Maecenas non odio ipsum, a elementum nisi. 
                Mauris non erat eu erat placerat convallis.
            </p>
            <p class="aut"> Mauris in pretium urna </p>
        </div>
    </div>
</div>


<div class="objectif">
    <h2 class="titre_objectif"> Objectifs </h2>
    <div class="obj-bloc">
        <div data-aos="fade-right" data-aos-duration="1500" data-aos-delay="25">
            <img src="./assets/images/lock.png" alt="">
            <p class="texte">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos velit a commodi beatae consequatur ipsum esse consectetur sint.</p>
        </div>
        <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="25">
        <img src="./assets/images/target.png" alt="">
            <p class="texte">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos velit a commodi beatae consequatur ipsum esse consectetur sint.</p>
        </div>
        <div data-aos="fade-left" data-aos-duration="1500" data-aos-delay="25">
        <img src="./assets/images/loupe.png" alt="">
            <p class="texte">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos velit a commodi beatae consequatur ipsum esse consectetur sint.</p>
        </div>
    </div>

</div>


<div class="lighthouse-back"></div>


<h2 class="titre_article"> Articles </h2>
     
<div class="bloc_page_2">

<?php for($i = 0; $i <= 2; $i++) : ?> 
            
    <div class="article-b" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500" data-aos-easing="ease-in-out" data-aos-offset="100" >
        <div class="icones_1">
            <i class="fa-brands fa-pagelines"></i>
            <i class="fa-brands fa-pagelines"></i>
        </div>
        <h3 class="title_lonely"> <?= $result[$i]->getTitle(); ?> </h3>
        <div class="content"> <?= $result[$i]->getContent(); ?> </div>
        <div class="redim">
            <img src="<?= $result[$i]->getImagePath(); ?>" alt="" class="img">
        </div>
        <a href="./onearticle/<?= $result[$i]->getId(); ?>" class="bouton noselect">En savoir plus</a>
        <?php if($i === 0) {?> <img src="./assets/images/carre.png" class="carre" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500" data-aos-delay="1300" data-aos-easing="ease-in-out"></img><?php ;} ?>
        <?php if($i === 2) {?> <img src="./assets/images/carre.png" class="carre-bottom" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500" data-aos-delay="1300" data-aos-easing="ease-in-out" ></img><?php ;} ?>
    </div>

<?php endfor ?>

</div>