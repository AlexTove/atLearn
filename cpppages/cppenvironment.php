<!doctype html>
<html lang="en">
<html>
  <head>
    <meta charset="UTF-8">
    <title>C++ Environment</title>
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
            <a class="nav-button active-sidenav">C++ Environment</a>
            <a href="cppsyntax.php" class="nav-button">C++ Syntax</a>
            <a href="cppin-out.php" class="nav-button">C++ Input/Output</a>
            <a href="cppcomments.php" class="nav-button">C++ Comments</a>
            <a href="cppvariables.php" class="nav-button">C++ Variables</a>
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
          <h1 id="lesson-title">C++ Environment</h1>
          <hr>
          <h2 id="lesson-subtitle">What do you need to get started?</h2>
          <ul>
            <li>A text editor, like Notepad, <a href="http://www.codeblocks.org/downloads">
                Code::Blocks</a> etc. to write C++ code</li>
            <li>A compiler, like GCC, to translate C++ code into machine-code(a
                code that our computers can understand).
            </li>
          </ul>
          <hr>
          <h2 id="lesson-subtitle">How to install an IDE?</h2>
          <p>An IDE(Integrated Development Environment) is used to edit and compile
             the code;
          </p>
          <p>For the beginning, i recommend using <strong>Code::Blocks</strong>.
             This is the IDE that we will use in this tutorial. You can download
             <strong>Code::Blocks</strong> by accessing this link
             (<a target="_blank" href="http://www.codeblocks.org/downloads">http://www.codeblocks.org/downloads</a>).
             Download the <strong>mingw-setup.exe</strong>, which will install
             the text editor and the compiler.
          </p>
          <h2 id="lesson-subtitle">Now it's time for our first program!</h2>
          <p>Open <strong>Code::Blocks</strong> and create an empty file (<strong>
             File > New > Empty File</strong>)
          </p>
          <p> Write the following C++ code and save the file as <strong>
              helloworld.cpp</strong> (<strong>File > Save File as</strong>):
          </p>
          <figure>
            <figcaption>helloworld.cpp</figcaption>
            <textarea id="form-code" name="code" rows="8" cols="50">
#include<iostream>
using namespace std;

int main()
{
  cout<<"Hello World!";
  return 0;
}</textarea>
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

          <p>Don't worry if you don't understand the code above - we will discuss
            it in detail in later chapters. For now, focus on how to run the code.
          </p>
          <p>In Codeblocks, it should look like this:</p>
          <img class="lesson-img" src="../img/helloworld.png">
          <p>Then, go to <strong>Build > Build and run</strong> to execute the program.
             The result should look like this:
          </p>
          <div class="result">
            <div class="result-wrapper">
              <code class="result-code">
                Hello World!<br>
                Process returned 0 (0x0) execution time : 0.011 s<br>
                Press any key to continue.
              </code>
            </div>
          </div>
          <p><strong>Great!</strong> You have now written and executed your first
             program
          </p>
          <br>
          <div class="prev-next-button">
            <a href="cppintro.php" class="btn-prev">❮ Previous</a>
            <a href="cppsyntax.php" class="btn-next">Next ❯</a>
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
