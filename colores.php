<?php
/**
 * Controles en formularios 1-8 - controles_formularios_1_8.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2015 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2015-10-27
 * @link      http://www.mclibre.org
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Colores 3 (Resultado). Controles en formularios (1). 
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <link href="mi.css" rel="stylesheet" type="text/css" title="Color" />
<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$fondo  = recoge("fondo");
$letra  = recoge("letra");

print "  <style type=\"text/css\">body { background-color: $fondo; color: $letra; }</style>\n";

?>
</head>

<body>
<h1>Colores 2 (Resultado)</h1>

<p>Se han cambiado los colores elegidos.</p>

<p><a href="colores.html">Volver al formulario.</a></p>

<footer>
  
</footer>
</body>
</html>
