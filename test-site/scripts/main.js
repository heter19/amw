var myImage = document.querySelector('img');

myImage.onclick = function() {
    var mySrc = myImage.getAttribute('src');
    if(mySrc === 'images/dele.jpg') {
      myImage.setAttribute ('src','images/dele2.jpg');
    } else {
      myImage.setAttribute ('src','images/dele.jpg');
    }
}

function multiply(num1,num2) {
  var result = num1 * num2;
  return result;
}

var myButton = document.querySelector('button');
var myHeading = document.querySelector('h1');


function setUserName() {
  var myName = prompt('Podaj swoje imię');
  localStorage.setItem('name', myName);
  myHeading.textContent = 'Witaj ' + myName;
}

if(!localStorage.getItem('name')) {
  setUserName();
} else {
  var storedName = localStorage.getItem('name');
  myHeading.textContent = 'Witaj ' + storedName;
}

myButton.onclick = function() {
  setUserName();
}