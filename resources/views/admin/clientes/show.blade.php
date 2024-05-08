<h1>Detalhes do Cliente {{ $cliente->id  }}</h1>

<ul>
    <li>Nome: {{ $cliente->nome }}</li>
    <li>Cpf: {{ $cliente->cpf }}</li>
    <li>Data de Nascimento: {{ $cliente->data_nasc }}</li>
    <li>Telefone: {{ $cliente->telefone }}</li>
    <li>Ativo: {{ $cliente->ativo }}</li>
</ul>
<form action="{{ route('clientes.destroy', $cliente->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>
