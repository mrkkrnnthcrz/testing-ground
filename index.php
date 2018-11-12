<!DOCTYPE html>
<html>
   <header>
      <title>I am in Here</title>
   </header>
   <script type="text/javascript">
      $("div h1").click(function(){
         alert("It Works!");
      });
   </script>
   <style type="text/css">

      body{
         padding: 0;
         margin: 0;
      }

      * {
         box-sizing: border-box;
      }

      div {
         background-color: #dedede;
         height:1000px;
      }

      div h1{
         color:black;
         cursor: pointer;
      }

   </style>
<body>

   <div>
      <h1>Sample</h1>
   </div>

   <script type="text/javascript">
      $("div h1").click(function(){
         alert("It Works!");
      });
   </script>

</body>
</html>
