$(document).ready( function ()
{
    $('#database').change(function()
    {
        var option = $(this).find('option:selected').val();
        window.location.href = '?database=' + option;
        /* setting input box value to selected option value */
        /*$('#showoption').val(option);*/

    });
});

function changeTable(database) {
    var selectBox = document.getElementById("table");
    var table = selectBox.options[selectBox.selectedIndex].value;
    document.location.href='layout.php?database=' + database +  '&table=' + table;
}

function tableRows(database, table, rows){
    document.location.href='layout.php?database=' + database +  '&table=' + table + '&rows=' + rows;
}