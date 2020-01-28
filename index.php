<!DOCTYPE html>
<html lang="ja">
<head>
  <title>プロンタイプ</title>
  <meta charset="utf-8">
  <meta name="description" content="プロンタイプ Prontype">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="favicon.ico">
</head>

<style>

  td{
      padding:20px 10px;
  }

</style>

<body>  

  <div id="menu0bar" style="position: fixed; top:0px; right:0px; 
  width: 40px; height: 18px; border-radius: 0%; padding-top: 12px;
  background-color: transparent; color: navy; font-size: 40px; 
  text-decoration: none; text-align: center; line-height: 0;
  cursor: pointer;
  ">≡</div>

  <table style="width: 700px; margin: 0 auto; border: 1px solid rgba(21, 42, 163, 0.3); border-radius: 10px; box-shadow: 0 5px 5px rgb(219, 219, 219); overflow: hidden; margin-top: 30px;">
    <tr>
      <td style="width: 18%; background:navy; color: white; vertical-align: middle; padding: 0px 30px; text-align: center; height: 100px;">概要</td>
      <td colspan="2" style="background: navy; color: white; height: 40px; width: 64%; vertical-align: middle;"><input id="portf0desc" type="text" placeholder="例：マップ位置情報取得機能" style="width: 100%; border-radius: 5px;"></td>
    </tr>
    <tr>
      <td style="width: 18%; background:darkred; color: white; vertical-align: middle; padding: 0px 30px; text-align: center; height: 150px;">主な機能</td><td style="min-height: 60px; width: 18%; background-color: rgb(29, 112, 29); text-align: center; color: white;"><img src="" alt="画像なし" style="width: 100%; min-height: 60px; object-fit: contain;"><button style="color: royalblue; background-color: silver; width: 60px; border-radius: 5px; font-weight: bold; cursor: pointer; text-align:center; padding: 0; border: 0;">画像添付</button></td><td style="height: 40px; width: 64%; vertical-align: middle;"><input  id="portf0func" type="text" placeholder="例：マップ位置情報取得機能" style="width: 100%; border-radius: 5px;"></td>
    </tr>
    <tr>
      <td style="width: 60px; background:darkred; color: white; vertical-align: middle; padding: 0px 30px; text-align: center; height: 150px;">使用技術</td><td style="min-height: 60px; width: 120px; background-color: rgb(29, 112, 29); text-align: center; color: white;"><img src="" alt="画像なし" style="width: 100%; min-height: 60px; object-fit: contain;"><button style="color: royalblue; background-color: silver; width: 60px; border-radius: 5px; font-weight: bold; cursor: pointer; text-align:center; padding: 0; border: 0;">画像添付</button></td><td style="height: 40px; width: 500px; vertical-align: middle;"><input  id="portf0tech" type="text" placeholder="例：Google Map API、Javascript" style="width: 100%; border-radius: 5px;"></td>
    </tr>
    <tr>
      <td style="width: 60px; background:darkred; color: white; vertical-align: middle; padding: 0px 30px; text-align: center; height: 150px;">デモURL</td><td style="min-height: 60px; width: 120px; background-color: rgb(29, 112, 29); text-align: center; color: white;"><img src="" alt="画像なし" style="width: 100%; min-height: 60px; object-fit: contain;"><button style="color: royalblue; background-color: silver; width: 60px; border-radius: 5px; font-weight: bold; cursor: pointer; text-align:center; padding: 0; border: 0;">画像添付</button></td><td style="height: 40px; width: 500px; vertical-align: middle;"><input id="portf0url" type="text" placeholder="例：https://auneeds.com" style="width: 100%; border-radius: 5px;"></td>
    </tr>
  </table>

  <style>.sbmt0btn:hover {opacity: 0.8;}</style>
  <div class="sbmt0btn" style="width: 100px; height: 45px; margin: 0 auto; margin-top: 20px; background: #ffd61a; border-radius: 5px;">
    <input type="button" id="btn0regis" value="登録" style="width: 100%; height: 45px; background: transparent; color: white; border-radius: 5px; cursor: pointer; font-size: 14px; font-weight: bold; padding-left: 9px;">
  </div>

  <table style="width: 700px; margin: 0 auto; border: 1px solid rgba(21, 42, 163, 0.3); border-radius: 10px; box-shadow: 0 5px 5px rgb(219, 219, 219); overflow: hidden; margin-top: 30px;">
    <tr>
      <td style="width: 18%; background:navy; color: white; vertical-align: middle; padding: 0px 30px; text-align: center; height: 100px;">概要</td><td colspan="2" style="background:navy; color: white; height: 40px; width: 64%; vertical-align: middle;">マップ表示、位置情報取得、カスタマイズ地図アイコン</td>
    </tr>
    <tr>
      <td style="width: 18%; background:darkred; color: white; vertical-align: middle; padding: 0px 30px; text-align: center; height: 150px;">主な機能</td><td style="min-height: 60px; width: 18%; background-color: rgb(29, 112, 29); text-align: center; color: white;"><img src="img0portf/map.png" alt="画像なし" style="width: 100%; min-height: 60px; object-fit: contain;">マップ機能</td><td style="height: 40px; width: 64%; vertical-align: middle;">マップ表示、位置情報取得、カスタマイズ地図アイコン</td>
    </tr>
    <tr>
      <td style="width: 60px; background:darkred; color: white; vertical-align: middle; padding: 0px 30px; text-align: center; height: 150px;">使用技術</td><td style="min-height: 60px; width: 120px; background-color: rgb(29, 112, 29); text-align: center; color: white;"><img src="img0portf/geo.png" alt="画像なし" style="width: 100%; min-height: 60px; object-fit: contain;">位置情報</td><td style="height: 40px; width: 500px; vertical-align: middle;">Google Map API、Javascript、HTML、CSS</td>
    </tr>
    <tr>
      <td style="width: 60px; background:darkred; color: white; vertical-align: middle; padding: 0px 30px; text-align: center; height: 150px;">デモURL</td><td style="min-height: 60px; width: 120px; background-color: rgb(29, 112, 29); text-align: center; color: white;"><img src="img0portf/icon.png" alt="画像なし" style="width: 100%; min-height: 60px; object-fit: contain;">アイコン</td><td style="height: 40px; width: 500px; vertical-align: middle;"><a href="https://auneeds.com" style="cursor: pointer; text-decoration: underline; color: blue;">https://auneeds.com</a></td>
    </tr>
  </table>

  <style>.send0btn:hover {opacity: 0.8;}</style>
  <div class="send0btn" style="width: 100px; height: 45px; margin: 0 auto; margin-top: 20px; background: #ffd61a; border-radius: 5px;">
    <input type="button" id="send0btn" value="もっとみる" style="width: 100%; height: 45px; background: transparent; color: white; border-radius: 5px; cursor: pointer; font-size: 14px; font-weight: bold; padding-left: 9px;">
  </div>

  <div id="portf0tables">
  </div>

