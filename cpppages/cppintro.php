<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>C++ Tutorial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/36d3ddbb90.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">

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
            <a class="nav-button active-sidenav">C++ Intro</a>
            <a href="cppenvironment.php" class="nav-button">C++ Environment</a>
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
          <h1 id="lesson-title">C++ Introduction</h1>
          <hr>
          <h2 id="lesson-subtitle">What is C++?</h2>
          <ul>
            <li>C++ is a high-level, general-purpose programming language</li>
            <li>C++ was developed by Bjarne Stroustrup as an extension of the C
                programming language
            </li>
            <li>C++ was designed with a bias toward system programming and
                embedded, resource-constrained software and large systems, with
                performance, efficiency, and flexibility of use as its design
                highlights.
            </li>
            <li>C++ is standardized by the International Organization for
                Standardization (ISO), with the latest standard version ratified
                and published by ISO in December 2017 as ISO/IEC 14882:2017
            </li>
          </ul>
          <hr>
          <h2 id="lesson-subtitle">Reasons to learn C++</h2>
          <img src="../img/cppreasons.png">
          <p><strong>1. C++ Popularity and High Salary</strong></p>
          <p>C++ is one of the most popular languages in the world. It is used
             by some <strong>4.4 million developers</strong> worldwide. Also,
             C++ Developers are quite sought after and they hold some of the most
             high-paying jobs in the industry with an average base pay of <strong>
             $103, 035 per year</strong>.
          </p>
          <p><strong>2. C++ has Abundant Library Support</strong></p>
          <p>C++ has the <strong>Standard Template Library(STL)</strong> that is
             very useful as it helps in writing code compactly and quickly as
             required. It contains mainly four components i.e. algorithms,
             containers, functions, and iterators.
          </p>
          <p>The algorithms are of different types such as sorting, searching,
             etc. The containers store classes to implement differentdata structures
             that are commonly used such as stacks, queues, hash tables, vectors,
             sets, lists, maps, etc. The functors allow the working of the associated
             function to be customized with the help of the parameters passed.
             Also, the iterators are used for working upon a sequence of values.
          </p>
          <p><strong>3. C++ has a Large Community</strong></p>
          <p>There is a large online community of C++ users and experts that is
            particularly helpful in case any support is required.
            There is a lot of resources like <strong><a href="../home.php">atLearn
            </a></strong> etc. available on the internet regarding C++. Some of
            the other online resources for C++ include
            <strong><a target="_blank" href="https://stackoverflow.com/questions/tagged/c%2B%2B">
            StackOverflow</a></strong>, <strong><a target="_blank" href="https://en.cppreference.com/w/">
            cppreference.com</a></strong>, <strong><a target="_blank" href="https://isocpp.org/">
            Standard C++</a></strong>, etc.
          </p>
          <p><strong>4. C++ In Databases</strong></p>
          <p>There are many modern day databases such as <strong>MySQL, MongoDB,
            MemSQL, </strong> etc. that are written in C++. This is because C++ is
            quite modern and it supports features like exceptions, lambda expressions,
            etc. Many of the databases that are written in C++ are used in almost all
            of the in-use applications such as YouTube, WordPress, Twitter, Facebook,
            etc.
          </p>
          <p><strong>5. C++ In Operating Systems</strong></p>
          <p>All the major operating systems such as <strong>Windows, Linux,
            Android, Ubuntu, iOS</strong>, etc. are written in a combination of C
            and C++. The Windows applications are written in C++, while Android
            applications are written in Java along with C/C++ with non-default
            run-times for C++ support. Also, C++ can be used to develop the core
            of the applications in iOS.
          <br>
            In general, C or C++ are used in operating systems because of the speed
            and strongly typed nature of these languages.
          </p>
          <p><strong>6. C++ In Compilers</strong></p>
          <p>C++ is closer to the hardware level and is a comparatively low-level
            language. Because of this reason, it is used in many compilers as a
            backend programming language. An example of this is the
            <strong><a target="_blank" href="https://www.gnu.org/software/gcc/">GNU Compiler
            Collection (GCC)</a></strong> which is currently written mostly in
            C++ along with C.
          </p>
          <p><strong>7. C++ In Web Browsers</strong></p>
          <p>A lot of web browsers are developed using C++ such as <strong>Chrome,
            Firefox, Safari, </strong> etc. Chrome contains C++ in the rendering
            engine, JavaScript engine, and the UI. Firefox uses mainly in the
            rendering engine and a little in the UI. Safari also uses C++ in the
            rendering engine and JavaScript engine.
          </p>
          <p>All these web browsers and more use C++, particularly in the rendering
            engines because it provides the required speed that is necessary for
            the rendering engines since they need to display the content at an
            accelerated rate.
          </p>
          <p><strong>8. C++ In Graphics</strong></p>
          <p>Applications requiring graphics such as <strong>digital image processing,
            computer vision, screen recording programs, </strong> etc. use C++ due
            to its high speed. This can also include different games that have graphics
            as a big part of their structure.
          </p>
          <p><strong>9. C++ In Embedded Systems</strong></p>
          <p>C++ is closer to the hardware level and so it is quite useful in
            embedded systems as the software and hardware in these are closely
            coupled. There are many embedded systems that use C++ such as
            <strong>smart watches, MP3 players, GPS systems</strong>, etc.</p>
          <p><strong>10. C++ is Portable</strong></p>
          <p>Programs developed in C++ can be moved from one platform to another.
            This is one of the main reasons that applications requiring multi-platform
            or multi-device development often use C++.
          </p>
          <br>
          <div class="prev-next-button">
            <a href="../home.php" class="btn-prev">❮ Home</a>
            <a href="cppenvironment.php" class="btn-next">Next ❯</a>
          </div>

        </div>
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
