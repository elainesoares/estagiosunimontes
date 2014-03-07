<div class="container">
    <form name='login' action='' method='POST'>
        <div class="">
            <label class="" >Nome da Empresa</label>
            <div class="">
                <input class="" type="text" id="nome" name='nome'>
            </div>
        </div>
        <div class="">
            <label class="" >Nome do Responsável</label>
            <div class="">
                <input class="" type="text" id="nome_responsavel" name='nome_responsavel'>
            </div>
        </div>
        <div class="">
            <label class="" >CNPJ</label>
            <div class="">
                <input class="" type="text" id="cnpj" name='cnpj'>
            </div>
        </div>
        <div class="">
            <label class="" for="">Telefone 1</label>
            <input class="" type="text" id="ddd1" name='ddd1'>
            <input type="text" id="telefone1" name='telefone1'>
        </div>

        <div class="">
            <label class="" for="">Telefone 2</label>
            <input class="" type="text" id="ddd2" name='ddd2'>
            <input type="text" id="telefone2" name='telefone2'>
        </div>
        <div class="">
            <label class="" for="">Email</label>
            <div class="">
                <input class="" type="email" id='email' nome='email' placeholder="teste@exemplo.com">
            </div>
        </div>

        <!-- Tab Endereço -->
        <div class="">
            <label class="">CEP</label>
            <div class="">
                <input class="" id="cep" name="cep" type="text" maxlength="9" placeholder="Informe o CEP" />
            </div>
        </div>

        <div class="">
            <label class="">Logradouro</label>
            <div class="">
                <input class="" id="rua" name="rua" type="text"/>
            </div>
        </div>

        <div class="">
            <label class="">Nº</label>
            <div class="">
                <input id="num" name="num" type="text"/>
            </div>
        </div>

        <div class="">
            <label class="">Bairro</label>
            <div class="">
                <input id="bairro" name="bairro" type="text"/>
            </div>
        </div>

        <div class="">
            <label class="">Cidade</label>
            <div class="">
                <input id="cidade" name="cidade" type="text"/>
            </div>
        </div>

        <div class="">
            <label class="">UF</label>
            <div class="">
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
        </div>

        <div class="">
            <label class="" for="">Web Site</label>
            <div class="">
                <input class="" type="text" id='web_site' name='web_site' placeholder="www.exemplo.com.br">
            </div>
        </div>
        <div class="">
            <label class="" for="">Facebook</label>
            <div class="">
                <input class="" type="text" id='facebook' name='facebook'>
            </div>
        </div>
        <div class="">
            <label class="" for="">Twitter</label>
            <div class="">
                <input class="" type="text" id='twitter' name='twitter'>
            </div>
        </div>
        <div class="">
            <label class="" for="">Linkedin</label>
            <div class="">
                <input class="" type="text" id='linkedin' name='linkedin'>
            </div>
        </div>

        <div class="">
            <label class="" for="">Email</label>
            <div class="">
                <input class="" type="email" id='email' nome='email' placeholder="teste@exemplo.com">
            </div>
        </div>

        <span style='width: 100%; margin-bottom: 1px solid '></span>

        <div class="">
            <label class="" for="">Usuário</label>
            <div class="">
                <input type="text" id="usuario" name='usuario'>
            </div>
        </div>

        <div class="">
            <label class="" for="">Senha</label>
            <div class="">
                <input type="password" id="senha" name='senha'>
            </div>
        </div>

        <div class="">
            <label class="l" for="">Repetir Senha</label>
            <div class="">
                <input type="password" id="repetir_senha" name='repetir_senha' >
            </div>
        </div>
        <div class="">
            <label class="" style='width: 200px; margin-right: 20px; margin-left: -40px' for="">Horário de Funcionamento</label>
            <input class="" type="text" id="horario_inicio" name='horario_inicio'>
            <span>ás</span>
            <input class="" type="text" id="horario_termino" name="horario_termino">
        </div>
        <div class="">
            <label class="" for="">Informações Adicionais</label>
            <div class="">
                <textarea class='' rows="4" cols="50" id="informacoes_adicionais" name='informacoes_adicionais'></textarea>
            </div>
        </div>
        <div class='clear' style='margin-bottom: 20px;'></div>
        <div style='float: left; margin-left: 52px; margin-bottom: 20px; margin-top: 50px;'><a href="login.php" class="btn btn-large btn-primary">Cancelar</a></div>
        <button name='' type="submit" class="btn btn-large btn-primary" style='float: left; margin-left: 52px; margin-bottom: 20px; margin-top: 50px;'>Cadastrar</button>
        <div class='clear'></div>
    </form>
</div>
