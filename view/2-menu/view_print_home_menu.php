<?php
class buildHomeMenu{
    public function printHomeMenu(){
        ?>
        <div class="col-md-2" style="padding-top: 10px">
            <ul class="nav nav-stacked">
                <li><a href="./layout.php?page=home&menu=presentation" name="presentation"  type="submit" id="presentation" onclick="homeMenu('presentation')" style="color: #565b5a"><strong>Pr&eacute;sentation</strong></a></li>
                <li><a href="./layout.php?page=home&menu=statuts" name="statuts"  type="submit" id="statuts" onclick="homeMenu('statuts')" style="color: #565b5a"><strong>Statuts</strong></a></li>
                <li><a href="./layout.php?page=home&menu=notes" name="notes"  type="submit" id="notes" onclick="homeMenu('notes')" style="color: #565b5a"><strong>Notes</strong></a></li>
                <li><a href="./layout.php?page=home&menu=contact" name="contact"  type="submit" id="notes" onclick="homeMenu('contact')" style="color: #565b5a"><strong>Contact</strong></a></li>
            </ul>
        </div>
        <?php
    }
}