<footer style="width: 100%; background: #707070; color: white; text-align: center; font-size: 14px; padding: 20px 0; margin-top: 20px; margin-bottom: 20px;">
  &copy; Prontype All RIghts Reserved.
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>

let portf0all= "";
// function get0myneeds() {
    $.ajax({
      type: "POST",
      datatype: "json",
      url: "portf0getall.php",
      data: {
        // username: user0name,
        // userhash: user0hash
      }
    }).done(function(data) {
      console.log(data);
      console.log("ajax OK");
      // let offer0num = 0;
      // for(let j = 0; j < data.length - 1; j++) {
      //   if(data[j].offer == 1) {
      //     offer0num += 1
      //   }
      // }

      for(let i = 0; i < data.length - 1; i++) {
        if(data[i].portf0desc == null) {
          console.log("here");
        }
       portf0all += '<table style="width: 700px; margin: 0 auto; border: 1px solid rgba(21, 42, 163, 0.3); border-radius: 10px; box-shadow: 0 5px 5px rgb(219, 219, 219); overflow: hidden; margin-top: 30px;"><tr><td style="width: 18%; background:navy; color: white; vertical-align: middle; padding: 0px 30px; text-align: center; height: 100px;">概要</td><td colspan="2" style="background:navy; color: white; height: 40px; width: 64%; vertical-align: middle;">' + data[i].portf0desc + '</td></tr><tr><td style="width: 18%; background:darkred; color: white; vertical-align: middle; padding: 0px 30px; text-align: center; height: 150px;">主な機能</td><td style="min-height: 60px; width: 18%; background-color: rgb(29, 112, 29); text-align: center; color: white;"><img src="' + data[i].portf1img + '" alt="画像なし" style="width: 100%; min-height: 60px; object-fit: contain;">マップ機能</td><td style="height: 40px; width: 64%; vertical-align: middle;">' + data[i].portf0func + '</td></tr><tr><td style="width: 60px; background:darkred; color: white; vertical-align: middle; padding: 0px 30px; text-align: center; height: 150px;">使用技術</td><td style="min-height: 60px; width: 120px; background-color: rgb(29, 112, 29); text-align: center; color: white;"><img src="' + data[i].portf2img + '" alt="画像なし" style="width: 100%; min-height: 60px; object-fit: contain;">位置情報</td><td style="height: 40px; width: 500px; vertical-align: middle;">' + data[i].portf0tech + '</td></tr><tr><td style="width: 60px; background:darkred; color: white; vertical-align: middle; padding: 0px 30px; text-align: center; height: 150px;">デモURL</td><td style="min-height: 60px; width: 120px; background-color: rgb(29, 112, 29); text-align: center; color: white;"><img src="' + data[i].portf3img + '" alt="画像なし" style="width: 100%; min-height: 60px; object-fit: contain;">アイコン</td><td style="height: 40px; width: 500px; vertical-align: middle;"><a href="' + data[i].portf0url + '" target="_blank" style="cursor: pointer; text-decoration: underline; color: blue;">' + data[i].portf0url + '</a></td></tr></table>'

        // if(data[i].fname == null && data[i].offer == 0) {
        //   portf0all += '<tr><td class="rmvbtn"><button style="color: white; background-color: silver; width: 30px;  font-weight: bold; cursor: pointer; text-align:center; font-size: 14px; padding: 0;" data-id=""><a href="needs0delete.php?id=' + data[i].id + '" style="text-decoration: none; color: white;">✖︎</a></button></td><td class="my0need" data-id=a' + user0hash + data[i].id + ' style="text-align: left; max-width: 40px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; cursor: pointer;">' + data[i].givetake + '</td><td class="my0need" data-id=a' + user0hash + data[i].id + '  style="text-align: left; max-width: 50px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; cursor: pointer;">' + data[i].category + '</td><td class="my0need" data-id=a' + user0hash + data[i].id + ' style="text-align: left; max-width: 130px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; cursor: pointer;">' + data[i].detail + '</td><td class="img0btn" data-id=' + data[i].id + '><button style="color: #ffd61a; background-color: silver; width: 30px; border-radius: 5px; font-weight: bold; cursor: pointer; text-align:center; padding: 0; border: 0;" data-id=' + data[i].id + ' data-fname="./needsimg/' + data[i].fname + '"></button></td></tr>';
        // } else if(data[i].fname == null && data[i].offer == 1) {
        //   portf0all += '<tr><td class="rmvbtn"><button style="color: white; background-color: silver; width: 30px;  font-weight: bold; cursor: pointer; text-align:center; font-size: 14px; padding: 0;" data-id=""><a href="needs0delete.php?id=' + data[i].id + '" style="text-decoration: none; color: white;">✖︎</a></button></td><td class="my0need" data-id=a' + user0hash + data[i].id + ' style="text-align: left; max-width: 40px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; cursor: pointer;">' + data[i].givetake + '</td><td class="my0need" data-id=a' + user0hash + data[i].id + '  style="text-align: left; max-width: 50px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; cursor: pointer;">' + data[i].category + '</td><td class="my0need" data-id=a' + user0hash + data[i].id + ' style="text-align: left; max-width: 130px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; cursor: pointer;">' + data[i].detail + '</td><td class="img0btn" data-id=' + data[i].id + '><button style="color: #ffd61a; background-color: silver; width: 30px; border-radius: 5px; font-weight: bold; cursor: pointer; text-align:center; padding: 0; border: 0;" data-id=' + data[i].id + ' data-fname="./needsimg/' + data[i].fname + '"></button></td><td class="my0need" data-id=a' + user0hash + data[i].id + '><button style="color: #ffd61a; background-color: silver; width: 30px; border-radius: 5px; font-weight: bold; text-align:center; padding: 0; color: yellow;" data-id=' + data[i].id + ' data-fname="./needsimg/' + data[i].fname + '">★</button></td></tr>';
        // } 
      }
      
      
      $("#portf0tables").html(portf0all);
    }).fail(function(data) {
      console.log(data);
      console.log("error from ajax");
    }).always(function(data) {
      console.log(data);
      console.log("from ajax");
    });
  // }


