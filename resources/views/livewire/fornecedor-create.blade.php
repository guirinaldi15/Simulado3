<div>
<form class="grid grid-cols-1 gap-5" wire:submit.prevent='salvar'>
  <div class="grid gap-5">
    <div class="form-field md:g-col-6">
      <label for="validationServer01" class="form-label">Nome</label>
      <input type="text" class="form-control is-valid" id="validationServer01" wire:model="nome" value="Mark Otto" aria-describedby="validationServer01Valid validationServer01Invalid">
      <div id="validationServer01Invalid" class="invalid-feedback">Nome completo é requirido</div>
    </div>
<br>

    <div class="form-field md:g-col-6">
      <label for="validationServerDonation" class="form-label">CPF</label>
      <div class="input-group">
        <input type="number" class="form-control is-invalid" wire:model="cpf" value="" id="validationServerDonation" aria-describedby="inputGroupPrepend3 serverDonateFeedbackValid serverDonateFeedbackInvalid">
      </div>
    </div>
  </div>
<br>

  <div class="form-field">
    <label for="validationServerAddress" class="form-label">Telefone</label>
    <input type="text" class="form-control is-valid" id="validationServerAddress" wire:model="telefone" value="1234 Main St" aria-describedby="validationServerAddressValid validationServerAddressInvalid">
  </div>
<br>

  <div class="form-field">
    <div class="form-field md:g-col-6">
      <label for="validationServer03" class="form-label">Endereço</label>
      <input type="text" class="form-control is-invalid" wire:model="endereco" id="validationServer03" aria-describedby="validationServer03Feedback">
    </div>

     <div class="form-field">
    <div class="form-field md:g-col-6">
      <label for="validationServer03" class="form-label">Email</label>
      <input type="text" class="form-control is-invalid" wire:model="email" id="validationServer03" aria-describedby="validationServer03Feedback">
    </div>


<br>
  <button class="btn-solid theme-primary justify-self-start" type="submit">Enviar</button>
</form>
</div>
