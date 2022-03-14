// insert section starts here
$(".insert").click(function () {
  var name = $("#stdName").val();
  var id = $("#stdId").val();
  var email = $("#stdEmail").val();

  $.ajax({
    method: "POST",
    url: "insert.php",
    data: { name: name, id: id, email: email },
    success: function (data) {
      Read();
    },
  });
});
// insert section ends here

// read section starts here
function Read(){
var read = "";
$.ajax({
  method: "POST",
  url: 'read.php',
  data: {'read': read},
  success: function (data){
  $("#readdata").html(data);
  }
});
}
// read section ends here
// Home page read Button starts here
$(".read").click(function () {
  var read = "";
  $.ajax({
    method: "POST",
    url: 'read.php',
    data: {'read': read},
    success: function (data){
      $("#readdata").html(data);
    }
  });
});
// Home page read Button ends here

//Delete section starts here

function Delete(userID){
  $confirm = confirm("Are you Sure?");
  if ($confirm == true){
    $.ajax({
      url: "delete.php",
      method: "POST",
      data: {'userId': userID},
      success: function (data){
        alert(data);
        Read();
      }
    });
  }
}
//Delete section ends here

//Edit section Show data starts here
function Update(userID){
  $.ajax({
    url: "update.php",
    method: "GET",
    data: {'userId': userID},
    success: function(data){
    $("body").html(data);
    }
  });
}
//Edit section Show data ends here

//Edit section Update starts here

function UpdateData(userID){
  var uname = $("#ustdName").val();
  var uid = $("#ustdId").val();
  var uemail = $("#ustdEmail").val();

$.ajax({
  url: "updateQuery.php",
  method: "POST",
  data: {'name': uname, 'id': uid, 'email': uemail, 'userId': userID},
  success: function (data){
  alert(data);
  Index();
  Read();
  }
});


}
//Edit section update ends here

function Index(){

  $.ajax({
    method: "POST",
    url: 'index.php',
    success: function (data){
      $("body").html(data);
    }
  });
}