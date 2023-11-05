document.addEventListener("DOMContentLoaded", function () {
    // Obtener todas las imágenes de juegos
    var imagenesJuegos = document.querySelectorAll(".image");
    var contenedorImagenes = document.querySelector(".container");

    contenedorImagenes.addEventListener("mouseleave", function () {
        ocultarInformacion();
    });

    // Recorre todas las imágenes y agrega eventos
    imagenesJuegos.forEach(function (imagen) {
        imagen.addEventListener("mouseover", function (event) {
            var info = imagen.getAttribute("data-info");
            if (info) {
                mostrarInformacion(info, event.pageX, event.pageY);
            }
        });

        imagen.addEventListener("mouseout", function () {
            ocultarInformacion();
        });
    });

    // Función para mostrar el cuadro emergente de información
    function mostrarInformacion(info, x, y) {
        // Reemplaza '||' con saltos de línea '<br>'
        info = info.replace(/\|\|/g, '<br>');

        var imageInfo = document.createElement("div");
        imageInfo.className = "image-info-popup";

        // Calcula la posición para que esté al lado de la imagen
        var infoWidth = 300; // Ancho estimado de la ventana emergente
        var xOffset = 20; // Espacio entre la imagen y la ventana emergente
        var yOffset = 10; // Espacio vertical entre la imagen y la ventana emergente

        imageInfo.style.top = y - yOffset + "px";
        imageInfo.style.left = x + xOffset + "px";

        // Crear un contenedor div para el contenido HTML
        var infoContent = document.createElement("div");
        infoContent.innerHTML = info; // Esto interpretará el contenido HTML

        // Agregar el contenido al cuadro emergente
        imageInfo.appendChild(infoContent);

        // Agregar el cuadro emergente al cuerpo del documento
        document.body.appendChild(imageInfo);

        
    }

    // Función para ocultar el cuadro emergente de información
    function ocultarInformacion() {
        var imageInfo = document.querySelector(".image-info-popup");
        if (imageInfo) {
            imageInfo.parentNode.removeChild(imageInfo);
        }
    }
});
