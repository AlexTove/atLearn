# atLearn
Site-ul este facut pentru a fi hostat pe windows.
Modificarile ce trebuie facute sunt urmatoarele(in caz ca se doreste functionarea compilatorului online):
-pentru compilator am folosit compilatorul de C++ folosit si de Code::Blocks,
 asa ca mai intai trebuie modificat fisierul compilers/cpp.php (mai exact
 PATH-ul din functia putenv cu path-ul unde este compilatorul(un exemplu 
 este path-ul compilatorului meu care a ramas in fisier)).
-tot acelasi PATH trebuie adaugat si la variabilele de mediu
PS: Exista un bug ce trebuie rezolvat in care la apasarea butonului 'Run Code' toate celelalte browsere in afara de chrome isi dau refresh la pagina
