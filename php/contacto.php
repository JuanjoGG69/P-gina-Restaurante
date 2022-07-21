<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Restaurante</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/contacto.css">
        <script src="https://kit.fontawesome.com/eee8b9a576.js" crossorigin="anonymous"></script>
    </head>
<?php require '../reutilizar/header.php'; ?>

<main>
    <form action="../reutilizar/enviar.php" method="post" class="formulario">
        <ul>
            <li>
                <article class="form__article">
                    <label for="mail">Ingrese su correo electrónico:</label>   
                    <input type="text" name="mail">
                </article>
            </li>
            <li>
                <article class="form__article">
                    <label for="asunto">Ingrese el asunto:</label>
                    <input type="text" name="asunto">
                </article>
            </li>
            <li>
                <article class="form__article">
                    <label for="mensaje"></label>
                    <textarea name="mensaje" cols="30" rows="10" placeholder="Escriba su mensaje..."></textarea>
                </article>
            </li>

            <li>
                <article class="boton">
                    <input type="submit" value="Enviar" name="enviar">
                </article>
            </li>
        </ul>
    </form>
</main>

<?php require '../reutilizar/footer.php'; ?>