<div class="container_center" style='height: 450px;'>
    <h3>Cadastro de Setor</h3>    
    <form class="form_cadastroSetor" name='cadastro_setor' action='insertSetor' method='POST'>
        <!--Lateral Esquerda do formulário de Cadastro-->
        <div class="form_left">
            <div class="group">
                <label>Nome da Setor</label>
                <input class="input-large" type="text" id="nome" name='nome'>
            </div>

            <label>Usuário</label>
            <div>
                <input class="input-mini" type="text" id="usuario" name='usuario'>
            </div>

            <label>Senha</label>
            <div>
                <input class="input-mini" type="password" id="senha" name='senha'> 
                <span class="spanError"></span>
            </div>

            <label>Repita a Senha</label>
            <div>
                <input class="input-mini" type="password" id="repetirSenha" name='repetirSenha' onblur="verificaSenha()">
                <span class="spanError">As senhas não coincidem</span>
            </div>
            
            <button type="submit" class="btn" style='float: right; margin-left: 30px; margin-bottom: 30px; margin-top: 30px;'>Cadastrar</button>
            <div style='float: right; margin-left: 30px; margin-bottom: 30px; margin-top: 30px;'><a href="<?php echo base_url(); ?>" class="btn">Cancelar</a></div>
            <div style='float: right; margin-left: 30px; margin-bottom: 30px; margin-top: 30px;'><a href="<?php echo base_url(); ?>" class="btn">Agora Não</a></div>

        </div>
        <div class="clear"></div>
    </form>
</div>

