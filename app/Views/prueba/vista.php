<?php ?>


<!-- Hero section -->
<section class="hero-section">
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="public/crossxgame/img/bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 text-white">
                        <span>Estreno del Mes</span>
                        <h2>The Last of Us Part II en PS4</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        <a href="#" class="site-btn sb-line">Ver Más...</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="public/crossxgame/img/bg-4.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 text-white">
                    </div>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="public/crossxgame/img/bg-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 text-white">
                        <span>Estreno anterior</span>
                        <h2>Resident Evil 3 Remake</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        <a href="#" class="site-btn sb-line">Ver Más...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->




<!-- letest product section -->
<section class="top-letest-product-section" style="background-color: #F8F8F8;">
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="text-center">Juegos Nuevos</h3> 
            </div>
                <!--nuevos ps4-->
            <div class="card-body">
                <div class="product-slider owl-carousel">
        <?php 
                foreach ($prodps4 as $ps4 ) {

                 echo "<div class='product-item'style='margin:0px;'> <div
                 class='card'> <a href='producto?id=".$ps4->id."'><img class='card-img-top'
                 src='public/crossxgame/img/product/".$ps4->img."' alt='Card
                 image cap'></a>"; 
                
                 echo "<div class='card-footer'> <div
                 class='float-left'>"; 
                 echo "<small><b href='asdas' >".$ps4->nombre."</b></small> </div> <div
                 class='float-right'>";
                 echo  "<b>$".$ps4->precio."</b> </div> </div> </div> </div>";
        }?>
          </div>
            </div>
            <!--fin nuevos ps4-->



            <!--nuevos nintendo-->
             <div class="card-body">
                <div class="product-slider owl-carousel">                           
        <?php 
                foreach ($prodswitch as $switch ) {
                 echo "<div class='product-item'style='margin:0px;'> <div
                 class='card'> <a href='".$switch->id."'><img class='card-img-top'
                 src='public/crossxgame/img/product/".$switch->img."' alt='Card
                 image cap'></a>"; 
                
                 echo "<div class='card-footer'> <div
                 class='float-left'>"; 
                 echo "<small><b href='asdas' >".$switch->nombre."</b></small> </div> <div
                 class='float-right'>";
                 echo  "<b>$".$switch->precio."</b> </div> </div> </div> </div>";
        }?>
                </div>
            </div>
                <!--fin nuevos nintendo-->





                  <!--nuevos Xbox-->
             <div class="card-body">
                <div class="product-slider owl-carousel">
        <?php 
                foreach ($prodxbox as $xbox ) {  
                 echo "<div class='product-item'style='margin:0px;'> <div
                 class='card'> <a href='".$xbox->id."'><img class='card-img-top'
                 src='public/crossxgame/img/product/".$xbox->img."' alt='Card
                 image cap'></a>"; 
                
                 echo "<div class='card-footer'> <div
                 class='float-left'>"; 
                 echo "<small><b href='asdas' >".$xbox->nombre."</b></small> </div> <div
                 class='float-right'>";
                 echo  "<b>$".$xbox->precio."</b> </div> </div> </div> </div>";
        }?>
                    </div>
            </div>
           <!--fin nuevos xbox-->



        </div>
        <br>

        <!-- Banner section 1-->
<section class="banner-section">
    <br>
    <br>
    <br>
        <div class="banner set-bg" data-setbg="public/crossxgame/img/banner.jpg">
            <div class="tag-new">Nuevo</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <span class="text-white">YA DISPONIBLE</span>
            <a href="#" class="site-btn">Ver mas...</a>
        </div>   
</section>
<!-- Banner section 1 end  -->
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h3 class="text-center">Accesorios</h3>
            </div>

            <div class="card-body">

                <div class="product-slider owl-carousel">



                    <?php 
                foreach ($prodAcc as $Acc ) {

                 echo "<div class='product-item'style='margin:0px;'> <div
                 class='card'> <a href='".$Acc->id."'><img class='card-img-top'
                 src='public/crossxgame/img/product/".$Acc->img."' alt='Card
                 image cap'></a>"; 
                
                 echo "<div class='card-footer'> <div
                 class='float-left'>"; 
                 echo "<small><b href='asdas' >".$Acc->nombre."</b></small> </div> <div
                 class='float-right'>";
                 echo  "<b>$".$Acc->precio."</b> </div> </div> </div> </div>";
        }?>


                </div>
            </div>
        </div>
        <br>
        <!-- Banner section 2-->
<section class="banner-section">
    <br>
    <br>
    <br>
        <div class="banner set-bg" data-setbg="public/crossxgame/img/banner.jpg">
            <div class="tag-new">Nuevo</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <span class="text-white">YA DISPONIBLE</span>
            <a href="#" class="site-btn">Ver mas...</a>
        </div>   
</section>

<!-- Banner section 2 end  -->
        <div class="card">
            <div class="card-header bg-success text-white">
                <h3 class="text-center">Figuras y otros</h3>
            </div>
            <div class="card-body">
                <div class="product-slider owl-carousel">
        <?php 
                foreach ($prodfiguras as $figuras ) {
                echo "<div class='product-item'style='margin:0px;'> <div
                 class='card'> <a href='".$figuras->id."'><img class='card-img-top'
                 src='public/crossxgame/img/product/".$figuras->img."' alt='Card
                 image cap'></a>"; 
                 echo "<div class='card-footer'> <div
                 class='float-left'>"; 
                 echo "<small><b href='asdas' >".$figuras->nombre."</b></small> </div> <div
                 class='float-right'>";
                 echo  "<b>$".$figuras->precio."</b> </div> </div> </div> </div>";
        }?>
              </div>
            </div>
        </div>
    </div>
</section>
<!-- letest product section end -->


<!-- Banner section foot-->
<section class="banner-section">
    <br>
    <br>
    <br>
        <div class="banner set-bg" data-setbg="public/crossxgame/img/banner.jpg">
            <div class="tag-new">Nuevo</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <span class="text-white">YA DISPONIBLE</span>
            <a href="#" class="site-btn">Ver mas...</a>
        </div>   
</section>
