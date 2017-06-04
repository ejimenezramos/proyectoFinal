/**
 * Created by elena.jimenez on 03/05/2017.
 */
$(document).ready(function(){
  $("#prod").change(function () {
      switch(($("#prod").val())){
          case "0":
              $("#cereals").show()
              $("#milk").show();
              $("#toppings").show();
              break;
          case "1":
              $("#cereals").show()
              $("#milk").hide();
              $("#toppings").hide();
              break;
          case "2":
              $("#cereals").hide()
              $("#milk").show();
              $("#toppings").hide();
              break;
          case "3":
              $("#cereals").hide()
              $("#milk").hide();
              $("#toppings").show();
              break;

      }
  })
});