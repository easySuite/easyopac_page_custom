function CheckMultiple6447(frm, name) {
  for (var i = 0; i < frm.length; i++) {
    var fldObj = frm.elements[i];
    var fldId = fldObj.id;
    if (fldId) {
      var fieldnamecheck = fldObj.id.indexOf(name);
      if (fieldnamecheck !== -1) {
        if (fldObj.checked) {
          return true;
        }
      }
    }
  }
  return false;
}

function CheckForm6447(f) {
  var email_re = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/i;
  if (!email_re.test(f.email.value)) {
    alert("Venligst indtaste din e-mail-adresse.:");
    f.email.focus();
    return false;
  }

  return true;
}
