<!doctype html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <title>LMB Party</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    </head>
    <body>
        <div class="bg">
            <div id="container">
                <header>
                    <h1>LMB Party</h1>
                        <div class="select_language">
                            <a href="?l=<?php echo $local->switch_lang_shortcut ?>">[ <?php echo $local->switch_lang_caption ?> ]</a>
                        </div>
                    <hr />
                </header>
                <div class="holder_content">
                  <section class="group">
                     <h3><?php echo $local->what_is_lmb_caption ?></h3>
                     <p>
                        <?php echo $local->whatis_text1 ?>

                        <a class="section_image"><img src="images/picture1.jpg" width="240" height="214" alt="picture1"/></a><br />

                        <?php echo $local->whatis_text2 ?>
                     </p>
                   </section>
                  <section class="group">
                     <h3><?php echo $local->directions_caption ?></h3>
                     <p>
                        <?php echo $local->directions_text1 ?>
                        
                        <a class="section_image" ><img src="images/picture2.jpg" width="240" height="214" alt="picture1"/></a>

                        <?php echo $local->directions_text2 ?>
                     </p>


                   </section>
                  <section class="group">
                     <h3><?php echo $local->accomodation_caption ?></h3>
                     <p>
                        <?php echo $local->accomodation_text1 ?>
                        
                        <a class="section_image"><img src="images/picture3.jpg" width="240" height="214" alt="picture1"/></a>
                        
                        <?php echo $local->accomodation_text2 ?>
                     </p>
               	</section>
                </div>
                <div class="holder_content">
                    <h1><?php echo $local->more_info_soon ?></h1>
                </div>
            </div>
            <footer>
                <div class="container">
                    <div id="left_footer"> © 2012-2013 under teh sign of two omegas </div>
                    <div id="right_footer"> LMB PARTY</a> </div>
                </div>
            </footer>
        </div>
    </body>
</html>
