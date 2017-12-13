/* $('#btn').click(function () {
	var fistNameValue= $('#fistName').val();
	var lastNameValue= $('#lastName').val();
	var fullName= fistNameValue+' '+lastNameValue;
	$('#fullName').val(fullName);
});
$('#btnn').click(function () {
    var fistNumberValue= $('#fistNumber').val();
    var lastNumberValue= $('#lastNumber').val();
    var result= fistNumberValue*lastNumberValue;
    $('#result').val(result);
}); */

//$ ('#h1').text('Hello word');







// var redBtnElement = document.getElementById('redBtn');
//  redBtnElement.onclick = function() {
// 	var divOneElement= document.getElementById('divOne');
//      //divOneElement.style.backgroundColor='red';
//      divOneElement.className = 'class-one';
//  };
// var greenBtnElement = document.getElementById('greenBtn');
// greenBtnElement.onclick =function() {
//     var divOneElement= document.getElementById('divOne');
//     //var divOneElement= document.getElementById('divOne');
//     divOneElement.className = 'class-two';
// };
//  var blueBtnElement= document.getElementById('blueBtn');
//  blueBtnElement.onclick =function() {
//     var divOneElement= document.getElementById('divOne');
//      divOneElement.className = 'class-three';
// };
//  var defaultBtnElement= document.getElementById('defaultBtn');
// defaultBtnElement.onclick =function() {
//     var divOneElement= document.getElementById('divOne');
//     divOneElement.className='my-style';
// };





 var btnElement = document.getElementById('btn');
 	btnElement.onclick=function () {
 	var startingNumberValue	=document.getElementById('startingNumber').value;
 	var endingNumberValue	=document.getElementById('endingNumber').value;
	var res='';
 	for(var x=startingNumberValue; x<=endingNumberValue; x++){
		res+=x; //res=res(string) + x(string)
	}
 	document.getElementById('result').value=res + ' ';
     }
