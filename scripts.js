$(".row").css("margin-top", $(window).height()/4);
$(".alert").hide();
$("#findWeather").click(function(event){

    $(".alert").hide();
    event.preventDefault();

    if ($("#city").val() != "") {

        $.get("scraper.php?city=" + $("#city").val(), function(data) {

            if (data == "") {

                $("#alertError").show();

            } else {

            $("#alertSuccess").html(data).show();

            };

        });

    } else {

        $("#alertError").show();

    }

});
