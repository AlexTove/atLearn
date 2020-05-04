<!doctype html>
<html lang="en">
<html>
  <head>
    <meta charset="UTF-8">
    <title>C++ Variables</title>
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
            <a href="cppcomments.php" class="nav-button">C++ Comments</a>
            <a class="nav-button active-sidenav">C++ Variables</a>
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
          <h1 id="lesson-title">C++ Variables</h1>
          <br>
          <div class="prev-next-button">
            <a href="cppcomments.php" class="btn-prev">❮ Previous</a>
            <a href="cppsyntax.php" class="btn-next">Next ❯</a>
          </div>
          <hr>
          <p>The usefulness of the "Hello World" programs shown in the previous
             pages is rather questionable. It surely would've been faster to
             just write that sentence by ourselves instead of writing those instructions
             to print it.
          </p>
          <p>However, programming is not limited only to printing simple texts on
             the screen. In order to go a little further on and to become able to
             write programs that perform useful tasks that really save us work,
             we need to introduce the concept of <strong>variables</strong>.
          </p>
          <p>In C++, there are different types of <strong>variables</strong>
            (defined with different <strong>keywords</strong>), for example,
            simple data types look like this:
          </p>
          <table>
            <tr>
              <th>Type</th>
              <th>Typical Bit Width</th>
              <th>Typical Range</th>
            </tr>
            <tr>
              <td>char</td>
              <td>1byte</td>
              <td>-127 to 127 or 0 to 255</td>
            </tr>
            <tr>
              <td>unsigned char</td>
              <td>1byte</td>
              <td>0 to 255</td>
            </tr>
            <tr>
              <td>signed char</td>
              <td>1byte</td>
              <td>-127 to 127</td>
            </tr>
            <tr>
              <td>int</td>
              <td>4bytes</td>
              <td>-2147483648 to 2147483647</td>
            </tr>
            <tr>
              <td>unsigned int</td>
              <td>4bytes</td>
              <td>0 to 4294967295</td>
            </tr>
            <tr>
              <td>signed int</td>
              <td>4bytes</td>
              <td>-2147483648 to 2147483647</td>
            </tr>
            <tr>
              <td>short int</td>
              <td>2bytes</td>
              <td>-32768 to 32767</td>
            </tr>
            <tr>
              <td>unsigned short int</td>
              <td>2bytes</td>
              <td>0 to 65,535</td>
            </tr>
            <tr>
              <td>signed short int</td>
              <td>2bytes</td>
              <td>-32768 to 32767</td>
            </tr>
            <tr>
              <td>long int</td>
              <td>8bytes</td>
              <td>-2,147,483,648 to 2,147,483,647</td>
            </tr>
            <tr>
              <td>signed long int</td>
              <td>8bytes</td>
              <td>same as long int</td>
            </tr>
            <tr>
              <td>unsigned long int</td>
              <td>8bytes</td>
              <td>0 to 4,294,967,295</td>
            </tr>
            <tr>
              <td>long long int</td>
              <td>8bytes</td>
              <td>-(2^63) to (2^63)-1</td>
            </tr>
            <tr>
              <td>unsigned long long int</td>
              <td>8bytes</td>
              <td>0 to 18,446,744,073,709,551,615</td>
            </tr>
            <tr>
              <td>float</td>
              <td>4bytes</td>
              <td></td>
            </tr>
            <tr>
              <td>double</td>
              <td>8bytes</td>
              <td></td>
            </tr>
            <tr>
              <td>long double</td>
              <td>12bytes</td>
              <td></td>
            </tr>
            <tr>
              <td>wchar_t</td>
              <td>2 or 4 bytes</td>
              <td>1 wide character</td>
            </tr>
          </table>
          <p><strong>Note:</strong> Above values may vary from compiler to compiler.
             In above example, we have considered GCC 64 bit.
          </p>
          <hr>
          <h2 id="lesson-subtitle">Variable Identifiers</h2>
          <p>A valid identifier is a sequence of one or more letters, digits, or
             underscore characters (<code class="code-highlight">_</code>). Spaces,
             punctuation marks, and symbols cannot be part of an identifier. In
             addition, identifiers shall always begin with a letter. They can also
             begin with an underscore character, but such identifiers are (in most cases)
             considered reserved for compiler-specific keywords or external identifiers, as well as
             identifiers containing two successive underscore characters anywhere.
             In no case a variable can begin with a digit.
          </p>
          <p>A list with C++ keywords can be accessed by using this link:
            <a href="https://en.cppreference.com/w/cpp/keyword" target="_blank">
              https://en.cppreference.com/w/cpp/keyword
            </a>
          </p>
          <p><strong>Very important:</strong> The C++ language is a "case sensitive"
             language. That means that an identifier written in capital letters
             is not equivalent to another one with the same name but written in
             small letters. Thus, for example, the <code>RESULT</code> variable is not the same
             as the <code>result</code> variable or the <code>Result</code> variable.
             These are three different identifiers identifiying three different variables.
          </p>
          <hr>
          <h2 id="lesson-subtitle">Declaring (Creating) Variables</h2>
          <p>C++ is a <strong>strongly-typed language</strong>, and requires every variable to be
             declared with its type before its first use. This informs the compiler
             the size to reserve in memory for the variable and how to interpret
             its value. The syntax to declare a new variable in C++ is straightforward:
             we simply write the type followed by one or more variable names (identifiers)
             separated by <code class="code-highlight">,</code>.
             For example:
          </p>
          <figure>
            <figcaption>example.cpp</figcaption>
            <textarea id="form-code" name="code" rows="8" cols="50">
int a;
float b;
int x, y, z;</textarea>
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
          <hr>
          <h2 id="lesson-subtitle">Constants</h2>
          <p>When you do not want others (or yourself) to override existing
             variable values, use the <code class="code-highlight">const</code>
             keyword (this will declare the variable as "constant",
             which means <strong>unchangeable and read-only</strong>). You should
             always declare the variable as constant when you have
             values that are unlikely to change:
          </p>
          <figure>
            <figcaption>example2.cpp</figcaption>
            <textarea id="form-code-2" name="code" rows="8" cols="50">
const float PI = 3.14;
const int hoursInADay = 24;</textarea>
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
          <br>
          <div class="prev-next-button">
            <a href="cppcomments.php" class="btn-prev">❮ Previous</a>
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
