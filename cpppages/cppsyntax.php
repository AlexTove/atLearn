<!doctype html>
<html lang="en">
<html>
  <head>
    <meta charset="UTF-8">
    <title>C++ Syntax</title>
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
            <a href="cppenvironment.php" class="nav-button">C++ Environment</a>
            <a href="cppsyntax.php" class="nav-button active-sidenav">C++ Syntax</a>
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
          <h1 id="lesson-title">C++ Syntax</h1>
          <hr>
          <h2 id="lesson-subtitle">Let's understand our first code!</h2>
          <p>We are going to break the following code into pieces to understand it
             better:
          </p>
          <figure>
            <figcaption>helloworld.cpp</figcaption>
            <textarea id="form-code" name="code" rows="8" cols="50">
#include <iostream>
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
          <p><strong>Line 1:</strong> <code class="code-highlight">#include &ltiostream&gt</code>
             is a <strong>header file library</strong>. <strong>Header files</strong>
             are included at the beginning and contain predeclared function libraries,
             which can be used by users for their ease. Here, <code class="code-highlight">iostream</code>
             is a header file which provides us with input & output streams (like
             <code class="code-highlight">cout</code>).
          </p>
          <p><strong>Line 2:</strong> <code class="code-highlight">using namespace std</code>
             tells the compiler to use standard namespace. Namespace collects
             identifiers used for class, object and variables. Namespace can be
             used by two ways in a program, either by the use of using statement
             at the beginning, like we did in above mentioned program or by using
             name of namespace as prefix before the identifier with scope
             resolution (<code class="code-highlight">::</code>) operator
             (<em>Example:</em> <code class="code-highlight">std::cout<<"Hello World!"</code>).
          </p>
          <p>We will learn more about namespaces in a later chapter.</p>
          <p><strong>Line 3:</strong> A blank line. C++ ignores white space.</p>
          <p><strong>Line 4:</strong> <code class="code-highlight">main()</code>,
             is a <strong>function</strong> which holds the executing part of program
             its return type is <code class="code-highlight">int</code>. This function
             must always appear in out program.
          </p>
          <p><strong>Lines 5:</strong> On this line you can see a curly bracket
             <code class="code-highlight">{</code>. This represents the start of the
             <code class="code-highlight">main()</code> function.
          </p>
          <p><strong>Line 6:</strong> <code class="code-highlight">cout</code>
             (pronounced "see-out") is an <strong>object</strong> used together
             with the insertion operator (<code class="code-highlight"><<</code>)
             to output / print text. In our example it will output "Hello World".
          </p>
          <p><strong>Line 7:</strong> <code class="code-highlight">return 0;</code>
             is used to exit the <code class="code-highlight">main()</code> function
             in normal conditions. Any other values will show an error.
          </p>
          <p><strong>Line 8:</strong> The curly bracket <code class="code-highlight">}</code>
             marks the end of the <code class="code-highlight">main()</code> function.
          </p>
          <br>
          <div class="prev-next-button">
            <a href="cppenvironment.php" class="btn-prev">❮ Previous</a>
            <a href="cppin-out.php" class="btn-next">Next ❯</a>
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
