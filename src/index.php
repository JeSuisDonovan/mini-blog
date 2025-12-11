<?php
    require_once "data/produits.php";

    $titre = "Produits" . " (" . htmlspecialchars(count($produits)) . ") ";

    // recuperation de filtres
    $wStock = $_GET['withnostock'] ?? 'off';

    // modif de liste en rapport avec filtres
    if($wStock === 'on'){
        $produitsListe = array_filter($produits, function($produit){
            return $produit['stock'] > 0;
        });
    }else{
        $produitsListe = $produits;
    }
 
 ?>


<!-- Le html, inclus l'implémentation du header & footer -->
<?php require_once "views/header.php"; ?>

<section class="fl dc ac">
<h1>Liste des produits (<?= htmlspecialchars(count($produits)) ?>)</h1>
<form action="index.php" method="GET" class="fl dr ac">
    <label class="fl dc">Stock only ?<input type="checkbox" name="withnostock" id="stockfilter"></label>
    <input type="submit" value="filtrer">
</form>
<table> 
    <thead>
        <tr>
            <th>Nom</th>
            <th>prix</th>
            <th>Catégorie</th>
            <th>Stock</th>
            <th>Lien</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($produitsListe as $id => $produit): ?>
            <tr>
                <td><?= htmlspecialchars($produit['nom']) ?></td>
                <td><?= htmlspecialchars(number_format($produit['prix'], 2, ',', ' ')) . '$' ?></td>
                <td><?= htmlspecialchars($produit['categorie']) ?></td>
                <td><?= htmlspecialchars($produit['stock']) ?></td>
                <td><a href="detail.php?id=<?= $produit['id'] ?>">Plus de détail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</section>

<?php require_once "views/footer.php"; ?>