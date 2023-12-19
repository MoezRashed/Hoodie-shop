function validate()
{
  //username
  var UN= document.getElementById('inputusername').value;
  var RUN= /^[a-zA-Z0-9_]{3,}$/;
  var UNres=RUN.test(UN);
  if(UNres==false){
    alert('Please enter a valid username\nUsername can only contain:\nLetters\nDigits\nUnderscore');
    return false;
  }
  
  //password
  var pass= document.getElementById('inputPassword').value;
  var Rpass= /^[a-zA-Z0-9_\*]{7,25}$/;
  var passres=Rpass.test(pass);
  if(passres==false){
    alert('Please enter a valid password\nPassword can only contain:\nLetters\nDigits\nUnderscore\n*');
    return false;
  }
}
