<?php
class buildBody
{
    public function printBody($db_info, $tb_info, $array_info, $error)
    {
        ?>
        <div class="container-fluid">
            <div class="row well">
                <?php
                if (!isset($_GET['database']) && !isset($_GET['table'])) {
                    $this->printDbInfo($db_info);
                }

                if (isset($_GET['database']) && !isset($_GET['table'])) {
                    $this->printTbInfo($tb_info);
                }

                if (isset($_GET['database']) && isset($_GET['table'])) {
                    $this->printArray($array_info, $error);
                }

                ?>
            </div>
        </div>

        <?php
    }

    private function printDbInfo($db_info)
    {
        $db_name = $db_info->dbName();
        $db_size = $db_info->dbSize();
        $db_creationDate = $db_info->dbCreationDate();
        $i = 0;
        $j = 1;
        ?>
        <div class="col-md-10" style="background-color: #e3e3e3 ;">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Database Name</th>
                    <th>Size (Kb)</th>
                    <th>Date of Creation</th>
                    <th style="width: 36px;"></th>
                </tr>
                </thead>
                <tbody>
                <?php

                while ($i < count($db_name)) {
                    echo '<tr><td>' . $j . '</td><td>' . $db_name[$i] . '</td><td>' . $db_size[$i] . '</td><td>' . $db_creationDate[$i] . '</td></tr>';
                    $i++;
                    $j++;
                }

                ?>
                </tbody>
            </table>
        </div>
        <?php
    }

    private function printTbInfo($tb_info)
    {
        $tb_name = $tb_info->tbName();
        $tb_rows = $tb_info->tbRows();
        $tb_col = $tb_info->tbCol();
        $i = 0;
        $j = 1;
        ?>
        <div class="col-md-10" style="background-color: #e3e3e3 ;">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Table Name</th>
                    <th>Columns</th>
                    <th>Rows</th>
                    <th style="width: 36px;"></th>
                </tr>
                </thead>
                <tbody>
                <?php

                while ($i < count($tb_name)) {
                    echo '<tr><td>' . $j . '</td><td>' . $tb_name[$i] . '</td><td>' . $tb_col[$i] . '</td><td>' . $tb_rows[$i] . '</td></tr>';
                    $i++;
                    $j++;
                }

                ?>
                </tbody>
            </table>
        </div>
        <?php
    }

    private function printArray($array_info, $error)
    {
        if (isset($_GET['database']) && isset($_GET['table'])) {
            $db_name = $_GET['database'];
            $tb_name = $_GET['table'];
            $sql = 'SELECT COUNT(*) FROM information_schema.TABLES WHERE TABLE_SCHEMA = ' . '\'' . $db_name . '\'' . ' AND TABLE_NAME LIKE' . '\'' . $tb_name . '\'';
            $dbo = new PDO('mysql:charset=utf8mb4;host=localhost;dbname=' . $db_name, $_SESSION['login'], $_SESSION['password']);
        }
        $result = $dbo->query($sql);
        if ($result->fetchColumn() > 0) {
            $array_row = $array_info->arrayRow();
            $array_result = $array_info->arrayResult();
            ?>

            <div class="table-responsive" style="background-color: #e3e3e3 ;">
                <table class="table table-bordered table-condensed table-hover">
                    <thead>
                    <tr>
                        <?php
                        foreach ($array_row as $key => $val) {
                            echo '<th>' . $key . '</th>';
                        }
                        ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = $array_result->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        foreach ($row as $key => $val) {
                            echo "<td>$val</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <?php
        }
        else
            die($error->postError('Table ' . $tb_name . ' not found'));
    }
}