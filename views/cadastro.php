<form class="form" action="cadastro" method="POST">
  <div class="form-group">
    <label for="cadastroNome">Seu nome</label>
    <input type="text" class="form-control" id="cadastroNome" name="cadastroNome" aria-describedby="emailHelp" placeholder="Seu nome">
  </div>
  <div class="form-group">
    <label for="cadastroEmail">Endereço de email</label>
    <input type="email" class="form-control" id="cadastroEmail" name="cadastroEmail" aria-describedby="emailHelp" placeholder="Seu email">
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email com ninguém.</small>
  </div>
  <div class="form-group">
    <label for="cadastroSenha">Senha</label>
    <input type="password" class="form-control" id="cadastroSenha" name="cadastroSenha" placeholder="Senha">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>