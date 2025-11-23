<?php
// Tableau de produits
$produits = [
    [
        "designation" => "Ordinateur Portable",
        "quantite" => 5,
        "prix" => 350000
    ],
    [
        "designation" => "Clé USB 32Go",
        "quantite" => 20,
        "prix" => 75000
    ],
    [
        "designation" => "Souris Sans Fil",
        "quantite" => 15,
        "prix" => 50000
    ]
];

// Fonction pour afficher tous les produits
function afficherProduits($produits) {
    foreach ($produits as $produit) {
        echo "Désignation : " . $produit["designation"] . "<br>";
        echo "Quantité : " . $produit["quantite"] . "<br>";
        echo "Prix : " . $produit["prix"] . " GNF<br><br>";
    }
}

// Fonction pour calculer le total
function totalProduits($produits) {
    $total = 0;
    foreach ($produits as $produit) {
        $total += $produit["quantite"] * $produit["prix"];
    }
    return $total;
}

// Fonction pour trouver le produit le plus cher
function produitLePlusCher($produits) {
    $plusCher = $produits[0];

    foreach ($produits as $produit) {
        if ($produit["prix"] > $plusCher["prix"]) {
            $plusCher = $produit;
        }
    }

    return $plusCher;
}

// Affichage
afficherProduits($produits);

echo "<strong>Total général : " . totalProduits($produits) . " GNF</strong><br><br>";

$cher = produitLePlusCher($produits);

echo "<strong>Produit le plus cher :</strong><br>";
echo "Désignation : " . $cher["designation"] . "<br>";
echo "Prix : " . $cher["prix"] . " GNF<br>";
?>
