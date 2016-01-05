$(document).ready( function ()
{
    /* we are assigning change event handler for select box */
    /* it will run when selectbox options are changed */
    $('#database').change(function()
    {
        /* setting currently changed option value to option variable */
        var option = $(this).find('option:selected').val();
        window.location.href = '?database=' + option;
        /* setting input box value to selected option value */
        /*$('#showoption').val(option);*/

    });

    $('#table').change(function()
    {
        var option = $(this).find('option:selected').val();
        window.location.href += '&table=' + option;
    });
});