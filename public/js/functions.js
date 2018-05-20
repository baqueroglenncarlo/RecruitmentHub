$(document).ready(function(){
    // alert('panget mo bey haha');
});
$(document).on('click', '#btnlogin', function(){
    var uname, pword;
    uname = $('#username').val();
    pword = $('#password').val();
    $.ajax({
        url: '../ProfAuxF/functions.php',
        method: 'POST',
        data:{'funcName':'login','username':uname, 'password':pword},
        success:function(data){
            alert(data);
        }
    });
});