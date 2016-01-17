<?php

class buildHome{
    public function printHome(){
        ?>
        <div class="container-fluid">
            <div class="row well">
                <div class="col-md-10" style="background-color: #e3e3e3 ;">
                    <?php
                    $menu = $_GET['menu'];
                    if ($menu != 'contact'){
                        $filename = '././medias/home_files/'.$menu.'.txt';
                        $handle = fopen($filename, "r");
                        if ($handle) {
                            while (($line = fgets($handle)) !== false) {
                                echo $line.'<br />';
                            }

                            fclose($handle);
                        }
                        else {
                            echo 'File open failed';
                        }
                    }
                    else
                        echo    '<div style="margin:0 auto;"
                                    <p><strong>Cliquez sur le CV pour le t&eacute;l&eacute;charger en PDF</strong></p>
                                    <a href="././medias/CV Adrien Bonnet.pdf" download><img class="img-responsive" src="././medias/CV Adrien Bonnet.jpg" width="600" height="900"></a>
                                </div>'
                    ?>
                </div>
            </div>
        </div>
        <?php
    }
}