<?php
$msg = $_GET['msg'] ?? "";
if($msg == ""){
  $msg = "Bem vindo!";
}
if($msg == "alterado"){
    $msg = "Ferfil alterada com sucesso!";
}
if($msg == "inserido"){
   $msg = "Ferfil cadastrada com sucesso!";
}
if($msg == "excluido"){
    $msg = "Ferfil excluida com sucesso!";
}
if($msg == "login_erro"){
  $msg = "Usuário não encontrado";
}
if($msg == "erro_login"){
  $msg = "Usuário não logado";
}
if($msg == "quizcad"){
  $msg = "Cadastro realizado com sucesso!";
}

?>
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="https://png.vector.me/files/images/2/8/287808/warning_icon_preview" width="20" class="rounded me-2" alt="...">
      <strong class="me-auto">Aviso importante</strong>
      <small></small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
    <?php echo $msg?>
    </div>
  </div>
</div>