$("#btn0regis").on("click", function() {
  if($("#portf0desc").val() == "" || $("#portf0func").val() == "" || $("#portf0tech").val() == "" || $("#portf0url").val() == "") {
    alert("全ての項目をご入力下さい。");
    // $("#chk0msg").html("全ての項目をご入力下さい。");
    return false;
  } else {
    // $("#chk0msg").html("");
  }

  if(window.confirm("送信してよろしいですか？")) { 
    $.ajax({
      type: "POST",
      url: "portf0regis.php",
      data: {
        portf0desc: $("#portf0desc").val(),
        portf0func: $("#portf0func").val(),
        portf0tech: $("#portf0tech").val(),
        portf0url: $("#portf0url").val(),
        portf1img: "img0portf/icon.png",
        portf2img: "img0portf/icon.png",
        portf3img: "img0portf/icon.png"
      },
      dataType: "html",
      success: function(data) {
        if(data =="dup") {
          alert("このURLは既に登録済みです。");
          return;
        }
          // $("#chk0msg").html("このメールアドレスは既に登録済みです。");
          // if(data =="invalid") {
          //   $("#chk0msg").html("有効なメールアドレスをご入力ください。");
          // } 
          if(data !== "") {
            alert(data);
          } else {
            $("#portf0desc").val("");
            $("#portf0func").val("");
            $("#portf0tech").val("");
            $("#portf0url").val("");
            // alert(data);
            alert("登録完了しました！");
            // window.location.href = "index.php";
          }
      }
    });
  } else { 
    return false;
  }
})

