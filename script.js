$(function(){

  $("a.lb").click(function(){
    $("#detailImg").hide();
    url = $(this).attr("href");
    $("#detailImg").html("<a id=\"pictLink\" href=\"" + url + "\" target=\"_blank\" ><img src=\"" + url + "\" ></a>");
    $("#detailImg").fadeIn(700);
    
    $("#tFileName").text(url);
    
    $("#tDate").html($(this).attr("class").split(" ")[1]);
    return false;
  });

  $("#tFileName").click(function(){
    var range = document.createRange();
    range.selectNodeContents(this);
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
  });
  
  /*
  $("#rm").click(function(){
    if($("#pictLink").length){
      window.alert("Error: Image Not Selected");
      return false;
    }
    if(window.confirm("Are you sure you want to delete this?")){ // 確認ダイアログを表示
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function(){
        if( xhr.readyState == 4){
          if(xhr.status == 200){
          }else{
            window.alert("failed to delete.");
            return false;
          }
        
        }
      });
      return false;
    }else{ 
      // 「キャンセル」時の処理
      window.alert("Canceled");
      return false;
    }
  });
  */
});
