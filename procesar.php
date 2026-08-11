<?php
echo "<!DOCTYPE html>";
echo "<html lang='es'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Pedido recibido</title>";
echo "<link rel='stylesheet' href='styles.css'>";
echo "</head>";
echo "<body>";
echo "<div class='contenedor'>";
echo "<h1>Pedido recibido en Heladería Doña Nieve</h1>";
echo "<p><strong>Nombre:</strong> " . $_POST["nombre"] . "</p>";
echo "<p><strong>Correo:</strong> " . $_POST["correo"] . "</p>";
echo "<p><strong>Sabores:</strong> " . $_POST["sabores"] . "</p>";
echo "<h2>Carta de la heladería</h2>";
$productos = [
    "Cono simple - Bs 8",
    "Copa doble - Bs 15",
    "Litro para llevar - Bs 35"
];
echo "<ul>";
foreach ($productos as $producto) {
    echo "<li>" . $producto . "</li>";
}
echo "</ul>";
echo "<p>Te atiende Franz Alanes Fuentes.</p>";
echo "</div>";
echo "</body>";
echo "</html>";
?>
