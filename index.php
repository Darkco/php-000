<!doctype html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
            $(document).ready(function(){                        
            var $input = $("#inputTexter");                               
            $input.on('input', function() {
                //Selected value
                var inputValue = $(this).val();
                //Ajax for calling php function
                $.post('contentimg.php', { inputValueV: inputValue }, function(data){
                    $("#contentImg").html(data);
                    //do after submission operation in DOM
                });
            });
        });
</script>
<title>Image File Search</title>
 <style>
 div,input {margin:0; padding:0;}
 </style>
</head>
<body>
<?php
echo '<form method="post" action="" >';
echo '<input id="inputTexter" name="inputTexter" type="text" name="inputValueV"  /><br />';
echo '</form>';
echo '<div id="contentImg"> </div>';
?>
</body>
</html>
