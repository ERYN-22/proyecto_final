<?php
echo "$nombreDelMenuDesplegableParaMostrar: ";
echo "<selectname=\"$nombreInternoDelMenuDesplegable\">";
for ($i = 0; $i < count($listaDeElementosDeLaTabla); $i++)
    {
        echo "<option value=\"$listaDeElementosDeLaTabla[$i]\">
                              $listaDeElementosDeLaTabla[$i]</option>;
    }

    echo "</select>";
 ?>