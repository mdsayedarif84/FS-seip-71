$('#firstName').keyup(function () {
    var firstNameValue = $('#firstName').val();
    $('#1stName').val(firstNameValue);
})
$('#lastName').keyup(function () {
    var endNnameValue = $('#lastName').val();
    $('#endName').val(endNnameValue);
})
$('#fullName').blur(function () {
    var firsnNameValue = $('#firstName').val();
    var endNameValue = $('#lastName').val();
    $('#fullName').val(firsnNameValue+ ' '+endNameValue);

})