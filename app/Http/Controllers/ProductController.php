<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class ProductController extends Controller {
    public function Listeproduits(){
        return('Liste des produits');
    }
    public function Ficheproduit($id) {
        return('Fiche du produit ' . ($id));
    }
}
