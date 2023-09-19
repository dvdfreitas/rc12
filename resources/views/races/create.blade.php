<form action="/corridas/store" method="POST">
    @csrf
    <h1>Corrida</h1>
    Nome: <input id="name" name="name" type="text" />
    Password: <input id="password" name="password" type="password" />
    <button type="submit">Criar</button>
</form>