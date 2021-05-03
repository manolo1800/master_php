                    <!--BARRA LATERAL-->
                    <aside id="lateral">
                    <div id="loign" class="block_aside">
                        
                        <?php if(isset($_SESSION['carrito'])): ?>
                            <h3> mi carrito</h3>
                            <ul>
                                <?php $stats=Utils::statisticsCarritos(); ?>
                                <li><a href="<?=base_url?>Carrito/index"><img src="<?=base_url?>assets/img/carrito-de-compras.png"><i class="contador"><?=$stats['count']?></i></a></li>
                                <li><a>$<?=$stats['total'];?> </a></li>
                            </ul>
                        <?php endif; ?>  
                      
                        <?php if(!isset($_SESSION['login'])): ?>
                            
                            <h3>entrar a la web</h3>
                            <form action="<?=base_url?>Usuario/login" method="POST">
                                
                                <label for="email">email</label>
                                <input type="email" name="email"/>
                                
                                <label for="password">password</label>
                                <input type="password" name="password">
                                
                                <input type="submit" value="submit">
                            </form>
                            <ul>
                                <li><img src="<?=base_url?>assets/img/editar.svg"><a href="<?=base_url?>Usuario/registro">registrate</a></li>
                            </ul>
                        <?php else:?>
                                
                            <h3><?=$_SESSION['login']->nombre." ".$_SESSION['login']->apellidos ?></h3>    
                            
                            <ul>
                                <li><img src="<?=base_url?>assets/img/camion-de-reparto.png"><a href="<?=base_url?>Pedido/misPedidos"> mis pedidos</a></li>
                                
                                <?php if(isset($_SESSION['admin'])): ?>
                                    <li><img src="<?=base_url?>assets/img/abrir-caja.svg"><a href="<?=base_url?>Producto/index"> Gestionar productos</a></li>
                                    <li><img src="<?=base_url?>assets/img/camion-de-reparto.png"><a href="<?=base_url?>Pedido/index"> Gestionar pedidos</a></li>
                                    <li><img src="<?=base_url?>assets/img/sistema-de-gestion-de-contenidos.png"><a href="<?=base_url?>Categoria/index"> gestionar categorias</a></li>        
                                <?php endif; ?>    
                                
                               
                                
                                <li><img src="<?=base_url?>assets/img/cerrar-sesion.svg"><a href="<?=base_url?>Usuario/logout"> cerrar sesion</a></li>
                                    
                                
                            </ul>   
                              
                        <?php endif; ?>            
                            
                    </div>
                </aside>
        <!--CONTENIDO CENTRAL-->
        <div id="central">            