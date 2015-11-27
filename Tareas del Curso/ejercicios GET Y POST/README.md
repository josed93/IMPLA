# EJERCICIOS GET Y POST
EJERCICIO 1: (en la carpeta ej1)

a) Crear el fichero alumnos.html

Ese fichero deber� contener una tabla de al menos 10 alumnos con  los datos personales de cada uno de ellos en cada una de las filas.

Los datos personales (columnas) que deber� tener la tabla son los siguientes: DNI, Nombre,Apellidos, Direcci�n, Tel�fono y Correo Electr�nico

Al hacer click en el DNI se pasar� mediante GET un id (diferente para cada alumno) al fichero ficha.php

b) Crear el perfil.php

En el fichero perfil.php se mostar� el perfil de cada alumno (dependiendo de en cu�l haya hecho click).

El perfil deber� ser similar a la siguiente imagen:



NOTA: Los datos de los siguiente alumnos deber�n estar almacenados en un array de arrays. De tal manera que el elemento 0 de ese array contendr� un array asociativo con los datos del alumno con id 0.

EJERCICIO 2: (en la carpeta ej2)

Vamos a simular un proceso de matricula. Para ellos crearemos dos archivos login.php y matricula.php

Login.php

Al entrar por primera vez se mostrar� un cuadro modal de login usando jQuery UI

Cuando hagamos click en el bot�n "ENTRAR" del formulario de login si el usuario es "Pepe" y la contrase�a "1234" el script PHP no redigir� a matricula.php, en caso contrario nos mostrar� un mensaje de error en la propia p�gina login.php. Deb�is buscar como hacer una redirecci�n en PHP.

Matricula.php

Al entrar por primera vez nos mostrar� un formulario con los siguiente campos:

Datos Personales: DNI, Nombre,Apellidos,Direcci�n,Tel�fono y Correo Electr�nico
Curso: Un select con las opciones 1� ASIR o 2� ASIR
Lista de Asignaturas: Una serie de checkboxes donde el usuario podr� elegir una o varias asignaturas
Un campo Radio para se�alar si el usuario pide Beca o no.
Al hacer click en enviar en ese mismo fichero matricula.php se nos mostrar� un resumen de la matr�cula que acaba  de realizar el usuario.

Si el usuario no ha seleccionado ninguna asignatura se volver� a mostrar el formulario y un mensaje de error diciendo "Ninguna asignatura seleccionada"

NOTA: Se valorar� positivamente la presentaci�n y maquetaci�n.
