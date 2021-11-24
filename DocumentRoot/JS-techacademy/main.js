$(function(){
  $("#send").on("click", function(event){
    let id = $("#main").val(); //入力した値
    $.ajax({
      type: "POST",
      url: "techacademy.php",　//相対のURLでも良い
      data: { "id": id },
      //複数あるっばいはカンマ区切り
    
      dataType : "json"
    }).done(function(data){
      //つうしんが成功した場合にここに来る
      console.log(data);　//←見たほうが良い
      $("#return").append('<p>' + data.id + ' : ' + data.school + ' : ' + data.skill + '</p>');
    }).fail(function (XMLHttpRequest, status, e) {
      alert(e);
      //通信が失敗した倍にここに来る
    });
  });
});