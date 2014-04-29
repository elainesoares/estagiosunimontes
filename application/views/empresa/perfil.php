<div class="container_center">
    <div><?php echo $msg?></div>
    <h3>PERFIL <?php echo $nome; ?></h3>
    <form class="form_cadastroEmpresa" name='cadastro_empresa' action='salvar_alteracoes_perfil' method='POST'>
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
                <input class="input-large" type="text" id="nome" name='nome' value="<?php echo $nome; ?>">
            </div>

            <label>Endereço</label>
            <div>
                <input class="input-large" id="endereco" name="endereco" type="text" value="<?php echo $logradouro; ?>"/>
            </div>

            <label>Nº</label>
            <input class="input-mini" id="numero" name="numero" type="text" value="<?php echo $numero; ?>"/>
            <span style="margin-left: 10px; margin-right: 10px;">Complemento</span>
            <input class="input-medium" id="complemento" name="complemento" type="text" value="<?php echo $complemento; ?>"/>

            <label>Bairro</label>
            <input class="input-medium" id="bairro" name="bairro" type="text" value="<?php echo $bairro; ?>"/>
            <span style="margin-left: 10px; margin-right: 10px;">Cep</span>
            <input class="input-mini" id="cep" name="cep" type="text" maxlength="9" style="width: 100px;" value="<?php echo $cep; ?>"/>

            <label>Cidade</label>
            <input id="cidade" name="cidade" type="text" value="<?php echo $cidade; ?>"/>
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
            <input type="text" id="telefonePrincipal" name='telefonePrincipal' value="<?php echo $telefone; ?>">
            <img src="<?php echo base_url(); ?>assets/img/icons/mais.png" class="iconsCadastro float-right cursor" style="margin-right: 127px; margin-top: 2px;"/>

            <label>CNPJ</label>
            <div>
                <input class="input-large" type="text" id="cnpj" name='cnpj' value="<?php echo $cnpj; ?>" disabled="disabled">
            </div>

            <label>Email</label>
            <div>
                <input class="input-large" type="text" id='email' name='email' placeholder="teste@exemplo.com" value="<?php echo $email; ?>">
            </div>

        </div>

        <!--Lateral direita do formulário de cadastro--> 
        <div class="form_rigth">

            <label>Web Site</label>
            <div>
                <input class="input-large" type="text" id='webSite' name='webSite' placeholder="www.exemplo.com.br" value="<?php echo $webSite; ?>">
            </div>

            <label>Facebook</label>
            <div>
                <input class="input-large" type="text" id='facebook' name='facebook' value="<?php echo $enderecoRede; ?>">
            </div>

            <label style='width: 108px; margin-top: -6px;'>Horário de Funcionamento</label>
            <input class="input-mini" type="text" id="horarioInicio" name='horarioInicio' value="<?php echo $horarioFuncionamentoSemanaInicio; ?>">
            <span>ás</span>
            <input class="input-mini" type="text" id="horarioTermino" name="horarioTermino" value="<?php echo $horarioFuncionamentoSemanaTermino; ?>">

            <div style="margin-top: 5px;">
                <label style='width: 108px;'>Horário de Sábado</label>
                <input class="input-mini" type="text" id="horarioSabadoInicio" name='horarioSabadoInicio' value="<?php echo $horarioFuncionamentoSabadoInicio; ?>">
                <span>ás</span>
                <input class="input-mini" type="text" id="horarioSabadoTermino" name="horarioSabadoTermino" value="<?php echo $horarioFuncionamentoSabadoTermino; ?>">
            </div>

            <label>Informações Adicionais</label>
            <textarea rows="4" cols="50" id="informacoesAdicionais" name='informacoesAdicionais' value="<?php echo $informacoesAdicionais; ?>"></textarea>

            <input type="hidden" value="<?php echo $id; ?>" id='id' name="id"/>

            <button type="submit" class="btn" style='float: right; margin-left: 30px; margin-bottom: 30px; margin-top: 30px;'>Salvar Alterações</button>
            <div style='float: right; margin-left: 30px; margin-bottom: 30px; margin-top: 30px;'><a href="<?php echo base_url(); ?>" class="btn">Cancelar</a></div>

        </div>
        <div class="clear"></div>
    </form>
</div>

