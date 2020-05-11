<h2>Hello TK Pazin,</h2>
Dobio si poruku od: {{ $ime . " " . $prezime }}<br>
Ovdje su detalji:
<ul>
    <li><b>Ime:</b> {{ $ime }}</li>
    <li><b>Prezime:</b> {{ $prezime }}</li>
    <li><b>Email:</b> {{ $email }}</li>
    <li><b>Broj telefona:</b> {{ $phone_number }}</li>
</ul>
<h3>Naslov poruke: {{ $subject }}</h3>
<h4>Poruka:</h4>
{{ $user_message }}
<br><br>Lijepi pozdrav