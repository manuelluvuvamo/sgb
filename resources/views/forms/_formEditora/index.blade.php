<div class="row">


    <div class="col-md-4">
        <div class="form-group">
            <div class="mb-3">
                <label class="form-label" for="nome">
                    Nome</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome"
                    placeholder="" required value="{{ isset($editora->nome) ? $editora->nome : old('nome') }}"
                    autofocus />
                @error('nome')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">
            <div class="mb-3">
                <label class="form-label" for="pais">
                    País</label>

                <select class="js-example-basic-single form-select @error('pais') is-invalid @enderror" name="pais"
                    id="pais" required autocomplete="pais">

                    <option {{ isset($editora->pais) && $editora->pais == 'Afeganistão' ? 'selected' : '' }}
                        value="Afeganistão">
                        Afeganistão
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Andorra' ? 'selected' : '' }}
                        value="Andorra"> 
                        Andorra
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Angola' ? 'selected' : '' }} 
                        value="Angola">
                        Angola
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Antígua' ? 'selected' : '' }}
                        value="Antígua"> 
                        Antígua
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Argélia' ? 'selected' : '' }}
                        value="argelino"> 
                        Argélia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Argentina' ? 'selected' : '' }}
                        value="argentino"> 
                        Argentina
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Armênia' ? 'selected' : '' }}
                        value="armênio"> 
                        Armênia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Austrália' ? 'selected' : '' }}
                        value="australiano"> 
                        Austrália
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Áustria' ? 'selected' : '' }}
                        value="austríaco"> 
                        Áustria
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Azerbaijão' ? 'selected' : '' }} value="azeri">
                        Azerbaijão
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Bahamas' ? 'selected' : '' }}
                        value="bahamense"> 
                        Bahamas
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Bangladesh' ? 'selected' : '' }}
                        value="bangladês"> 
                        Bangladesh
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Barbados' ? 'selected' : '' }}
                        value="barbadiano"> 
                        Barbados
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Barém' ? 'selected' : '' }}
                        value="baremita"> 
                        Barém
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Bielorrússia' ? 'selected' : '' }}
                        value="bielorrusso"> 
                        Bielorrússia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Bélgica' ? 'selected' : '' }} value="belga">
                        Bélgica
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Belize' ? 'selected' : '' }}
                        value="belizenho"> 
                        Belize
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Benim' ? 'selected' : '' }}
                        value="beninense"> 
                        Benim
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Bolívia' ? 'selected' : '' }}
                        value="boliviano"> 
                        Bolívia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Bósnia' ? 'selected' : '' }} value="bósnio">
                        Bósnia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Botsuana' ? 'selected' : '' }}
                        value="bechuano"> 
                        Botsuana
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Brasil' ? 'selected' : '' }}
                        value="brasileiro"> 
                        Brasil
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Brunei' ? 'selected' : '' }}
                        value="bruneano"> 
                        Brunei
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Bulgária' ? 'selected' : '' }}
                        value="búlgaro"> 
                        Bulgária
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'BurkinaFaso' ? 'selected' : '' }}
                        value="burquinense"> 
                        BurkinaFaso
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Burundi' ? 'selected' : '' }}
                        value="burundês"> 
                        Burundi
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Butão' ? 'selected' : '' }}
                        value="butanense"> 
                        Butão
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Cabo Verde' ? 'selected' : '' }}
                        value="Cabo Verde"> 
                        Cabo Verde
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Camarões' ? 'selected' : '' }}
                        value="Camarões"> 
                        Camarões
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Camboja' ? 'selected' : '' }}
                        value="Camboja"> 
                        Camboja
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Canadá' ? 'selected' : '' }}
                        value="Canadá"> 
                        Canadá
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'República Centro Africana' ? 'selected' : '' }}
                        value="República Centro Africana">
                        República Centro Africana
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Chade' ? 'selected' : '' }}
                        value="Chade">
                        Chade
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'China' ? 'selected' : '' }} 
                        value="China">
                        China
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Chile' ? 'selected' : '' }}
                        value="Chile">
                        Chile
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Ilhas Cook' ? 'selected' : '' }}
                        value="Ilhas Cook">
                        Ilhas Cook
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Colômbia' ? 'selected' : '' }}
                        value="Colômbia">
                        Colômbia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Comores' ? 'selected' : '' }}
                        value="Comores">
                        Comores
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Costa Rica' ? 'selected' : '' }}
                        value="Costa Rica">
                        Costa Rica
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Croácia' ? 'selected' : '' }} 
                        value="Croácia">
                        Croácia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Cuba' ? 'selected' : '' }} 
                        value="Cuba">
                        Cuba
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Chipre' ? 'selected' : '' }}
                        value="Chipre">
                        Chipre
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'República Tcheca' ? 'selected' : '' }} 
                        value="República Tcheca">
                        República Tcheca
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'República Democrática do Congo' ? 'selected' : '' }}
                        value="República Democrática do Congo">
                        República Democrática do Congo
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Dinamarca' ? 'selected' : '' }}
                        value="Dinamarca">
                        Dinamarca
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Djibuti' ? 'selected' : '' }}
                        value="Djibuti">
                        Djibuti
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Dominica' ? 'selected' : '' }}
                        value="Dominica">
                        Dominica
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'República Dominicana' ? 'selected' : '' }}
                        value="República Dominicana">
                        República Dominicana
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Timor Leste' ? 'selected' : '' }}
                        value="Timor Leste">
                        Timor Leste
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Equador' ? 'selected' : '' }}
                        value="Equador">
                        Equador
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Egito' ? 'selected' : '' }}
                        value="Egito">
                        Egito
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'El Salvador' ? 'selected' : '' }}
                        value="El Salvador">
                        El Salvador
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Inglaterra' ? 'selected' : '' }} 
                        value="Inglaterra">
                        Inglaterra
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Guiné Equatorial' ? 'selected' : '' }}
                        value="Guiné Equatorial">
                        Guiné Equatorial
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Eritreia' ? 'selected' : '' }}
                        value="Eritreia">
                        Eritreia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Estônia' ? 'selected' : '' }}
                        value="Estônia">
                        Estônia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Fiji' ? 'selected' : '' }}
                        value="Fiji">
                        Fiji
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Finlândia' ? 'selected' : '' }}
                        value="Finlândia">
                        Finlândia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Finlândia' ? 'selected' : '' }}
                        value="Finlândia">
                        Finlândia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Gabão' ? 'selected' : '' }}
                        value="Gabão">
                        Gabão
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Gâmbia' ? 'selected' : '' }}
                        value="Gâmbia">
                        Gâmbia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Geórgia' ? 'selected' : '' }}
                        value="Geórgia">
                        Geórgia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Alemanha' ? 'selected' : '' }} 
                        value="Alemanha">
                        Alemanha
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Granada' ? 'selected' : '' }}
                        value="Granada">
                        Granada
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Grécia' ? 'selected' : '' }} 
                        value="Grécia">
                        Grécia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Guatemala' ? 'selected' : '' }}
                        value="Guatemala">
                        Guatemala
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Guiné' ? 'selected' : '' }}
                        value="Guiné">
                        Guiné
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'GuinéBissau' ? 'selected' : '' }}
                        value="GuinéBissau">
                        GuinéBissau
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Guiana' ? 'selected' : '' }}
                        value="Guiana">
                        Guiana
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Haiti' ? 'selected' : '' }}
                        value="Haiti">
                        Haiti
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Haiti' ? 'selected' : '' }}
                        value="Haiti">
                        Haiti
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Honduras' ? 'selected' : '' }}
                        value="Honduras">
                        Honduras
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Hungria' ? 'selected' : '' }}
                        value="Hungria">
                        Hungria
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Islândia' ? 'selected' : '' }}
                        value="Islândia">
                        Islândia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Índia' ? 'selected' : '' }}
                        value="Índia">
                        Índia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Indonésia' ? 'selected' : '' }}
                        value="Indonésia">
                        Indonésia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Irã' ? 'selected' : '' }}
                        value="Irã">
                        Irã
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Irlanda' ? 'selected' : '' }}
                        value="Irlanda">
                        Irlanda
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Israel' ? 'selected' : '' }}
                        value="Israel">
                        Israel
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Itália' ? 'selected' : '' }}
                        value="Itália">
                        Itália
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Costa do Marfim' ? 'selected' : '' }}
                        value="Costa do Marfim">
                        Costa do Marfim
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Jamaica' ? 'selected' : '' }}
                        value="Jamaica">
                        Jamaica
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Japão' ? 'selected' : '' }}
                        value="Japão">
                        Japão
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Jordânia' ? 'selected' : '' }}
                        value="Jordânia">
                        Jordânia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Cazaquistão' ? 'selected' : '' }}
                        value="Cazaquistão">
                        Cazaquistão
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Quênia' ? 'selected' : '' }}
                        value="Quênia">
                        Quênia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Quiribati' ? 'selected' : '' }}
                        value="Quiribati">
                        Quiribati
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Quirguistão' ? 'selected' : '' }}
                        value="Quirguistão">
                        Quirguistão
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Kuwait' ? 'selected' : '' }}
                        value="Kuwait">
                        Kuwait
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Laos' ? 'selected' : '' }}
                        value="Laos">
                        Laos
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Letônia' ? 'selected' : '' }}
                        value="Letônia">
                        Letônia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Líbano' ? 'selected' : '' }}
                        value="Líbano">
                        Líbano
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Lesoto' ? 'selected' : '' }}
                        value="Lesoto">
                        Lesoto
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Libéria' ? 'selected' : '' }}
                        value="Libéria">
                        Libéria
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Liechtenstein' ? 'selected' : '' }}
                        value="Liechtenstein">
                        Liechtenstein
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Lituânia' ? 'selected' : '' }}
                        value="Lituânia">
                        Lituânia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Luxemburgo' ? 'selected' : '' }}
                        value="Luxemburgo">
                        Luxemburgo
                    </option>
                    <option {{ isset($editora->pais) && $editora->Líbia == 'líbio' ? 'selected' : '' }} value="líbio">
                        Líbia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Macedônia' ? 'selected' : '' }}
                        value="Macedônia">
                        Macedônia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Madagascar' ? 'selected' : '' }}
                        value="Madagascar">
                        Madagascar
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Madagascar' ? 'selected' : '' }}
                        value="Madagascar">
                        Madagascar
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Malaui' ? 'selected' : '' }}
                        value="Malaui">
                        Malaui
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Maldivas' ? 'selected' : '' }}
                        value="Maldivas">
                        Maldivas
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Máli' ? 'selected' : '' }}
                        value="Máli">
                        Máli
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Malta' ? 'selected' : '' }}
                        value="Malta">
                        Malta
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Maurício' ? 'selected' : '' }}
                        value="Maurício">
                        Maurício
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Mauritânia' ? 'selected' : '' }}
                        value="Mauritânia">
                        Mauritânia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Ilhas Marshall' ? 'selected' : '' }}
                        value="Ilhas Marshall">
                        Ilhas Marshall
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Estados Federados da Micronésia' ? 'selected' : '' }}
                        value="Estados Federados da Micronésia">
                        Estados Federados da Micronésia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'México' ? 'selected' : '' }}
                        value="México">
                        México
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Marrocos' ? 'selected' : '' }}
                        value="Marrocos">
                        Marrocos
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Moldavia' ? 'selected' : '' }}
                        value="Moldavia">
                        Moldavia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Mônaco' ? 'selected' : '' }}
                        value="Mônaco">
                        Mônaco
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Mongólia' ? 'selected' : '' }}
                        value="Mongólia">
                        Mongólia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Montenegro' ? 'selected' : '' }}
                        value="Montenegro">
                        Montenegro
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Moçambique' ? 'selected' : '' }}
                        value="Moçambique">
                        Moçambique
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Myanmar' ? 'selected' : '' }}
                        value="Myanmar">
                        Myanmar
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Namíbia' ? 'selected' : '' }}
                        value="Namíbia">
                        Namíbia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Nauru' ? 'selected' : '' }}
                        value="Nauru">
                        Nauru
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Nepal' ? 'selected' : '' }}
                        value="Nepal">
                        Nepal
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Nova' ? 'selected' : '' }}
                        value="Nova">
                        Nova Zelândia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Nicarágua' ? 'selected' : '' }}
                        value="Nicarágua">
                        Nicarágua
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Níger' ? 'selected' : '' }}
                        value="Níger">
                        Níger
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Nigéria' ? 'selected' : '' }}
                        value="Nigéria">
                        Nigéria
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Niue' ? 'selected' : '' }}
                        value="Niue">
                        Niue
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Coréia do Norte' ? 'selected' : '' }}
                        value="Coréia do Norte">
                        Coréia do Norte
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Noruega' ? 'selected' : '' }}
                        value="Noruega">
                        Noruega
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Omã' ? 'selected' : '' }}
                        value="Omã">
                        Omã
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Palestina' ? 'selected' : '' }}
                        value="Palestina">
                        Palestina
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Paquistão' ? 'selected' : '' }}
                        value="Paquistão">
                        Paquistão
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Palau' ? 'selected' : '' }}
                        value="Palau">
                        Palau
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Panamá' ? 'selected' : '' }}
                        value="Panamá">
                        Panamá
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Papua Nova Guiné' ? 'selected' : '' }}
                        value="Papua Nova Guiné">
                        Papua Nova Guiné
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Paraguai' ? 'selected' : '' }}
                        value="Paraguai">
                        Paraguai
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Peru' ? 'selected' : '' }}
                        value="Peru">
                        Peru
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Philippines' ? 'selected' : '' }}
                        value="Philippines">
                        Philippines
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Polônia' ? 'selected' : '' }}
                        value="Polônia">
                        Polônia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Portugal' ? 'selected' : '' }}
                        value="Portugal">
                        Portugal
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Catar' ? 'selected' : '' }}
                        value="Catar">
                        Catar
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Romênia' ? 'selected' : '' }}
                        value="Romênia">
                        Romênia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Rússia' ? 'selected' : '' }}
                        value="Rússia">
                        Rússia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Ruanda' ? 'selected' : '' }}
                        value="Ruanda">
                        Ruanda
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Samoa' ? 'selected' : '' }}
                        value="Samoa">
                        Samoa
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Santa Lúcia' ? 'selected' : '' }}
                        value="Santa Lúcia">
                        Santa Lúcia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'São Cristóvão e Nevis' ? 'selected' : '' }}
                        value="São Cristóvão e Nevis">
                        São Cristóvão e Nevis
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'São Marino' ? 'selected' : '' }}
                        value="São Marino">
                        São Marino
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'São Tomé e Príncipe' ? 'selected' : '' }}
                        value="São Tomé e Príncipe">
                        São Tomé e Príncipe
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'São Vicente e Granadinas' ? 'selected' : '' }}
                        value="São Vicente e Granadinas">
                        São Vicente e Granadinas
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Escócia' ? 'selected' : '' }}
                        value="Escócia">
                        Escócia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Senegal' ? 'selected' : '' }}
                        value="Senegal">
                        Senegal
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Sérvia' ? 'selected' : '' }}
                        value="Sérvia">
                        Sérvia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Seicheles' ? 'selected' : '' }}
                        value="Seicheles">
                        Seicheles
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Serra Leoa' ? 'selected' : '' }}
                        value="Serra Leoa">
                        Serra Leoa
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Singapura' ? 'selected' : '' }}
                        value="Singapura">
                        Singapura
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Singapura' ? 'selected' : '' }}
                        value="Singapura">
                        Singapura
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Ilhas Salomão' ? 'selected' : '' }}
                        value="Ilhas Salomão">
                        Ilhas Salomão
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Somália' ? 'selected' : '' }}
                        value="Somália">
                        Somália
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == '>África do Sul' ? 'selected' : '' }}
                        value=">África do Sul">
                        África do Sul
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Coréia do Sul' ? 'selected' : '' }}
                        value="Coréia do Sul">
                        Coréia do Sul
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Sudão do Sul' ? 'selected' : '' }}
                        value="Sudão do Sul">
                        Sudão do Sul
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Espanha' ? 'selected' : '' }}
                        value="Espanha">
                        Espanha
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Sri Lanka' ? 'selected' : '' }}
                        value="Sri Lanka">
                        Sri Lanka
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Sudão' ? 'selected' : '' }}
                        value="Sudão">
                        Sudão
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Suriname' ? 'selected' : '' }}
                        value="Suriname">
                        Suriname
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Suazilândia' ? 'selected' : '' }}
                        value="Suazilândia">
                        Suazilândia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Suécia' ? 'selected' : '' }}
                        value="Suécia">
                        Suécia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Suíça' ? 'selected' : '' }}
                        value="Suíça">
                        Suíça
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Síria' ? 'selected' : '' }}
                        value="Síria">
                        Síria
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Tadiquistão' ? 'selected' : '' }}
                        value="Tadiquistão">
                        Tadiquistão
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Tanzânia' ? 'selected' : '' }}
                        value="Tanzânia">
                        Tanzânia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Tailândia' ? 'selected' : '' }}
                        value="Tailândia">
                        Tailândia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Togo' ? 'selected' : '' }}
                        value="Togo">
                        Togo
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Tonga' ? 'selected' : '' }}
                        value="Tonga">
                        Tonga
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Trindade e Tobago' ? 'selected' : '' }}
                        value="Trindade e Tobago">
                        Trindade e Tobago
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Tunísia' ? 'selected' : '' }}
                        value="Tunísia">
                        Tunísia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Turcomenistão' ? 'selected' : '' }}
                        value="Turcomenistão">
                        Turcomenistão
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Turquia' ? 'selected' : '' }}
                        value="Turquia">
                        Turquia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Tuvalu' ? 'selected' : '' }}
                        value="Tuvalu">
                        Tuvalu
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Ucrânia' ? 'selected' : '' }}
                        value="Ucrânia">
                        Ucrânia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Uganda' ? 'selected' : '' }}
                        value="Uganda">
                        Uganda
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Uruguai' ? 'selected' : '' }}
                        value="Uruguai">
                        Uruguai
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Emirados Árabes Unidos' ? 'selected' : '' }}
                        value="Emirados Árabes Unidos">
                        Emirados Árabes Unidos
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Reino Unido' ? 'selected' : '' }}
                        value="Reino Unido">
                        Reino Unido
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Estados Unidos' ? 'selected' : '' }}
                        value="Estados Unidos">
                        Estados Unidos
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Usbequistão' ? 'selected' : '' }}
                        value="Usbequistão">
                        Usbequistão
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Vanuatu' ? 'selected' : '' }}
                        value="Vanuatu">
                        Vanuatu
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Venezuela' ? 'selected' : '' }}
                        value="Venezuela">
                        Venezuela
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Vietnã' ? 'selected' : '' }}
                        value="Vietnã">
                        Vietnã
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'País de Gales' ? 'selected' : '' }}
                        value="País de Gales">
                        País de Gales
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Iêmen' ? 'selected' : '' }}
                        value="Iêmen">
                        Iêmen
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Zâmbia' ? 'selected' : '' }}
                        value="Zâmbia">
                        Zâmbia
                    </option>
                    <option {{ isset($editora->pais) && $editora->pais == 'Zimbábue' ? 'selected' : '' }}
                        value="Zimbábue">
                        Zimbábue
                    </option>

                </select>

                @error('pais')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <div class="mb-3">
                <label class="form-label" for="codigo">
                    Código</label>
                <input type="text" class="form-control @error('codigo') is-invalid @enderror" id="codigo" name="codigo"
                    placeholder=""  value="{{ isset($editora->codigo) ? $editora->codigo : old('codigo') }}"
                    autofocus />
                @error('codigo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>


</div>
