function send() {
  var arr = document.getElementsByTagName("input");
  var name = arr[0].value;
  var so_luong = arr[1].value;
  var phone = arr[2].value;
  var email = arr[3].value;
  if(name == "" || so_luong == "" || phone = "" || email == "") {
    alert("hello")
  }
}
