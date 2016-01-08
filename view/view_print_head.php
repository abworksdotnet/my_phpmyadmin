<?php
class buildHead
{
    public function printNavBar()
    {
        ?>

        <div class="navbar navbar-custom navbar-fixed-top hidden-tablet hidden-phone">

            <div class="navbar-header">
                <a href="layout.php" class="navbar-brand glyphicon glyphicon-home" title="Home"></a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="nav navbar-nav">
                    <li><a href="layout.php"><strong>Databases Info</strong></a></li>
                    <li><a href="layout.php"><strong>SQL Editor</strong></a></li>
                </ul>



                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="navbar-form" role="search">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </li>
                    <li>
                        <a href="model/model_logout.php"
                           class="glyphicon glyphicon-log-out"
                            <?php echo 'title=\'Logout ' . $_SESSION['login'] . '\''; ?>>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
        <?php
    }
}
