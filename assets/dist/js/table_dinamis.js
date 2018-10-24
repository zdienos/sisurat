//================================MGM========================================
$('tbody tr')
    .find('td')
    //.append('<input type="button" value="Delete" class="del"/>')
    .parent(); //traversing to 'tr' Element
    //.append('<td><a href="#" class="delrow">Delete Row</a></td>');

// For select all checkbox in table
$('#checkedAll_mgm').click(function (e) {
  //e.preventDefault();
    $(this).closest('#tblAddRow_mgm').find('td input:checkbox').prop('checked', this.checked);
});

// Add row the table
$('#btnAddRow_mgm').on('click', function() {
    var lastRow = $('#tblAddRow_mgm tbody tr:last').html();
    //alert(lastRow);
    $('#tblAddRow_mgm tbody').append('<tr>' + lastRow + '</tr>');
    $('#tblAddRow_mgm tbody tr:last input').val('');
});

// Delete last row in the table
$('#btnDelLastRow_mgm').on('click', function() {
    var lenRow = $('#tblAddRow_mgm tbody tr').length;
    //alert(lenRow);
    if (lenRow == 1 || lenRow <= 1) {
        alert("Can't remove all row!");
    } else {
        $('#tblAddRow_mgm tbody tr:last').remove();
    }
});

// Delete row on click in the table
$('#tblAddRow_mgm').on('click', 'tr a', function(e) {
    var lenRow = $('#tblAddRow_mgm tbody tr').length;
    e.preventDefault();
    if (lenRow == 1 || lenRow <= 1) {
        alert("Can't remove all row!");
    } else {
        $(this).parents('tr').remove();
    }
});

// Delete selected checkbox in the table
$('#btnDelCheckRow_mgm').click(function() {
  var lenRow    = $('#tblAddRow_mgm tbody tr').length;
    var lenChecked  = $("#tblAddRow_mgm input[type='checkbox']:checked").length;
    var row = $("#tblAddRow_mgm tbody input[type='checkbox']:checked").parent().parent();
    //alert(lenRow + ' - ' + lenChecked);
    if (lenRow == 1 || lenRow <= 1 || lenChecked >= lenRow) {
        alert("Tidak dapat menghapus semua baris!");
    } else {
        row.remove();
    }
});
//===========================================================================================


//================================BIAYA======================================================

// For select all checkbox in table
$('#checkedAll_biaya').click(function (e) {
  //e.preventDefault();
    $(this).closest('#tblAddRow_biaya').find('td input:checkbox').prop('checked', this.checked);
});

// Add row the table
$('#btnAddRow_biaya').on('click', function() {
    var lastRow = $('#tblAddRow_biaya tbody tr:last').html();
    //alert(lastRow);
    $('#tblAddRow_biaya tbody').append('<tr>' + lastRow + '</tr>');
    $('#tblAddRow_biaya tbody tr:last input').val('');
});

// Delete last row in the table
$('#btnDelLastRow_biaya').on('click', function() {
    var lenRow = $('#tblAddRow_biaya tbody tr').length;
    //alert(lenRow);
    if (lenRow == 1 || lenRow <= 1) {
        alert("Can't remove all row!");
    } else {
        $('#tblAddRow_biaya tbody tr:last').remove();
    }
});

// Delete row on click in the table
$('#tblAddRow_biaya').on('click', 'tr a', function(e) {
    var lenRow = $('#tblAddRow_biaya tbody tr').length;
    e.preventDefault();
    if (lenRow == 1 || lenRow <= 1) {
        alert("Can't remove all row!");
    } else {
        $(this).parents('tr').remove();
    }
});

// Delete selected checkbox in the table
$('#btnDelCheckRow_biaya').click(function() {
  var lenRow    = $('#tblAddRow_biaya tbody tr').length;
    var lenChecked  = $("#tblAddRow_biaya input[type='checkbox']:checked").length;
    var row = $("#tblAddRow_biaya tbody input[type='checkbox']:checked").parent().parent();
    //alert(lenRow + ' - ' + lenChecked);
    if (lenRow == 1 || lenRow <= 1 || lenChecked >= lenRow) {
        alert("Tidak dapat menghapus semua baris!");
    } else {
        row.remove();
    }
});
//===================================================================================

//=====================MGM & BIAYA================================================
$('tbody tr')
    .find('td')
    //.append('<input type="button" value="Delete" class="del"/>')
    .parent(); //traversing to 'tr' Element
    //.append('<td><a href="#" class="delrow">Delete Row</a></td>');

// For select all checkbox in table
$('#checkedAll_mgm_biaya').click(function (e) {
  //e.preventDefault();
    $(this).closest('#tblAddRow_mgm_biaya').find('td input:checkbox').prop('checked', this.checked);
});

// Add row the table
$('#btnAddRow_mgm_biaya').on('click', function() {
    var lastRow = $('#tblAddRow_mgm_biaya tbody tr:last').html();
    //alert(lastRow);
    $('#tblAddRow_mgm_biaya tbody').append('<tr>' + lastRow + '</tr>');
    $('#tblAddRow_mgm_biaya tbody tr:last input').val('');
});

// Delete last row in the table
$('#btnDelLastRow_mgm_biaya').on('click', function() {
    var lenRow = $('#tblAddRow_mgm_biaya tbody tr').length;
    //alert(lenRow);
    if (lenRow == 1 || lenRow <= 1) {
        alert("Can't remove all row!");
    } else {
        $('#tblAddRow_mgm_biaya tbody tr:last').remove();
    }
});

// Delete row on click in the table
$('#tblAddRow_mgm_biaya').on('click', 'tr a', function(e) {
    var lenRow = $('#tblAddRow_mgm_biaya tbody tr').length;
    e.preventDefault();
    if (lenRow == 1 || lenRow <= 1) {
        alert("Can't remove all row!");
    } else {
        $(this).parents('tr').remove();
    }
});

// Delete selected checkbox in the table
$('#btnDelCheckRow_mgm_biaya').click(function() {
  var lenRow    = $('#tblAddRow_mgm_biaya tbody tr').length;
    var lenChecked  = $("#tblAddRow_mgm_biaya input[type='checkbox']:checked").length;
    var row = $("#tblAddRow_mgm_biaya tbody input[type='checkbox']:checked").parent().parent();
    //alert(lenRow + ' - ' + lenChecked);
    if (lenRow == 1 || lenRow <= 1 || lenChecked >= lenRow) {
        alert("Tidak dapat menghapus semua baris!");
    } else {
        row.remove();
    }
});