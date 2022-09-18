@include('inc.nav', ['num' =>$tot])
<div class="container">
<h2 class="mb-4 text-center text-secondary">Créer une annonce</h2>
<form action="/publierAnnonce" method="POST" enctype="multipart/form-data">
    @csrf
<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="categorie">
    <option selected="">Catégorie</option>
   <option value="Véhicules">Véhicules</option>
   <option value="Pour la Maison et Jardin">Pour la Maison et Jardin</option>
   <option value="Emploi et Services">Emploi et Services</option>
   <option value="Immobilier">Immobilier</option>
   <option value="Entreprises">Entreprises</option>
   <option value="Habillement et Bien Etre">Habillement et Bien Etre</option>
   <option value="Informatique et Multimedias">Informatique et Multimedias</option>
   <option value="Loisirs et Divertissement">Loisirs et Divertissement</option>
   <option value="Autres">Autres</option>
</select>
<div class="mb-1"><label class="form-label" for="exampleTextarea">Titre de l'annonce</label> <input name="titre" type="text" placeholder="Entrez le titre" class="form-control" id="exampleTextarea" rows="1"></div>
<div class="mb-1"><label class="form-label" for="exampleTextarea">Description du produit/service</label> <textarea name="description" placeholder="Decrire ent details votre produit" class="form-control" id="exampleTextarea" rows="3"> </textarea></div>
<div class="mb-1"><label class="form-label" for="exampleTextarea">Prix</label> <input name="prix" type="number" placeholder="Entrez le prix en dinars" class="form-control" id="exampleTextarea" rows="3"></div>
<div class="mb-1"><label class="form-label" for="exampleTextarea">Ville</label>
<select name="place" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
    <option selected="">Ville</option>
   <option value="Sousse">Sousse</option>
   <option value="Bizerte">Bizerte</option>
   <option value="Beja">Béja</option>
   <option value="Gafsa">Gafsa</option>
   <option value="Le kef">Le Kef</option>
   <option value="La Manouba">La Manouba</option>
   <option value="Medenine">Médenine</option>
   <option value="Nabeul">Nabeul</option>
   <option value="Siliana">Siliana</option>
   <option value="Jendouba">Jendouba</option>
   <option value="Kairouan">Kairouan</option>
   <option value="kasserine">Kasserine</option>
   <option value="Mahdia">Mahdia</option>
   <option value="Monastir">Monastir</option>
   <option value="Sfax">Sfax</option>
   <option value="Tataouine">Tataouine</option>
   <option value="Zaghouan">Zaghouan</option>
   <option value="Ariana">Ariana</option>
   <option value="Ben Arous">Ben Arous</option>
   <option value="Gabes">Gabès</option>
   <option value="Kebili">Kébili</option>
   <option value="Tozeur">Tozeur</option>
   <option value="Tunis">Tunis</option>
   <option value="Sidi Bouzid">Sidi Bouzid</option>
  </select>
</div>
  <div class="mb-5">
    <label class="form-label" for="customFile">File input example</label>
    <input name="photo" class="form-control" id="customFile" type="file">
  </div>
  <div class="mb-5">
  <button type="submit" class="btn btn-dark">Envoyer</button>
  </div>
</form>
</div>
@include('inc.footer')
