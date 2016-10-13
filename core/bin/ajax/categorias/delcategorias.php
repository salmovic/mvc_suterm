<?php
if (!empty($_POST['id_categorias'])) {
 $id_cat = trim($_POST['id_categorias']);
 echo $categoria->deleteCategorias($id_cat);
}
?>
