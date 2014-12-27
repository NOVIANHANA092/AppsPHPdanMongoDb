<html>
<head>
    <script type="text/javascript" src="jquery-1.7.2.min.js"></script>
    <script type='text/javascript'>
 
        $(document).ready(function()
        {
             
            $.ajax({
                type: "GET",
                url: "plant_catalog.xml",
                dataType: "xml",
                beforeSend: function(){
                    $("#image").html("<img src='ajax-loader.gif'");
                },
                success: function(xml) {
                    $(xml).find("PLANT").each(function(){
                        $("#image").hide();
                         
                        var data_common = $(this).find("COMMON").text();
                        $("#v_common ul").append("<li>"+ data_common +"</li>");
                         
                        var data_botanical = $(this).find("BOTANICAL").text();
                        $("#v_botanical ul").append("<li>"+ data_botanical +"</li>");
                    });
                     
                }
            });
             
        });
 
    </script>
</head>
 
<body>
  <span id='image'></span><br />
  Common : 
  <div id='v_common'>
    <ul>
         
    </ul>
  </div>
   
  Botanical :
  <div id='v_botanical'>
    <ul>
         
    </ul>
  </div>
</body>
     
</html>