<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>E-mail</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($fornecedores as $fornecedor)
            <tr>
                <td>{{ $fornecedor->id }}</td>
                <td>{{ $fornecedor->nome }}</td>
                <td>{{ $fornecedor->CPF }}</td>
                <td>{{ $fornecedor->telefone }}</td>
                <td>{{ $fornecedor->endereco }}</td>
                <td>{{ $fornecedor->email }}</td>




            </tr>
            @endforeach
        </tbody>
    </table>
</div>