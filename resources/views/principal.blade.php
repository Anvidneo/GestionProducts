<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="JuanBotero">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Inicio</title>
    <!-- Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.min.css" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">

    <div class="app-body">

        <!-- Contenido Principal -->
            @yield('contenido')
        <!-- /Fin del contenido principal -->
    </div>

    

    <footer class="app-footer">
        <span><a href="">Plantilla CoreUi</a> &copy; 2020</span>
        <span class="ml-auto">Editado Y desarollado por... <a href="">Juan Botero</a></span>
    </footer>

    <!-- Bootstrap and necessary plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/pace.min.js"></script>
    <!-- Plugins and scripts required by all views -->
    <script src="js/Chart.min.js"></script>
    <!-- GenesisUI main scripts -->
    <script src="js/template.js"></script>

    <script type="text/javascript">
        $('#modalEditar').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget)
            var name = button.data('name')
            var reference = button.data('reference')
            var price = button.data('price')
            var weight = button.data('weight')
            var unit = button.data('idUnit')
            var category = button.data('idCategory')
            var stock = button.data('stock')
            var id = button.data('id')
            var modal = $(this)

            //Llevar informacion al formulario segun las variables definidas
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #reference').val(reference); 
            modal.find('.modal-body #price').val(price); 
            modal.find('.modal-body #weight').val(weight);  
            modal.find('.modal-body #stock').val(stock); 
            modal.find('.modal-body #id').val(id);
        })

        $('#modalEliminar').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)

            //Llevar informacion al formulario segun las variables definidas
            modal.find('.modal-body #id').val(id); 
        })
    </script>
</body>

</html>