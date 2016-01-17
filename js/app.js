$(document).ready( function ()
{
    /*$('#database').change(function(page)
    {
        var database = $(this).find('option:selected').val();
        document.location.href = '?database=' + database;

    });*/

    var text = $('textarea#query').val();
});

function eraseText() {
    document.getElementById("output").value = "";
}

function homeMenu (menu) {
    var form = document.createElement('form');
    form.setAttribute('method', 'post');
    form.setAttribute('action', 'layout.php?page=home&menu=' + menu);
    document.body.appendChild(form)
    form.submit();
}

function home () {
    var form = document.createElement('form');
    form.setAttribute('method', 'post');
    form.setAttribute('action', 'layout.php?page=home');
    document.body.appendChild(form)
    form.submit();
}

function overview () {
    var form = document.createElement('form');
    form.setAttribute('method', 'post');
    form.setAttribute('action', 'layout.php?page=overview');
    document.body.appendChild(form)
    form.submit();
}

function editor () {
    var form = document.createElement('form');
    form.setAttribute('method', 'post');
    form.setAttribute('action', 'layout.php?page=editor');
    document.body.appendChild(form)
    form.submit();
}

function changeDatabase(page) {
    var selectBox = document.getElementById("database");
    var database = selectBox.options[selectBox.selectedIndex].value;
    document.location.href='layout.php?page=' + page + '&database=' + database;
}

function changeTable(page, database) {
    var selectBox = document.getElementById("table");
    var table = selectBox.options[selectBox.selectedIndex].value;
    document.location.href='layout.php?page=' + page + '&database=' + database +  '&table=' + table;
}

function tableRows(page, database, table, rows){
    document.location.href='layout.php?page=' + page + '&database=' + database +  '&table=' + table + '&rows=' + rows;
}