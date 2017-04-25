$(document).ready(function() {
	$("#searchBtn").click(function () {
	  $("#mainCntnt").empty();
	  $.get("login_page/search.php",
		  function (data, status) {
			  var obj = jQuery.parseJSON(data);
			  var counter = 0;
			  var htmlToAppend = "<div class=productRow>";

			  $.each(obj, function(key,value) {
				  counter = (counter+1)%3;
				  htmlToAppend += "<article class=productInfo style=cursor:pointer; onclick=window.open('"+value.link+"','_blank');>";
				  htmlToAppend += "<div><img style=height:200px;width:200px; alt=sample src=images/"+ value.img_loc +"></div>";
				  htmlToAppend += "<p class=price>"+value.name+"</p>";
				  htmlToAppend += "<p class=productContent>$"+value.price+"</p>";
				  htmlToAppend += "</article>";
				  if(counter==0)
				  {
					  htmlToAppend += "</div><div class=productRow>";
				  }
			  });
			  htmlToAppend += "</div>";
			  $(".mainContent").append(htmlToAppend);
		  });
	});

	$(".size-filter").click(function () {

        $(".size-filter").css({'font-weight': 'normal', 'font-size': '14px'});
        $(".store-filter").css({'font-weight': 'normal', 'font-size': '14px'});
        $(".brand-filter").css({'font-weight': 'normal', 'font-size': '14px'});
        $(this).css({'font-weight': 'bold', 'font-size': 'large'});

	  $("#mainCntnt").empty();
	  var size=$(this).data("custom-value");
	  $.get("login_page/search.php?size="+size,
		  function (data, status) {
			  var obj = jQuery.parseJSON(data);
			  var counter = 0;
			  var htmlToAppend = "<div class=productRow>";

			  $.each(obj, function(key,value) {
				  counter = (counter+1)%3;
				  htmlToAppend += "<article class=productInfo style=cursor:pointer; onclick=window.open('"+value.link+"','_blank');>";
				  htmlToAppend += "<div><img style=height:200px;width:200px; alt=sample src=images/"+ value.img_loc +"></div>";
				  htmlToAppend += "<p class=price>"+value.name+"</p>";
				  htmlToAppend += "<p class=productContent>$"+value.price+"</p>";
				  htmlToAppend += "</article>";
				  if(counter==0)
				  {
					  htmlToAppend += "</div><div class=productRow>";
				  }
			  });
			  htmlToAppend += "</div>";
			  $(".mainContent").append(htmlToAppend);
		  });
	});

	$(".brand-filter").click(function () {

        $(".size-filter").css({'font-weight': 'normal', 'font-size': '14px'});
        $(".store-filter").css({'font-weight': 'normal', 'font-size': '14px'});
        $(".brand-filter").css({'font-weight': 'normal', 'font-size': '14px'});
        $(this).css({'font-weight': 'bold', 'font-size': 'large'});

	  $("#mainCntnt").empty();
	  var brand=$(this).data("custom-value");
	  $.get("login_page/search.php?brand="+brand,
		  function (data, status) {
			  var obj = jQuery.parseJSON(data);
			  var counter = 0;
			  var htmlToAppend = "<div class=productRow>";

			  $.each(obj, function(key,value) {
				  counter = (counter+1)%3;
				  htmlToAppend += "<article class=productInfo style=cursor:pointer; onclick=window.open('"+value.link+"','_blank');>";
				  htmlToAppend += "<div><img style=height:200px;width:200px; alt=sample src=images/"+ value.img_loc +"></div>";
				  htmlToAppend += "<p class=price>"+value.name+"</p>";
				  htmlToAppend += "<p class=productContent>$"+value.price+"</p>";
				  htmlToAppend += "</article>";
				  if(counter==0)
				  {
					  htmlToAppend += "</div><div class=productRow>";
				  }
			  });
			  htmlToAppend += "</div>";
			  $(".mainContent").append(htmlToAppend);
		  });
	});

    $(".store-filter").click(function () {

        $(".size-filter").css({'font-weight': 'normal', 'font-size': '14px'});
        $(".store-filter").css({'font-weight': 'normal', 'font-size': '14px'});
        $(".brand-filter").css({'font-weight': 'normal', 'font-size': '14px'});
    	$(this).css({'font-weight': 'bold', 'font-size': 'large'});

        $("#mainCntnt").empty();
        var store=$(this).data("custom-value");
        $.get("login_page/search.php?store_name="+store,
            function (data, status) {
                var obj = jQuery.parseJSON(data);
                var counter = 0;
                var htmlToAppend = "<div class=productRow>";

                $.each(obj, function(key,value) {
                    counter = (counter+1)%3;
                    htmlToAppend += "<article class=productInfo style=cursor:pointer; onclick=window.open('"+value.link+"','_blank');>";
                    htmlToAppend += "<div><img style=height:200px;width:200px; alt=sample src=images/"+ value.img_loc +"></div>";
                    htmlToAppend += "<p class=price>"+value.name+"</p>";
                    htmlToAppend += "<p class=productContent>$"+value.price+"</p>";
                    htmlToAppend += "</article>";
                    if(counter==0)
                    {
                        htmlToAppend += "</div><div class=productRow>";
                    }
                });
                htmlToAppend += "</div>";
                $(".mainContent").append(htmlToAppend);
            });
    });

});