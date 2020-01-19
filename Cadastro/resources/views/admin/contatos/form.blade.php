<div class="form-group">
    <label for="inputName">Nome</label>
    <input type="text" name="nome" class="form-control" id="inputName" placeholder="Nome Sobrenome" value="{{ isset($registro->nome) ? $registro->nome:'' }}" required>
</div>

<div class="form-group">
    <label for="inputEmail">E-mail</label>
    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="nome@exemplo.com" value="{{ isset($registro->email) ? $registro->email:'' }}" required>
</div>

<div class="form-group">
    <label for="inputTelefone">Telefone</label>
    <input type="text" name="telefone" class="form-control" id="inputTelefone" placeholder="(xx)xxxx-xxxx" value="{{ isset($registro->telefone) ? $registro->telefone:'' }}" required>
</div>

<div class="form-group">
    <label for="inputImagem">Imagem</label>
    <input type="file" name="imagem" class="form-control-file" id="inputImagem">
  </div>

