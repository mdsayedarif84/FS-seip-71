$('#checkBox').click(function () {
   if(this.checked){}
});


function checkFistName() {
    var firsNameLength= $('#firstName').val().length;
    if(firsNameLength>=6 && firsNameLength<=15){
        $(' #firstNameError').text(' ');
        return true;
    }else{
        $('#firstNameError').text('First name should be between 6 to 15 character');
        return false;
    }
}
$('#firstName').click(function () {
    checkFistName();
});
$('#firstName').blur(function () {
    checkFistName();
});
$('#firstName').keyup(function () {
    checkFistName();

});
function checklastName() {
    var lastNameLength= $('#lastName').val().length;
    if(lastNameLength>=6 && lastNameLength<=15){
        $(' #lastNameError').text(' ');
        return true;
    }else{
        $('#lastNameError').text('First name should be between 6 to 15 character');
        return false;
    }
}
$('#lastName').click(function () {
    checklastName();
});
$('#lastName').blur(function () {
    checklastName();
});
$('#lastName').keyup(function () {
    checklastName();

});

// function checkGender() {
//     var genderValue=$('input[type="radio"]:checked').val(){
//         if(genderValue){
//             $('#genderError').text(' ');
//             return true;
//         }else{
//             $('#genderError').text('Please select your gender');
//             return false;
//         }
//
//     }
//     $('input[type="radio"]'.blur(function () {
//         checkGender();
//     }));


function CheckEmailAddress() {
    var pattern = new RegExp(/^[+a-zA-z0-9._-]+@[a-zA-z0-9.-]+\.[a-zA-Z]{3,4}$/i);
    if (pattern.test($('#emailAddress').val())){
        $('#emailError').text(' ');
        return true;
    }else {
        $('#emailError').text('Email Address is invlaid');
        return false;
    }

}
$('#emailAddress').click(function () {
    CheckEmailAddress();
});
$('#emailAddress').blur(function () {
    CheckEmailAddress();
});
$('#emailAddress').keyup(function () {
    CheckEmailAddress();

});
function checkPassword() {
    var passwordLength= $('#password').val().length;
    var confirmPasswordLength=$('')
    if(passwordLength >= 8 ){
        $(' #passwordError').text(' ');
        return true;
    }else{
        $('#passwordError').text(' Passoword should be minimum 6 character');
        return false;
    }
}
$('#password').click(function () {
    checkPassword();
});
$('#password').blur(function () {
    checkPassword();
});
$('#password').keyup(function () {
    checkPassword();

});
function checkConfirmPassword() {
    var passwordValue= $('#password').val();
    var confirmPasswordValue=$('#confirm_password').val();
    if(passwordValue == confirmPasswordValue ){
        $(' #confirmPasswordError').text(' ');
        return true;
    }else{
        $('#confirmPasswordError').text(' Passoword & confirm password is not match');
        return false;
    }
}

$('#confirm_password').blur(function () {
    checkConfirmPassword();
});
$('#confirm_password').keyup(function () {
    checkConfirmPassword();

});
function checkDistrictName() {
    var districtName= $('#districtName').val();
    if(districtName == ' '){
        $('#districtNameError').text('Please select the valid district name');
        return false;
    }else{
        $('#districtNameError').text('');
        return true;
    }
}
$('#districtName').change(function () {
    checkDistrictName();
});
$('#registration').submit(function () {
       if(checkFistName()== true && checklastName()== true && CheckEmailAddress()== true && checkPassword()== true && checkConfirmPassword()==true && checkDistrictName()==true && checkGender()==true){
           return true;
       }else{
           return false;
       }

});