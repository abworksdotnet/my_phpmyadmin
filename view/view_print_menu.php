<?php

class buildMenu{
    public function printMenu($db_info, $tb_info, $error){
        ?>
        <div class="col-md-2" style="padding-top: 10px">
            <ul class="nav nav-list">
                <?php   echo  $this->printDBList($db_info);
                        echo  $this->printTBList($tb_info, $error);
                        echo  $this->printPicker();
                ?>
            </ul>
        </div>
        <?php
    }

    private function printDBList($db_info)
    {
        $db_name = $db_info->dbName();
        ?>
        <li class="nav-header"><strong>Browse databases :</strong></li>
        <select class="form-control" id="database">
            <option>(Select Database)</option>
            <?php
            for ($i = 0; $i < count($db_name); $i++) {
                echo    '<option>' . $db_name[$i] . '</option>';
            }
            ?>
        </select>
    <?php
    }

    private function printTBList($tb_info, $error){
        if (isset($_GET['database'])) {
            $db_name = $_GET['database'];
            try {$dbo = new PDO('mysql:charset=utf8mb4;host=localhost;dbname=' . $db_name, $_SESSION['login'], $_SESSION['password']);}
            catch(Exception $e){die($error->postError('Database ' . $db_name . ' not found'));}

            $tb_name = $tb_info->tbName();
            ?>
            <li class="nav-header">
                <strong>Browse tables :</strong>
            </li>
            <select class="form-control" id="table" onchange="changeTable('<?php echo $db_name; ?>');">
                <option>(Select Table)</option>
                <?php
                for ($i = 0; $i < count($tb_name); $i++) {
                    echo '<option>' . $tb_name[$i] . '</option>';
                }
                ?>
            </select>
            <?php
        }

    }

    private function printPicker(){
        if (isset($_GET['database']) && isset($_GET['table'])){

            $db_name = $_GET['database'];
            $tb_name = $_GET['table'];

            ?>
            <li class="nav-header"><strong>Rows :</strong></li>
            <div class="text-center">
                <div class="btn-group btn-sm" role="group" aria-label="...">
                    <button type="button" class="btn btn-default" onclick="tableRows('<?php echo $db_name;?>', '<?php echo $tb_name;?>', 10)" >10</button>
                    <button type="button" class="btn btn-default" onclick="tableRows('<?php echo $db_name;?>', '<?php echo $tb_name;?>', 100)" >100</button>
                    <button type="button" class="btn btn-default" onclick="tableRows('<?php echo $db_name;?>', '<?php echo $tb_name;?>', 1000)" >1000</button>
                    <button type="button" class="btn btn-default" onclick="tableRows('<?php echo $db_name;?>', '<?php echo $tb_name;?>', 0)" >All</button>
                </div>
            </div>
            <?php
        }
    }
}