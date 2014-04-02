<div class="container_center">
    <h3>Cadastro de Empresa</h3>
    <form class="form_cadastroEmpresa" name='cadastro_empresa' action='' method='POST'>
        <img src="<?php echo base_url(); ?>assets/img/imagem-gray.png" alt="..." class="img-thumbnail margin-bottom float-left" >
        <span class="float-left margin-left">
            Suba a logo da sua empresa
            <div class="div-upploadarquivo margin-top">
                <input type="file" name="arquivo" class="btn buttonUploadFile"/>
                <input type="submit" name="enviar" value="Enviar" style="border:1px solid #CCCCCC; width: 100px; height: 30px;" class="margin-top"/>
            </div>
        </span>
        <div class="clear"></div>
        <div class="form_rigth">
            <div class="group">
                <label>Nome da Empresa</label>
                <div class="">
                    <input class="input-large" type="text" id="nome" name='nome'>
                </div>
            </div>

            <div class="">
                <label class="" style="margin-top: -6px;">Nome do Responsável</label>
                <div class="">
                    <input class="input-large" type="text" id="nome_responsavel" name='nome_responsavel'>
                </div>
            </div>

            <div class="">
                <label class="" for="">Usuário</label>
                <div class="">
                    <input type="text" id="usuario" name='usuario'>
                </div>
            </div>

            <div class="">
                <label class="" for="">Senha</label>
                <div class="">
                    <input class="input-mini" type="password" id="senha" name='senha'>
                </div>
            </div>

            <div class="">
                <label class="" for="">Repetir Senha</label>
                <div class="">
                    <input class="input-mini" type="password" id="repetir_senha" name='repetir_senha' >
                </div>
            </div>

            <div class="">
                <label class="">Endereço</label>
                <div class="">
                    <input class="input-large" id="endereco" name="endereco" type="text"/>
                </div>
            </div>
            <div class="">
                <label class="">Nº</label>
                <input class="input-mini" id="num" name="num" type="text"/>
                <span style="margin-left: 10px; margin-right: 10px;">Complemento</span>
                <input class="input-medium" id="complemento" name="complemento" type="text" />
            </div>

            <div class="">
                <label class="">Bairro</label>
                <input class="input-medium" id="bairro" name="bairro" type="text"/>
                <span style="margin-left: 10px; margin-right: 10px;">Cep</span>
                <input class="input-mini" id="cep" name="cep" type="text" maxlength="9" style="width: 100px;"/>
            </div>

            <div class="">
                <label class="">Cidade</label>
                <input id="cidade" name="cidade" type="text"/>
                <span style="margin-left: 10px; margin-right: 10px;">UF</span>
                <select id="cidade" name="cidade">
                    <option value="ac">AC</option>
                    <option value="al">AL</option>
                    <option value="am">AM</option>
                    <option value="ap">AP</option>
                    <option value="ba">BA</option>
                    <option value="ce">CE</option>
                    <option value="df">DF</option>
                    <option value="es">ES</option>
                    <option value="go">GO</option>
                    <option value="ma">MA</option>
                    <option value="mg" selected="selected">MG</option>
                    <option value="ms">MS</option>
                    <option value="mt">MT</option>
                    <option value="pa">PA</option>
                    <option value="pb">PB</option>
                    <option value="pe">PE</option>
                    <option value="pi">PI</option>
                    <option value="pr">PR</option>
                    <option value="rj">RJ</option>
                    <option value="rn">RN</option>
                    <option value="ro">RO</option>
                    <option value="rr">RR</option>
                    <option value="rs">RS</option>
                    <option value="se">SE</option>
                    <option value="sc">SC</option>
                    <option value="sp">SP</option>
                    <option value="to">TO</option>
                </select>
            </div>

            <div class="">
                <label class="" for="">Telefone Principal</label>
                <input class="" type="text" id="telefone_principal" name='telefone_principal'>
            </div>

        </div>

        <div class="form_left">
            <div class="">
                <label class="" >CNPJ</label>
                <div class="">
                    <input class="input-large" type="text" id="cnpj" name='cnpj'>
                </div>
            </div>
            <div class="">
                <label class="" for="">Email</label>
                <div class="">
                    <input class="input-large" type="email" id='email' nome='email' placeholder="teste@exemplo.com">
                </div>
            </div>
            <div class="">
                <label class="" for="">Web Site</label>
                <div class="">
                    <input class="input-large" type="text" id='web_site' name='web_site' placeholder="www.exemplo.com.br">
                </div>
            </div>

            <div class="">
                <label class="" for="">Facebook</label>
                <div class="">
                    <input class="input-large" type="text" id='facebook' name='facebook'>
                </div>
            </div>
            <div class="">
                <label class="" for="">Twitter</label>
                <div class="">
                    <input class="input-large" type="text" id='twitter' name='twitter'>
                </div>
            </div>
            <div class="">
                <label class="" for="">Linkedin</label>
                <div class="">
                    <input class="input-large" type="text" id='linkedin' name='linkedin'>
                </div>
            </div>
            <div class="">
                <label class="" style='width: 108px; margin-top: -6px;' for="">Horário de Funcionamento</label>
                <input class="input-mini" type="text" id="horario_inicio" name='horario_inicio'>
                <span>ás</span>
                <input class="input-mini" type="text" id="horario_termino" name="horario_termino">
            </div>
            <div style="margin-top: 5px;">
                <label class="" style='width: 108px;' for="">Horário de Sábado</label>
                <input class="input-mini" type="text" id="horario_sabadoinicio" name='horario_inicio'>
                <span>ás</span>
                <input class="input-mini" type="text" id="horario_sabadotermino" name="horario_termino">
            </div>
            <div class="">
                <label class="" for="">Informações Adicionais</label>
                <div class="">
                    <textarea class='' rows="4" cols="50" id="informacoes_adicionais" name='informacoes_adicionais'></textarea>
                </div>
            </div>
            <button name='' type="submit" class="btn" style='float: right; margin-left: 30px; margin-bottom: 30px; margin-top: 30px;'>Cadastrar</button>
            <div style='float: right; margin-left: 30px; margin-bottom: 30px; margin-top: 30px;'><a href="<?php echo base_url();?>" class="btn">Cancelar</a></div>
            
        </div>
        <div class="clear"></div>
    </form>
</div>
