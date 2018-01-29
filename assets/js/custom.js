
$( document ).ready(function() {
	$('.subsubmit').on('click', function (e) {
      e.preventDefault();
      var modalname = $(this).attr("id");
      var url = "../subscribe/mainctrl/rp_cust";
      $.ajax({
        url: url,
        type: "POST",
        dataType: "json",
        data: $('#'+modalname+'form').serialize(),
        beforeSend: function(XMLHttpRequest) {
        },
        complete: function(XMLHttpRequest, textStatus) {
           
        },
        success:function(response, XMLHttpRequest, textStatus) {  
          document.getElementById(modalname+"close").click();
          document.getElementById(modalname+"pay").click();

        },
        error: function  (exception) {
             alert("Sorry, something went wrong. Please start again!")
        },
     });	
  })
  $('.subpay').on('click', function (e) {
    amounttopay = $(this).attr("id");
    //console.log(amounttopay);
  });

})