let user = document.getElementById('user');

user.addEventListener('click', ajax);

function ajax() {
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200){
      document.getElementById('user').innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "text_bestand.txt", true);
  xmlhttp.send();
}
