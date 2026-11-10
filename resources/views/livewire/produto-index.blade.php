<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Unidade de Medida</th>
                <th>Preço do Custo</th>
                <th>Preço de Venda</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->descricao }}</td>
                <td>{{ $produto->marca }}</td>
                <td>{{ $produto->categoria }}</td>
                <td>{{ $produto->unidade_medida }}</td>
                <td>{{ $produto->preco_custo }}</td>
                <td>{{ $produto->preco_venda }}</td>




            </tr>
            @endforeach
        </tbody>
    </table>
</div>