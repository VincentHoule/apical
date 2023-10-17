
<?php if (is_front_page()):;?>
    <?php
    $compteur = 1;
    $args = array(
    'post_type'=> 'post',
    'orderby'    => 'ID',
    'post_status' => 'publish',
    'order'    => 'DESC'
     // this will retrive all the post that is published
    );
    $result = new WP_Query( $args );?>
    <div id="titre_gros_post">
        <hr id="ligne">
        <h1 id="titre_post">Mes articles</h1>
        <hr id="ligne">
    </div>
    <div id="btn_place">
        <button onclick="tous_com()" id="btn_dev" class="btn">Tout développer</button>
    </div>
    <?php if ( have_posts() ) : while ( $result->have_posts() ) : $result->the_post(); ?>
        <div  id="article_collapse">
            <div id="article">
                <a onclick="unique_com(<?php echo $compteur?>)" id="titre_article">
                    <?php echo $compteur.". "; the_title()?>
                </a>
            </div>
    <?php

        $comments_query = get_comments(array(
                'post_id' => get_the_ID(),
                'number' => '10'
        ));
        $comments = $comments_query;
        if ( $comments ) {
            $compteur2 = 1;?>

            <ul id="list_com">
        <?php foreach ( $comments as $comment ) {?>
            <li id="commentaire" class="none <?php echo "com".$compteur?>">
                <?php echo $compteur.".".$compteur2. " ". $comment->comment_content ?>
            </li>
            <?php $compteur2 = $compteur2 +1?>
        <?php }
        }
        else{?>
            <li id="commentaire" class="none <?php echo "com".$compteur?>">
                <?php echo $compteur.".1 aucun commentaire" ?>
            </li>
        <?php }?>
            </ul>

        </div>
    <?php $compteur = $compteur +1?>

    <?php endwhile; ?>




    <?php else: ?>

        <p>No posts found. :(</p>

    <?php endif; ?>
<?php else: ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div id="titre_gros_post">
            <hr id="ligne">
            <h1 id="titre_post"><?php the_title()?></h1>
            <hr id="ligne">
        </div>

        <div id="page">
            <div id="contenu"><?php the_content()?></div>
            <div id="info_page">
                <div id="auteur">Par <?php the_author()?></div>
                <div id="date_post">Écrie: <?php the_date()?></div>
            </div>

        </div>
    <?php endwhile; ?>
        <?php
        if ( get_next_posts_link() ) {
            next_posts_link();
        }
        ?>
        <?php
        if ( get_previous_posts_link() ) {
            previous_posts_link();
        }
        ?>

    <?php else: ?>

        <p>No posts found. :(</p>

    <?php endif; ?>
<?php endif;
content();?>
