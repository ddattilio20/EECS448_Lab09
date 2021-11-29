function checkForm()
{

  let user = document.getElementById('username').value;
  let pass = document.getElementById('password').value;
  let item1 = document.getElementById('item1').value;
  item1 = parseFloat(item1);
  let item2 = document.getElementById('item2').value;
  item2 = parseFloat(item2);
  let item3 = document.getElementById('item3').value;
  item3 = parseFloat(item3);
  let re = /^[a-zA-Z0-9.!#$%&'+/=?^_'{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-0-]+)$/;
/*
  if(user == null)
  {
    alert("Submission not validated");
    return false;
  }
  else if(re.test(user) != true)
  {
    alert("Submission not validated");

    return false;
  }
  else if(item1 < 0)
  {
    alert("Submission not validated");
    return false;
  }
  else if(item2 < 0)
  {
    alert("Submission not validated");
    return false;
  }
  else if(item3 < 0)
  {
    alert("Submission not validated");
    return false;
  }
  else if(pass === "")
  {

    alert("Submission not validated");
    return false;

  }*/
  if(user === "" || pass === "" || re.test(user) != true || item1 < 0 || item2 < 0 || item3 < 0)
  {
    alert("Submission not validated");
    //history.back();
    event.preventDefault();
  }
    return true;
}
