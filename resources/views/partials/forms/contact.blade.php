<form method="POST" action="{{ route('contact.store') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="firstName">Voornaam</label>
        <input type="text" class="form-control" id="firstName" name="first_name">
    </div>
    <div class="form-group">
        <label for="middleName">Tussenvoegsel <small>(optioneel)</small></label>
        <input type="text" class="form-control" id="middleName" name="middle_name">
    </div>
    <div class="form-group">
        <label for="lastName">Achternaam</label>
        <input type="text" class="form-control" id="lastName" name="last_name">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
        <label for="question">Uw vraag</label>
        <textarea type="text" class="form-control" id="question" name="question"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Verzenden</button>
    </div>

    <div class="form-group">
       @include('partials/errors')
    </div>
</form>

