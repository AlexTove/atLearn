<!doctype html>
<html lang="en">
<html>
  <head>
    <meta charset="UTF-8">
    <title>C++ Input/Output</title>
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
            <a href="cppvariables.php" class="nav-button">C++ Variables</a>
            <a href="cppsyntax.php" class="nav-button">C++ Syntax</a>
            <a class="nav-button active-sidenav">C++ Input/Output</a>
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
          <h1 id="lesson-title">C++ Input/Output</h1>
          <br>
          <div class="prev-next-button">
            <a href="cppsyntax.php" class="btn-prev">❮ Previous</a>
            <a href="cppoperators.php" class="btn-next">Next ❯</a>
          </div>
          <hr>
          <p>The example programs of the previous sections provided little
             interaction with the user, if any at all. They simply printed simple
             values on screen, but the standard library provides many additional
             ways to interact with the user via its input/output features. This
             section will present a short introduction to some of the most useful.
          </p>
          <hr>
          <h2 id="lesson-subtitle">C++ Standard Output(cout)</h2>
          <p>On most program environments, the <code>standard output</code> by
             default is the screen, and the <code>C++ stream object</code> defined
             to access it is <code class="code-highlight">cout</code>.
          </p>
          <p>For formatted output operations, <code class="code-highlight">cout</code>
             is used together with the <code>insertion operator</code>, which is
             written as <code class="code-highlight"><<</code>.
          </p>
          <p>Let's take the snippet as an example:</p>
          <figure>
            <figcaption>example.cpp</figcaption>
            <textarea id="form-code" name="code" rows="8" cols="50">
cout<<"Hello!";
cout<<120;
cout<<Hello;</textarea>
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
          <p>In the examples above, the code will print <code>Hello</code>,
            the number <code>120</code>, and the value of <strong>variable</strong> <code>Hello</code>
            into the <code>standard output stream</code> <code class="code-highlight">cout</code>.
            Notice that the sentence in the first statement is enclosed in double
            quotes (<code class="code-highlight">"</code>) because it is a string literal,
            while in the last one, <code>Hello</code> is not. The double quoting
            is what makes the difference. When the text is enclosed between them,
            the text is printed literally. When they are not, the text is interpreted as
            the identifier of a <strong>variable</strong>, and its value is printed instead.
          </p>
          <p>Multiple <code>insertion operations</code> (<code class="code-highlight"><<</code>)
             may be chained in a single statement:
          </p>
          <figure>
            <figcaption>example2.cpp</figcaption>
            <textarea id="form-code-2" name="code" rows="8" cols="50">
cout<<"This "<<" is a "<<"single C++ statement";</textarea>
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
            The above code will print <code>This is a single C++ statement</code>.
          </p>
          <hr>
          <h2 id="lesson subtitle">C++ Standard Input</h2>
          <p>You have already learned that <code class="code-highlight">cout</code>
             is used to output (print) values. Now we will use <code class="code-highlight">cin</code>
             to get user input.
          </p>
          <p><code class="code-highlight">cin</code> is a predefined variable
             that reads data from the keyboard with the extraction operator
             (<code class="code-highlight">>></code>).
          </p>
          <p>In the following example, the user can input a number,
            which is stored in the variable <code>x</code>. Then we print the
            value of <code>x</code>:
          </p>
          <figure>
            <figcaption>example3.cpp</figcaption>
            <textarea id="form-code-3" name="code" rows="8" cols="50">
int x;
cout<<"Type a number: "; // Type a number and press enter
cin>>x; // Get user input from the keyboard
cout<<"Your number is: "<<x; // Display the input value</textarea>
            <script>
              var editor = CodeMirror.fromTextArea(document.getElementById("form-code-3"), {
                lineNumbers: true,
                mode: "text/x-c++src",
                matchBrackets: true,
                readOnly: true,
                theme: "eclipse"
              });
            </script>
          </figure>
          <p>Just like we nested insertion operators (<code class="code-highlight"><<</code>)
             in our <code class="code-highlight">cout</code> instruction, we can nest
             extraction operators(<code class="code-highlight">>></code>) in our
             <code class="code-highlight">cin</code> instruction.
           </p>
           <p>Look at the example below: </p>
           <figure>
             <figcaption>example4.cpp</figcaption>
             <textarea id="form-code-4" name="code" rows="8" cols="50">
 int x, y;
 cout<<"Type 2 numbers: "; // Type 2 numbers and press enter
 // Or you could type the first, press enter and then type the second
 cin>>x>>y; // Get user input from the keyboard
 cout<<"Your numbers are: "<<x<<y; // Display the input value</textarea>
             <script>
               var editor = CodeMirror.fromTextArea(document.getElementById("form-code-4"), {
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
            <a href="cppsyntax.php" class="btn-prev">❮ Previous</a>
            <a href="cppoperators.php" class="btn-next">Next ❯</a>
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
