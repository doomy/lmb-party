<!doctype html>
<html lang="<?php echo $local->lang; ?>">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="LMB Party je celovíkendový megavečírek pořádaný na Berounsku..." />
        <meta name="keywords" content="lmb, party, metal, rock, pivo, mejdan, večírek" />
        <meta name="author" content="Vladimír Bártek">
        <title>LMB Party</title>
        <?php
            include_once($env->basedir . "lib/template/file_includer.php");
            $file_includer = new FileIncluder($env);
            $file_includer->include_multiple(array(
                'css/styles.css',
                'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js',
                'js/jquery.waitforimages.min.js',
                'js/slideshow.js'
            ), $env);
        ?>
        <link rel="image_src" href="images/logo.jpg" />
    </head>
    <body>
        <div class="bg">
            <header>
                <div id="header_container">
                    <img class="slideshow_border" src="css/ram.png" width="980"/>
                    <div id="img_container">

                    </div>
                    <h1 class="hidden">LMB Party</h1>
                    <a href="http://www.toplist.cz/" target="_top">
                        <img src="http://toplist.cz/count.asp?id=1452148" alt="TOPlist" border="0">
                    </a>
                </div>
            </header>
            <div id="container">
                <div class="select_language">
                        <a href="?l=<?php echo $local->switch_lang_shortcut ?>">[ <?php echo $local->switch_lang_caption ?> ]</a>
                </div>
                <div class="holder_content">
                    <h2><?php echo $local->what_is_lmb_caption ?></h2>
                     <p>
                        <?php echo $local->whatis_text1 ?>
                        <?php echo $local->whatis_text2 ?>
                     </p>
                </div>
                <div class="holder_content" >

                  <section class="group">
                    <a class="section_image" >
                        <embed src="images/lmb-party.swf" width="240" height="214" />
                    </a>

                   </section>
                  <section class="group">
                        <a class="section_image" >
                            <embed src="images/lmb-party-2.swf" width="240" height="214" />
                        </a>
                   </section>
                  <section class="group">
                        <a class="section_image" >
                            <embed src="images/lmb-party-3.swf" width="240" height="214" />
                        </a>
               	</section>
                </div>
                
                <div class="holder_content">
                    <h2><?php echo $local->quick_info_caption ?></h2>
                     <p>
                        <?php echo $local->quick_info_text ?>
                     </p>
                </div>
                
                <div class="holder_content">
                    <h2><?php echo $local->directions_caption ?></h2>
                     <p>
                        <?php echo $local->directions_text1 ?>
                        <?php echo $local->directions_text2 ?>
                     </p>
                </div>

                <div class="holder_content">
                    <h2><?php echo $local->accomodation_caption ?></h2>
                     <p>
                        <?php echo $local->accomodation_text1 ?>
                        <?php echo $local->accomodation_text2 ?>
                     </p>
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
