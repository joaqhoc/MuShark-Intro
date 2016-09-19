    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script type="text/javascript">
        $(function(){
            var imagenes = [
                "imgs/liliesagua.jpg"
                , "imgs/piedras.jpg"
                , "imgs/orquideas.jpg"
                , "imgs/zen.jpg"
            ];
 
            // Precarga de todas la imagenes
            $(imagenes).each(function(){
                $("<img/>")[0].src = this; 
            });
 
            // Almacena cual imagen esta activa
            var index = 0;
 
            // Aplicamos la primera imagen del arreglo 
            // y lo configuramos para que realice un efecto de transición (fadeIn) 
            // de 500 milisegundos entre cada cambio imagen
            $.backstretch(imagenes[index], {speed: 500});
 
            // setInterval es una funcion que se repite determinado tiempo
            // en este caso cada 5000 milisegundos incrementando el index
            // y aplicando una nueva imagen
            setInterval(function() {
                index = (index >= imagenes.length - 1) ? 0 : index + 1;
                $.backstretch(imagenes[index]);
            }, 5000);
        });
    </script>