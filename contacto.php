<?php include ("includes/templates/header.php"); ?>
 <body>
    
<main class="container">
<section>
    <div class="contenedor-c pading_top_2">
        <div class="form-cont">
            <div class="contacto-bg"></div>
            <form  action="correos.php" method="post" class="formulario glass" id="form">
                <div class="campo">
                    <label class="campo_label label-b"  for="nombre">Nombre</label>
                    <input class="campo_field" type="text" placeholder="Tu Nombre" name="nombre" required>
                </div>
                <div class="campo">
                    <label class="campo_label label-b " for="telefono">Teléfono</label>
                    <input class="campo_field" type="tel" placeholder="Tu Telefono" name="telefono" required>
                </div>
                <div class="campo">
                    <label class="campo_label label-b"  for="email">E-mail</label>
                    <input class="campo_field" type="email" placeholder="Tu E-mail" name="email" required>
                </div>
                <div class="campo">
                    <label class="campo_label label-b"  for="asunto">Asunto</label>
                    <input class="campo_field" type="text" placeholder="Tu Asunto" name="asunto" required         >
                </div>
                <div class="campo">
                    <label class="campo_label label-b"  for="mensaje">Mensaje</label>
                    <textarea class="campo_field campo_field-textarea" name="mensaje" required></textarea>
                </div>
                <div class="btn">
                    <input type="submit" value="Enviar" class="boton boton_primario" name="enviar">
                </div>
            </form>
        </div>
        <div class="form-redes glass">
                    <h4>Contacto</h4>
            <div class="column-c">
                <div class="c-row">
                    <i class="fa-solid fa-shop"></i>
                    <label>Mariano Zuñiga 113, Metepec, Mexico</label>
                </div>
                <div class="c-row">
                    <i class="fa-solid fa-phone"></i>
                    <label>722 212 7818</label>
                </div>
                <div class="c-row">
                    <i class="fa-solid fa-envelope"></i>
                    <label>constructora@scdimaco.com</label>
                </div>
            </div>
            <div class="column-h">
                 <div class="s-row">
                    <h4>Horarios de Atencion</h4>
                    <p>Lunes - Viernes 9:00 - 18:00</p>
                </div>
            </div>
            <h4>Redes Sociales</h4>
            <div class="column-s">
                <div class="s-row">
                    <i class="fa-brands fa-facebook"></i>
                    <a href="https://www.facebook.com/profile.php?id=100076341842163" target="_blank">Facebook</a>
                </div>
                <div class="s-row">
                    <i class="fa-brands fa-whatsapp"></i>
                    <a href="https://wa.me/message/IVQUUYFBJR73A1" target="_blank">WhatsApp</a>
                    <div class="qr">
                        <picture>
                                <source srcset="build/img/qrwa.webp" type="image/webp">
                                <source srcset="build/img/qrwa.jpeg" type="image/jpeg">
                                <img loading="lazy" src="build/img/qrwa.jpeg" alt="qrbr">
                        </picture>
                    </div>
                </div>
                <div class="s-row">
                    <i class="fa-brands fa-instagram"></i>
                    <a href="https://www.instagram.com/constructora.dimaco/?hl=es" target="_blank">Instagram</a>
                </div>
            </div>
        </div>
    </div>        
</section>
</main> 
<?php include ("includes/templates/footer.php");  ?>