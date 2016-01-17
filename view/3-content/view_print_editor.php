<?php
class buildEditor{
    public function printEditor(){
        ?>
        <div class="well">
            <div class="container-fluid">
            <p class="muted"><strong>Write here your MySQL queries :</strong></p>
            <div class="col-md-12 well" style="background-color: #e3e3e3 ;">
                <textarea id='output' name="query" rows="8" style="width: 100%;" placeholder="//A venir"></textarea>
                <div>
                    <button class="btn btn-primary" onclick="eraseText()">Empty</button>
                    <button class="btn btn-danger">Go</button>
                </div>
            </div>
        </div>
        <?php
    }
}