$(document).ready(function() {

  $("#YM_Card_form").hide();
  $("#YM_Native_form").hide();
  $(".clear_basket_msg").hide();

  if($("#YM_Native").on('click', function(e) {
    e.preventDefault();
    $("#YM_Card_form").hide();
    $("#YM_Native_form").show();
    $(".clear_basket_msg").hide();

    $.ajax({
      type: "POST",
      url: "php/donate_basket.php",
      success: function(data) {
        $(".pay_amount").val(data);
      },
      error:function(ts){
        alert(ts.responseText);
      }
    }); //ajax close
  })); //#YM_Native close

  if($("#YM_Card").on('click', function(e) {
    e.preventDefault();
    $("#YM_Native_form").hide();
    $("#YM_Card_form").show();

    $.ajax({
      type: "POST",
      url: "php/donate_basket.php",
      success: function(data) {
        $(".pay_amount").val(data);
      },
      error:function(ts) {
        alert(ts.responseText);
      }
    }); //ajax close
  })); //YM_Card close

  if($("#clear_basket").on('click', function(e) {
    e.preventDefault();

    $.ajax({
      type: "POST",
      url: "php/donate_basket_clear.php",
      success: function(data) {
        $(".clear_basket_msg").show();
        setTimeout(function() { $(".clear_basket_msg").hide(); }, 3000);
        $(".pay_amount").val("0");
      },
      error:function(ts) {
        alert(ts.responseText);
      }
    }); //ajax close
  })); //YM_Card close

}); //document.ready close
