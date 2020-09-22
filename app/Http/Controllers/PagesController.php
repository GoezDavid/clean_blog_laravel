<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function show(String $titre, string $texte) {
    return view ('pages.show', compact('titre', 'texte'));
}
}
