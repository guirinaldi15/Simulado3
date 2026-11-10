<div>
  <h1> <i>CADASTRO DE PRODUTOS</i></h1>
  <br>
  <form class="grid grid-cols-1 gap-5" wire:submit.prevent='salvar'>
    <div class="grid gap-5">
      <div class="form-field md:g-col-6">
        <label for="validationServer01" class="form-label">Nome</label>
        <input type="text" class="form-control is-valid" id="validationServer01" wire:model="nome" value=""
          aria-describedby="validationServer01Valid validationServer01Invalid">
        <div id="validationServer01Invalid" class="invalid-feedback">Nome completo é requirido</div>
      </div>
      <br>

      <div class="form-field md:g-col-6">
        <label for="validationServerAddress" class="form-label">Descricao</label>
        <input type="text" class="form-control is-valid" id="validationServerAddress" wire:model='descricao'
          value="1234 Main St" aria-describedby="validationServerAddressValid validationServerAddressInvalid">
      </div>

      <div class="form-field md:g-col-6">
        <label for="validationServerAddress" class="form-label">Marca</label>
        <input type="text" class="form-control is-valid" id="validationServerAddress" wire:model='marca'
          value="1234 Main St" aria-describedby="validationServerAddressValid validationServerAddressInvalid">
      </div>

     
        <div class="form-field md:g-col-6">
          <label for="validationServer03" class="form-label">Categoria</label>
          <input type="text" class="form-control is-invalid" wire:model='categoria' id="validationServer03"
            aria-describedby="validationServer03Feedback">
        </div>
      

      
        <div class="form-field md:g-col-6">
          <label for="validationServer03" class="form-label">Unidade de Medida</label>
          <input type="text" class="form-control is-invalid" wire:model='unidade_medida' id="validationServer03"
            aria-describedby="validationServer03Feedback">
        </div>
     

     
        <div class="form-field md:g-col-6">
          <label for="validationServer03" class="form-label">Preço de Custo</label>
          <input type="text" class="form-control is-invalid" wire:model='preco_custo' id="validationServer03"
            aria-describedby="validationServer03Feedback">
        </div>
     

     
        <div class="form-field md:g-col-6">
          <label for="validationServer03" class="form-label">Preço de Venda</label>
          <input type="text" class="form-control is-invalid" wire:model='preco_venda' id="validationServer03"
            aria-describedby="validationServer03Feedback">
        </div>
      

      <div class="form-field md:g-col-6">
        <label for="validationServer04" class="form-label">Fornecedores</label>
        <select class="form-control is-invalid" wire:model="fornecedores_id" id="validationServer04"
          aria-describedby="validationServer04Feedback">
          <option>Selecione um fornecedor</option>
          @foreach ($fornecedores as $fornecedor)
          <option value={{ $fornecedor->id }}>{{ $fornecedor->nome }}</option>
          @endforeach


        </select>
      </div>
<
    </div>


    <button class="btn-solid theme-primary justify-self-start" type="submit">Enviar</button>
  </form>
</div>