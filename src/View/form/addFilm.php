<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <h2>Ajouter un film</h2>
            <hr>
            <form action="post" method="post">
                <div class="form-group">
                    <label for="titre">Titre :</label>
                    <input class="form-control" type="text" name="titre" id="titre" value="">
                </div>
                <div class="form-group">
                    <label for="date_sortie">Date sortie :</label>
                    <input class="form-control flatpickr flatpickr-input" type="datetime" name="date_sortie" id="date_sortie">
                </div>
                <div class="form-group">
                    <label for="synopsis">Synopsis :</label>
                    <textarea class="form-control" name="synopsis" id="synopsis"  rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="realisateur">Réalisateur :</label>
                    <select name="realisateur" id="realisateur" class="form-control">
                        <option value="" selected disabled>Choisir un réalisateur</option>
                        <option value="">Jean-Luc Godard</option>
                        <option value="">Jacques Audiard</option>
                        <option value="">François Truffaut</option>
                        <option value="">George Méliès</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">AJOUTER</button>
            </form>
        </div>
    </div>
</div>
<script>
    window.addEventListener('load', function(){
        flatpickr("#date_sortie", {})
    })
</script>