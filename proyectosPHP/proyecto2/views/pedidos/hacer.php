
<?PHP if(isset($_SESSION['login'])):
    $stats=Utils::statisticsCarritos()
    ?>
    
    <h1>hacer pedidos</h1>

    <a href="<?=base_url?>Carrito/index">ver total de precio y cantidad de productos</a>

    <form action="<?=base_url?>Pedido/add" method="POST">
        <label for="provincia">provincia</label>
        <input type="text" name="provincia">

        <label for="localidad">localidad</label>
        <input type="text" name="localidad">

        <label for="direccion">direccion</label>
        <input type="text" name="direccion">

        <input type="submit">
        
    </form>

<?PHP else:?>
    <script type="text/javascript"> alert("inicia sesion o registrate");
                                    window.location.href ="<?=base_url?>Producto/destacados" </script>
<?PHP endif;?>    