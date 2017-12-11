var btnElement = document.getElementById('btn');
// alert(btnElement);
btnElement.onclick=function () {
    //alert('test');
    var firstNameValue =document.getElementById('firstName').value;
    var lastNameValue=document.getElementById('lastName').value;
    var fullName = firstNameValue+' '+lastNameValue;
    //alert(fullName);
    document.getElementById('fullName').value=fullName;
};

	/* calulator */

var btnAddition=document.getElementById('addition');
	btnAddition.onclick=function ()
{
		var btnFirstNumber =Number(document.getElementById('firstNumber').value);
		var btnSecondNumber =Number(document.getElementById('secondNumber').value);
		var result=btnFirstNumber+btnSecondNumber;
		document.getElementById('result').value=result;
}

var btnSubtraction=document.getElementById('subtraction');
	btnSubtraction.onclick=function () {
		var btnFirstNumber =document.getElementById('firstNumber').value;
		var btnSecondNumber =document.getElementById('secondNumber').value;
		var result=btnFirstNumber-btnSecondNumber;
		document.getElementById('result').value=result;
}

var btnMultiplication=document.getElementById('multiplication');
	btnMultiplication.onclick=function () {
		var btnFirstNumber =document.getElementById('firstNumber').value;
		var btnSecondNumber =document.getElementById('secondNumber').value;
		var result=btnFirstNumber*btnSecondNumber;
		document.getElementById('result').value=result;
}

var btnDivision=document.getElementById('division');
	btnDivision.onclick=function () {
		var btnFirstNumber =document.getElementById('firstNumber').value;
		var btnSecondNumber =document.getElementById('secondNumber').value;
		var result=btnFirstNumber/btnSecondNumber;
		document.getElementById('result').value=result;
}
var btnModulus=document.getElementById('reminder');
	btnModulus.onclick=function(){
		var btnFirstNumber=document.getElementById('firstName').value;
		var btnSecondNumber=document.getElementById('secondNumber').value;
		var result=btnFirstNumber%btnSecondNumber;
		document.getElementById('result').value=result;
	}
