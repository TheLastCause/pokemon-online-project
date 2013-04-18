<html>
    <head>
        <title>Editor</title>
          <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <script>
  $(function() {
    $( "#dialog" ).dialog();
  });
  </script>
        
        
        <style type="text/css">
   #codeTextarea{
   	width:90%;
   	height:80%;
   }
   .textAreaWithLines{
      font-family:courier;      
      border:1px solid #F00;
      
   }
   .textAreaWithLines textarea,.textAreaWithLines div{
      border:0px;
      line-height:120%;
      font-size:12px;
   }
   .lineObj{
      color:red;
   }
   </style>
   
   <script type="text/javascript">
   
   var lineObjOffsetTop = 2;
   
   function createTextAreaWithLines(id)
   {
      var el = document.createElement('DIV');
      var ta = document.getElementById(id);
      ta.parentNode.insertBefore(el,ta);
      el.appendChild(ta);
      
      el.className='textAreaWithLines';
      el.style.width = (ta.offsetWidth + 30) + 'px';
      ta.style.position = 'absolute';
      ta.style.left = '30px';
      el.style.height = (ta.offsetHeight + 2) + 'px';
      el.style.overflow='hidden';
      el.style.position = 'relative';
      el.style.width = (ta.offsetWidth + 30) + 'px';
      var lineObj = document.createElement('DIV');
      lineObj.style.position = 'absolute';
      lineObj.style.top = lineObjOffsetTop + 'px';
      lineObj.style.left = '0px';
      lineObj.style.width = '27px';
      el.insertBefore(lineObj,ta);
      lineObj.style.textAlign = 'right';
      lineObj.className='lineObj';
      var string = '';
      for(var no=1;no<200;no++){
         if(string.length>0)string = string + '<br>';
         string = string + no;
      }
      
      ta.onkeydown = function() { positionLineObj(lineObj,ta); };
      ta.onmousedown = function() { positionLineObj(lineObj,ta); };
      ta.onscroll = function() { positionLineObj(lineObj,ta); };
      ta.onblur = function() { positionLineObj(lineObj,ta); };
      ta.onfocus = function() { positionLineObj(lineObj,ta); };
      ta.onmouseover = function() { positionLineObj(lineObj,ta); };
      lineObj.innerHTML = string;
      
   }
   
   function positionLineObj(obj,ta)
   {
      obj.style.top = (ta.scrollTop * -1 + lineObjOffsetTop) + 'px';   
   
      
   }
   
   </script>
        
        
        
    </head>
    <font face="arial">
        <?php
        error_reporting(0);
        session_start();
        if ($_SESSION["myusername"] != 'admin'){
        	?>
        		<meta http-equiv="REFRESH" content="0;url=../index.php">
        	<?	
        }else{
        
        $fileName = 'settings.php';
        
        if ($_POST["submit_check"]){
            echo '<div id="dialog" title="Basic dialog" style="font-size: 62.5%;">
  <p style="font-size: 62.5%;">File has been saved!</p>
</div>';
        };
        ?>
    <body>
        <?
            function Read(){
            $file = 'settings.php';
            $fp = fopen($file, "r");
            while(!feof($fp)) {
            $data = fgets($fp, filesize($file));
            echo "$data";
            }
            fclose($fp);
            };

            function Write(){
            $file = 'settings.php';
            $fp = fopen($file, "w");
            $data = $_POST["tekst"];
            fwrite($fp, $data);
            fclose($fp);
            };
        ?>

        <?php
        if ($_POST["submit_check"]){
            Write();
        };
        ?>   
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Editing setting file
        <center>
        <textarea style="margin: 2px; width:100%; height:500px;" name="tekst" id="codeTextarea" style="resize:none"><?php Read(); ?></textarea><br>
        <a onClick="history.go(-1)"><image src="../image/BackArrow.png" width="3%"></a>
        <input type="submit" name="submit" value="Save">
        <image src="../image/BackArrow.png" style="
        -moz-transform: scaleX(-1);
        -o-transform: scaleX(-1);
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
        filter: FlipH;
        -ms-filter: "FlipH";
        " width="3%">
        </center>
        <input type="hidden" name="submit_check" value="1">
        </form>    
   <script type="text/javascript">
   createTextAreaWithLines('codeTextarea');
   </script>

    </body>
</html>
<?
        }
?>