<!doctype html>
<html>
<head>
  <link rel="stylesheet" href="css/style_compiler.css">
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="js/vendor/jquery-1.12.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.32.0/codemirror.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.32.0/codemirror.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.50.2/mode/clike/clike.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.50.2/theme/3024-night.min.css"></script>
</head>
<body>

<form action="compilers/cpp.php" id="form" name="f2" method="POST">
  <div id="code-workspace">
    <div id="code">
      <p>Code:</p>
      <textarea id="form-code" name="code" rows="10" cols="50"></textarea>
      <script>
        var editor = CodeMirror.fromTextArea(document.getElementById("form-code"), {
          lineNumbers: true,
          mode: "text/x-c++src",
          matchBrackets: true,
          theme:"3024-night"
        });
      </script>
      <input type="submit" id="st" class="btn btn-success" value="Run Code">
    </div>
    <div id="input">
      <p>Input:</p>
      <textarea class="form-input" name="input" rows="10" cols="50"></textarea>
    </div>
  </div>
</form>

<script type="text/javascript">
  $(document).ready(function(){
     $("#st").click(function(){
           $("#output").html("Loading ......");
     });
  });
</script>

<script>
  $(document).ready(function(){
      $('form').on('submit', function(e){
        e.preventDefault();
        $.ajax({
              type: "POST",
              cache: false,
              url: "compilers/cpp.php",
              datatype: "html",
              data: $('form').serialize(),
              success: function(result) {
                  $('#output').css("display", "block");
                  $('#output').html(result);
              }
          });
      });
  });
</script>

<div id="output">
  <textarea id='output' class="form-control" name="output" rows="10" cols="50"></textarea>
</div>
</body>
</html>
