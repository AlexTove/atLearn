<!doctype html>
<html lang="en">
<html>
  <head>
    <meta charset="UTF-8">
    <title>C++ Operators</title>
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
            <a href="cppin-out.php" class="nav-button">C++ Input/Output</a>
            <a class="nav-button active-sidenav">C++ Operators</a>
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
          <h1 id="lesson-title">C++ Operators</h1>
          <br>
          <div class="prev-next-button">
            <a href="cppin-out.php" class="btn-prev">❮ Previous</a>
            <a href="cppstatements.php" class="btn-next">Next ❯</a>
          </div>
          <hr>
            <h2 id="lesson-subtitle">Assignment operator (=)</h2>
            <p>The assignment operator assigns a value to a variable.</p>
            <figure>
              <figcaption>example.cpp</figcaption>
              <textarea id="form-code" name="code" rows="8" cols="50">
int x, y; //declaring the variables
x = 5; //we assign the value 5 to x
y = x //we assign the value of x to y</textarea>
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
            <p>As u can see in the example, we can assign to a variable either a value
               specified directly, either the value of another variable
            </p>
            <p><strong>Note:</strong> Consider that we are only assigning the
               value of <code>x</code> to <code>y</code> at the moment of the
               assignment operation. Therefore, if <code>x</code> changes at a later
               moment, it will not affect the new value taken by <code>y</code>.
            </p>
            <hr>
            <h2 id="lesson-subtitle">Arithmetic operators (+, -, *, /, %)</h2>
            <p>The five arithmetical operations supported by C++ are:</p>
            <table>
              <tr>
                <th>Operator</th>
                <th>Name</th>
                <th>Description</th>
              </tr>
              <tr>
                <td>+</td>
                <td>Addition</td>
                <td>Adds together two values</td>
              </tr>
              <tr>
                <td>-</td>
                <td>Subtraction</td>
                <td>Subtracts one value from another</td>
              </tr>
              <tr>
                <td>*</td>
                <td>Multiplication</td>
                <td>Multiplies two values</td>
              </tr>
              <tr>
                <td>/</td>
                <td>Division</td>
                <td>Divides one value by another</td>
              </tr>
              <tr>
                <td>%</td>
                <td>Modulus</td>
                <td>Returns the division remainder</td>
              </tr>
            </table>
            <hr>
            <h2 id="lesson-subtitle">Compound assignment (+=, -=, *=, /=, %=, >>=, <<=, &=, ^=, |=)</h2>
            <p>Compound assignment operators modify the current value of a variable
               by performing an operation on it. They are equivalent to assigning the
               result of an operation to the first operand:
            </p>
            <table>
              <tr>
                <th>Operator</th>
                <th>Example</th>
                <th>Same as</th>
              </tr>
              <tr>
                <td>+=</td>
                <td>x += 3</td>
                <td>x = x + 3</td>
              </tr>
              <tr>
                <td>-=</td>
                <td>x -= 3</td>
                <td>x = x - 3</td>
                <tr>
                  <td>*=</td>
                  <td>x *= 3</td>
                  <td>x = x * 3</td>
                </tr>
                <tr>
                  <td>/=</td>
                  <td>x /= 3</td>
                  <td>x = x / 3</td>
                </tr>
                <tr>
                  <td>%=</td>
                  <td>x %= 3</td>
                  <td>x = x % 3</td>
                </tr>
                <tr>
                  <td>&=</td>
                  <td>x &= 3</td>
                  <td>x = x & 3</td>
                </tr>
                <tr>
                  <td>|=</td>
                  <td>x |= 3</td>
                  <td>x = x | 3</td>
                </tr>
                <tr>
                  <td>^=</td>
                  <td>x ^= 3</td>
                  <td>x = x ^ 3</td>
                </tr>
                <tr>
                  <td>>>=	x</td>
                  <td>>>= 3</td>
                  <td>x = x >> 3</td>
                </tr>
                <tr>
                  <td><<=</td>
                  <td>x <<= 3</td>
                  <td>x = x << 3</td>
              </tr>
            </table>
            <hr>
            <h2 id="lesson-subtitle">Increment and Decrement (++, --)</h2>
            <p>Some expression can be shortened even more: the increase operator
               (<code class="code-highlight">++</code>) and the decrease operator
               (<code class="code-highlight">--</code>) increase or reduce by one
               the value stored in a variable. They are equivalent to
               <code class="code-highlight">+=1</code> and to
               <code class="code-highlight">-=1</code>, respectively.
            </p>
            <p>A peculiarity of this operator is that it can be used both as a
               prefix and as a suffix. That means that it can be written either
               before the variable name (<code class="code-highlight">++x</code>)
               or after it (<code class="code-highlight">x++</code>). Although
               in simple expressions like <code class="code-highlight">x++</code> or
               <code class="code-highlight">++x</code>, both have exactly the same
               meaning, in other expressions in which the result of the increment
               or decrement operation is evaluated, they may have an important
               difference in their meaning. In case that the increase operator is
               used as a prefix (<code class="code-highlight">++x</code>) of the
               value, the expression evaluates to the final value of <code>x</code>,
               once it is already increased. On the other hand, in case that it is
               used as a suffix (<code class="code-highlight">x++</code>), the
               value is also increased, but the expression evaluates to the value
               that <code>x</code> had before being increased. Notice the difference:
            </p>
            <figure>
              <figcaption>example2.cpp</figcaption>
              <textarea id="form-code-2" name="code" rows="8" cols="50">
