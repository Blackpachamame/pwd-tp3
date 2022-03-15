# PWD - Trabajos Prácticos

## Tabla de contenido

- [Descripción](#descripción-)
  - [Objetivo](#objetivo-)
- [Mi Procedimiento](#mi-procedimiento-)
  - [Construido con](#construido-con-%EF%B8%8F)
  - [Lo que aprendimos](#lo-que-aprendimos-)
  - [Problemas y soluciones](#problemas-y-soluciones-)
  - [Recursos útiles](#recursos-útiles-)

## Descripción 📋

- <b>Nombre del grupo:</b> Grupo 1
- <b>Participantes:</b> [Eugenia Garcia Ruiz](https://github.com/Eugenia-2793), [Lucas Andres Villarruel](https://github.com/AndyVil/), [Marcos Andrés Travaglini](https://github.com/Blackpachamame), [Santiago Avilez Ariza ](https://github.com/santiagoavilez)
- <b>Carrera:</b> Tecnicatura Universitaria en Desarrollo Web
- <b>Materia:</b> Programación Web Dinámica

### Objetivo 📌

Validar todos los formularios que se implementen en cada uno de los ejercicios del TP. Utilizar los atributos de HTML5 y donde crea necesario complemente la validación con javascript. Subir archivos al servidor.

## Mi Procedimiento 👣

### Construido con 🛠️

- HTML5
- CSS3
- Jquery
- Bootstrap 5
- PHP
- Visual Studio Code

### Lo que aprendimos 🤓

- Subir archivos
- Restringir el tipo, tamaño y las dimensiones de los archivos a subir
- Que no se necesita una base de datos para guardar datos
- Que es necesario validar las acciones tanto por parte del cliente como en el servidor
- Organizar mejor los script
- Validaciones desde el cliente por medio de js

### Problemas y soluciones 🔫

Problema: Si subiamos imagenes con diferentes medidas, la grilla se mantenía, pero el boton "ver detalles" se estiraba hacia arriba y la imagen quedaba cortada.

![problema con la grilla de peliculas](https://i.imgur.com/haB3XJ0.jpg)

Solución: Para solucionar esto, colocamos una restricción con php para que todas las imagenes que se suban tengan una misma relación de aspecto. De esta forma, las imagenes van ir cambiando de tamaño de acuerdo a las dimensiones de la pantalla y se van a mantener parejas con respecto a las demás imagenes de la grilla.

```php
/* Comprobamos el ancho y alto de la imagen para mantener una misma relación de aspecto, getimagesize nos devuelve el ancho y alto de la imagen */
if ($todoOK) {
  $image_info =  getimagesize($_FILES['imagen']['tmp_name']);
  $image_width = $image_info[0];
  $image_height = $image_info[1];

	/* Verifico que el ancho sea mayor o igual a 400 */
	$ancho_limite =  false;
	if ($image_width >=  400) {
    $ancho_limite =  true;
	}

	/* Verifico que el alto sea de (1.5)*(ancho) */
	$alto_limite =  false;
	if ($image_height == ($image_width *  1.5)) {
    $alto_limite =  true;
	}

	/* Controlamos las dimensiones de la imagen */
	if (!((($ancho_limite) && ($alto_limite)))) {
    $error =  "ERROR: La imagen no cumple con las dimensiones establecidas.";
    $todoOK =  false;
	}
}
```

### Recursos útiles 👈

- [Repositorio de Claudia Carrasco](https://github.com/ClauCarrasco/TPBootstrap)
- [Documentación de Bootstrap](https://getbootstrap.com/docs/5.0/getting-started/introduction/)