// $(function() {
//   $(document).on("click", ".img0btn", function () {

//     document.getElementById("img0show").src = $(this).data("fname");

//     data0id = $(this).data("id");
//     $("#needs0table").hide();
//     $("#my1needs").hide();
//     $("#img0select").show();
//     $("#img0preview").show();
//     // $("#post0needs").hide();
//     // $("#needs0text").hide();

//     document.getElementById("img0input").addEventListener("change", function() {
//       // $("#my3needs").hide();
//       // $("#post0needs").show();
//       // $("#needs0text").show();
//       let reader = new FileReader();
//       reader.onload = function(event) {
//         document.getElementById("img0show").src = reader.result;
//       }
//       let file = document.getElementById("img0input").files[0];
//       reader.readAsDataURL(file);
//     });
//   });
// })

// $("#post0img").on("click", function() {
//   let form = document.createElement("form");
//   let request1 = document.getElementById("img0input");
//   let request5 = document.createElement("input");
//   let request6 = document.createElement("input");

//   form.method = "POST";
//   form.action = "https://auneeds.com/needs0img.php";
//   form.enctype = "multipart/form-data";
//   request5.type = "hidden";
//   request5.name = "userhash";
//   request5.value = user0hash;
//   request6.type = "hidden";
//   request6.name = "dataid";
//   request6.value = data0id;  
  
//   form.appendChild(request1);
//   form.appendChild(request5);
//   form.appendChild(request6);

//   document.body.appendChild(form);

//   form.submit();
// })

// $("#img0show").on("click", function() {
//   $("#img0display").html($(this).prop('outerHTML'));
//   $("#img0display").show();
//   $("#img0show").css("max-height", "500px");
// })

// $("#img0display").on("click", function() {
//   $("#img0display").empty();
//   $("#img0display").hide();
//   $("#img0show").css("max-height", "145px");
// })

// $("#ourimg0show").on("click", function() {
//   $("#ourimg0display").html($(this).prop('outerHTML'));
//   $("#ourimg0display").show();
//   $("#ourimg0show").css("max-height", "500px");
// })

// $("#ourimg0display").on("click", function() {
//   $("#ourimg0display").empty();
//   $("#ourimg0display").hide();
//   $("#ourimg0show").css("max-height", "145px");
// })

// $(function() {
//   $(window).scroll(function () {
//     $('.effect-fade').each(function() {
//       var elemPos = $(this).offset().top;
//       var scroll = $(window).scrollTop();
//       var windowHeight = $(window).height();
//       if (scroll > elemPos - windowHeight) {
//         $(this).addClass('effect-scroll');
//       }
//     });
//   });
// });

</script>
</body>
</html>