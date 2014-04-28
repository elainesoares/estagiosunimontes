<div class="container_center">
    <h3>Cadastro de Empresa</h3>
    <?php echo validation_errors(); ?>
    <form class="form_cadastroEmpresa" name='cadastro_empresa' action='insertEmpresa' method='POST'>
        <img src="<?php echo base_url(); ?>assets/img/imagem-gray.png" class="img-thumbnail margin-bottom float-left" >
        <span class="float-left margin-left">
            Suba a logo da sua empresa
            <div class="div-upploadarquivo margin-top">
                <input type="file" name="imagem" class="btn buttonUploadFile"/>
                <input type="submit" name="enviar" value="Enviar" style="border:1px solid #CCCCCC; width: 100px; height: 30px;" class="margin-top"/>
            </div>
        </span>
        <div class="clear"></div>

        <!--Lateral Esquerda do formulário de Cadastro-->
        <div class="form_left">
            <div class="group">
                <label>Nome da Empresa</label>
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
            <div >
                <input class="input-mini" type="password" id="repetirSenha" name='repetirSenha' onblur="verificaSenha()">
                <span class="spanError">As senhas não coincidem</span>
            </div>

            <label>Endereço</label>
            <div>
                <input class="input-large" id="endereco" name="endereco" type="text"/>
            </div>

            <label>Nº</label>
            <input class="input-mini" id="numero" name="numero" type="text"/>
            <span style="margin-left: 10px; margin-right: 10px;">Complemento</span>
            <input class="input-medium" id="complemento" name="complemento" type="text" />

            <label>Bairro</label>
            <input class="input-medium" id="bairro" name="bairro" type="text"/>
            <span style="margin-left: 10px; margin-right: 10px;">Cep</span>
            <input class="input-mini" id="cep" name="cep" type="text" maxlength="9" style="width: 100px;"/>

            <label>Cidade</label>
            <input id="cidade" name="cidade" type="text"/>
            <span style="margin-left: 10px; margin-right: 10px;">UF</span>
            <select id="cidade" name="uf">
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AM">AM</option>
                <option value="AP">AP</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MG" selected="selected">MG</option>
                <option value="MS">MS</option>
                <option value="MT">MT</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="PR">PR</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="RS">RS</option>
                <option value="SE">SE</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="TO">TO</option>
            </select>

            <label>Telefone 1</label>
            <input type="text" id="telefonePrincipal" name='telefonePrincipal'>
            <img src="<?php echo base_url(); ?>assets/img/icons/mais.png" class="iconsCadastro float-right cursor" style="margin-right: 127px; margin-top: 2px;"/>

            <label>CNPJ</label>
            <div>
                <input class="input-large" type="text" id="cnpj" name='cnpj'>
            </div>

            <label>Email</label>
            <div>
                <input class="input-large" type="text" id='email' name='email' placeholder="teste@exemplo.com">
            </div>

        </div>

        <!--Lateral direita do formulário de cadastro--> 
        <div class="form_rigth">

            <label>Web Site</label>
            <div>
                <input class="input-large" type="text" id='webSite' name='webSite' placeholder="www.exemplo.com.br">
            </div>

            <label><button>Facebook</button></label>
            <div>
                <input class="input-large" type="text" id='facebook' name='facebook'>
            </div>

            <label style='width: 108px; margin-top: -6px;'>Horário de Funcionamento</label>
            <input class="input-mini" type="text" id="horarioInicio" name='horarioInicio'>
            <span>ás</span>
            <input class="input-mini" type="text" id="horarioTermino" name="horarioTermino">

            <div style="margin-top: 5px;">
                <label style='width: 108px;'>Horário de Sábado</label>
                <input class="input-mini" type="text" id="horarioSabadoInicio" name='horarioSabadoInicio'>
                <span>ás</span>
                <input class="input-mini" type="text" id="horarioSabadoTermino" name="horarioSabadoTermino">
            </div>

            <label>Informações Adicionais</label>
            <textarea rows="4" cols="50" id="informacoesAdicionais" name='informacoesAdicionais'></textarea>
            
            <input type="hidden" value="1" id='tipo' name="tipo"/>

            <button type="submit" class="btn" style='float: right; margin-left: 30px; margin-bottom: 30px; margin-top: 30px;'>Cadastrar</button>
            <div style='float: right; margin-left: 30px; margin-bottom: 30px; margin-top: 30px;'><a href="<?php echo base_url(); ?>" class="btn">Cancelar</a></div>

        </div>
        <div class="clear"></div>
    </form>
</div>