x = 3;
y = ++x;
// x contains 4, y contains 4
x = 3;
y = x++;
// x contains 4, y contains 3</textarea>
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
            <hr>
            <h2 id="lesson-subtitle">Relational and comparison operators (==, !=, >, <, >=, <=)</h2>
            <p>Comparison operators are used to compare two values.</p>
            <p><strong>Note:</strong> The return value of a comparison is either
               <code class="code-highlight">true</code> (1) or
               <code class="code-highlight">false</code> (0).
            </p>
            <p>A list of all comparison operators:</p>
            <table>
              <tr>
                <th>Operator</th>
                <th>Name</th>
              </tr>
              <tr>
                <td>==</td>
                <td>Equal to</td>
              </tr>
              <tr>
                <td>!=</td>
                <td>Not equal to</td>
              </tr>
              <tr>
                <td><</td>
                <td>Less than</td>
              </tr>
              <tr>
                <td>></td>
                <td>Greater than</td>
              </tr>
              <tr>
                <td><=</td>
                <td>Less than or equal to</td>
              </tr>
              <tr>
                <td>>=</td>
                <td>Greater than or equal to</td>
              </tr>
            </table>
          <hr>
          <h2 id="lesson-subtitle">Logical operators (!, &&, ||)</h2>
          <p>Logical operators are used to determine the logic between variables
             or values:
          </p>
          <table>
            <tr>
              <th>Operator</th>
              <th>Name</th>
              <th>Description</th>
            </tr>
            <tr>
              <td>&&</td>
              <td>Logical and</td>
              <td>Returns true if both statements are true</td>
            </tr>
            <tr>
              <td>||</td>
              <td>Logical or</td>
              <td>Returns true if one of the statements is true</td>
            </tr>
            <tr>
              <td>!</td>
              <td>Logical not</td>
              <td>Returns false if the result is true and true if the result
                  is false
              </td>
            </tr>
          </table>
          <hr>
          <h2 id="lesson-subtitle">Conditional ternary operator (?)</h2>
          <p>The conditional operator evaluates an expression, returning one value
             if that expression evaluates to true, and a different one if the
             expression evaluates as false. Its syntax is:
          </p>
          <p><code>condition ? result1 : result2</code></p>
          <p>If condition is true, the entire expression evaluates to result1,
             and otherwise to result2.
          </p>
          <p>For example:</p>
          <figure>
            <figcaption>example3.cpp</figcaption>
            <textarea id="form-code-3" name="code" rows="8" cols="50">
int a, b, c; // declaring the variables
a = 2; // assigning value 2 to a
b = 7; // assigning value 7 to b
c = (a > b) ? a : b; // since a < b the expression evaluates to b, so c takes the value of b</textarea>
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
          <br>
          <div class="prev-next-button">
            <a href="cppin-out.php" class="btn-prev">❮ Previous</a>
            <a href="cppstatements.php" class="btn-next">Next ❯</a>
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
