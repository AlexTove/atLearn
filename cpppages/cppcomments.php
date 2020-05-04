<!doctype html>
<html lang="en">
<html>
  <head>
    <meta charset="UTF-8">
    <title>C++ Comments</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/36d3ddbb90.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.32.0/codemirror.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.32.0/codemirror.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.50.2/mode/clike/clike.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.50.2/theme/eclipse.min.css"></script>
  </head>

  <body>

    <div id="header">
      <a href="../home.php">atLearn<span style='color: blue'>.com</span></a>
    </div>

    <div id="container">
      <div id="topnav">
        <div id="topnav-left">
          <a href="../home.php" class="topnav-button">HOME</a>
          <a class="topnav-button active-topnav">C++</a>
        </div>
        <div id="topnav-right">

        </div>
      </div>

      <div id="page-wrap">
        <div id="sidenav-wrap">
          <div id="sidenav">
            <h2 class="nav-title">C++ Tutorial</h2>
            <a href="cppintro.php" class="nav-button">C++ Intro</a>
            <a href="cppenvironment.php"class="nav-button">C++ Environment</a>
            <a class="nav-button active-sidenav">C++ Comments</a>
            <a href="cppvariables.php" class="nav-button">C++ Variables</a>
            <a href="cppsyntax.php" class="nav-button">C++ Syntax</a>
            <a href="cppin-out.php" class="nav-button">C++ Input/Output</a>
            <a href="cppoperators.php" class="nav-button">C++ Operators</a>
            <h2 class="nav-title">C++ Program Structure</h2>
            <a href="cppstatements.php" class="nav-button">C++ Statements</a>
            <a href="cppfunctions.php" class="nav-button">C++ Functions</a>
            <a href="cppname_visibility.php" class="nav-button">C++ Name Visibility</a>
            <h2 class="nav-title">C++ Data Types</h2>
            <a href="cpparrays.php" class="nav-button">C++ Arrays</a>
            <a href="cpppointers.php" class="nav-button">C++ Pointers</a>
            <a href="cppdynamic_memory.php" class="nav-button">C++ Dynamic memory</a>
            <a href="cppdata_structures.php" class="nav-button">C++ Data structures</a>
            <a href="cppother_data.php" class="nav-button">C++ Other Data Types</a>
            <h2 class="nav-title">C++ Classes</h2>
            <a href="cppoop.php" class="nav-button">C++ OOP</a>
            <a href="cppobjects.php" class="nav-button">C++ Objects</a>
            <a href="cppclass_methods.php" class="nav-button">C++ Class Methods</a>
            <a href="cppconstructors.php" class="nav-button">C++ Constructors</a>
            <a href="cppaccess_spec.php" class="nav-button">C++ Access specifiers</a>
            <a href="cppencapsulation.php" class="nav-button">C++ Encapsulation</a>
            <a href="cppinheritance.php" class="nav-button">C++ Inheritance</a>
            <a href="cpppolymorphism.php" class="nav-button">C++ Polymorphism</a>
            <h2 class="nav-title">C++ Other</h2>
            <a href="cpptype_conversions.php" class="nav-button">C++ Type Conversions</a>
            <a href="cppexceptions.php" class="nav-button">C++ Exceptions</a>
            <a href="cppmacros.php" class="nav-button">C++ Macros</a>
            <br>
            <br>
            <br>
          </div>
        </div>
        <div id="text-wrap">
          <h1 id="lesson-title">C++ Comments</h1>
          <br>
          <div class="prev-next-button">
            <a href="cppenvironment.php" class="btn-prev">❮ Previous</a>
            <a href="cppvariables.php" class="btn-next">Next ❯</a>
          </div>
          <hr>
          <p>Comments can be used to explain C++ code, and to make it more readable.
             It can also be used to prevent execution when testing alternative code.
             Comments can be <code>singled-lined</code> or <code>multi-lined</code>.
          </p>
          <hr>
          <h2 id="lesson-subtitle">C++ Single-line comments</h2>
          <p>Single-line comments start with two forward slashes
             (<code class="code-highlight">//</code>).
          </p>
          <p>Any text between <code class="code-highlight">//</code> and the end
             of the line is ignored by the compiler (will not be executed).
          </p>
          <p>This example uses 2 single-line comments:
          </p>
          <figure>
            <figcaption>example.cpp</figcaption>
            <textarea id="form-code" name="code" rows="8" cols="50">
//This is a single-line comment
cout<<"Hello World!";
cout<<"Hello atLearn!";//This is another single-line comment
return 0;</textarea>
            <script>
              var editor = CodeMirror.fromTextArea(document.getElementById("form-code"), {
                lineNumbers: true,
                mode: "text/x-c++src",
                matchBrackets: true,
                readOnly: true,
                theme: "eclipse"
              });
            </script>
          </figure>
          <p>As you can see, the first comment is situated before a line of code
             and the second one is situated at the end of a line of code.
          </p>
          <hr>
          <h2 id="lesson-subtitle">C++ Multi-line comments</h2>
          <p>Multi-line comments start with <code class="code-highlight">/*</code>
             and ends with <code class="code-highlight">*/</code>.
          </p>
          <p>Any text between <code class="code-highlight">/*</code> and
             <code class="code-highlight">*/</code> will be ignored by the compiler.
          </p>
          <figure>
            <figcaption>example2.cpp</figcaption>
            <textarea id="form-code-2" name="code" rows="8" cols="50">
/*this
is
a
multi-line
comment*/
cout<<"Hello World!"; </textarea>
            <script>
              var editor = CodeMirror.fromTextArea(document.getElementById("form-code-2"), {
                lineNumbers: true,
                mode: "text/x-c++src",
                matchBrackets: true,
                readOnly: true,
                theme: "eclipse"
              });
            </script>
          </figure>
          <p>
            Multi-line comments are also often used to comment lines of code so you
            won't have to delete them when u want to test it's functionalities.
          </p>
          <br>
          <div class="prev-next-button">
            <a href="cppenvironment.php" class="btn-prev">❮ Previous</a>
            <a href="cppvariables.php" class="btn-next">Next ❯</a>
          </div>
          <hr>
          <br><br><br>
    </div>

    <script>
      window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;
        if (currentScrollPos == 0) {
          document.getElementById("header").style.display = "block";
          document.getElementById("container").style.marginTop = "55px"
        } else {
          document.getElementById("header").style.display = "none";
          document.getElementById("container").style.marginTop = "0px"
        }
      }
    </script>
  </body>
</html>
