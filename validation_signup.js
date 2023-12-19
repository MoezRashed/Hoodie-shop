function validate()
{
  //first name
  var FN= document.getElementById('inputfname').value;
  var RFN= /^[a-zA-Z]{2,}$/;
  var FNres=RFN.test(FN);
  if(FNres==false)
  {
    alert('Please enter a valid name');
    return false;
  }
  //last name
  var LN= document.getElementById('inputlname').value;
  var RLN= /^[a-zA-Z]{2,}$/;
  var LNres=RLN.test(LN);
  if(LNres==false)
  {
    alert('Please enter a valid name');
    return false;
  }
  //email
  var em= document.getElementById('inputEmail').value;
  var Rem= /^[a-zA-Z0-9_\.]{3,}@[a-zA-Z]+[.]{1}[a-zA-Z]+$/;
  var emres=Rem.test(em);
  if(emres==false)
  {
    alert('please enter a valid email');
    return false;
  }
        
  //username
  var UN= document.getElementById('inputusername').value;
  var RUN= /^[a-zA-Z0-9_]{3,}$/;
  var UNres=RUN.test(UN);
  if(UNres==false)
  {
    alert('Please enter a valid username\nUsername can only contain:\nLetters\nDigits\nUnderscore');
    return false;
  }
  //password
  var pass= document.getElementById('inputPassword').value;
  var Rpass= /^[a-zA-Z0-9_\*]{7,25}$/;
  var passres=Rpass.test(pass);
  if(passres==false)
  {
    alert('Please enter a valid password\nPassword can only contain:\nLetters\nDigits\nUnderscore\n*');
    return false;
  }
  //confirm password
  var repass = document.getElementById('inputPassword2').value;
  if(repass != pass)
  {
    alert('Passwords not matching');
    return false;
  }
}