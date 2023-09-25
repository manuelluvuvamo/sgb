<div class="row">


    <div class="col-md-6">
        <div class="form-group">
            <div class="mb-3">
                <label class="form-label" for="nome">Nome</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome"
                    placeholder="" required value="{{ isset($autor->nome) ? $autor->nome : old('nome') }}" autofocus />
                @error('nome')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <div class="mb-3">
                <label class="form-label" for="nacionalidade">Nacionalidade</label>
       
                <select class="js-example-basic-single form-select @error('nacionalidade') is-invalid @enderror" name="nacionalidade"
                    id="nacionalidade" required autocomplete="nacionalidade" >

                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'afegão' ? 'selected' : '' }}
                        value="afegão"> Afeganistão – afegão </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'andorrano' ? 'selected' : '' }}
                        value="andorrano"> Andorra – andorrano </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'angolano' ? 'selected' : '' }}
                        value="angolano"> Angola – angolano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'antiguano' ? 'selected' : '' }}
                        value="antiguano"> Antígua – antiguano </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'argelino' ? 'selected' : '' }}
                        value="argelino"> Argélia – argelino </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'argentino' ? 'selected' : '' }}
                        value="argentino"> Argentina – argentino </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'armênio' ? 'selected' : '' }}
                        value="armênio"> Armênia – armênio </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'australiano' ? 'selected' : '' }}
                        value="australiano"> Austrália – australiano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'austríaco' ? 'selected' : '' }}
                        value="austríaco"> Áustria – austríaco </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'azeri' ? 'selected' : '' }}
                        value="azeri"> Azerbaijão – azeri </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'bahamense' ? 'selected' : '' }}
                        value="bahamense"> Bahamas – bahamense </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'bangladês' ? 'selected' : '' }}
                        value="bangladês"> Bangladesh – bangladês </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'barbadiano' ? 'selected' : '' }}
                        value="barbadiano"> Barbados – barbadiano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'baremita' ? 'selected' : '' }}
                        value="baremita"> Barém – baremita </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'bielorrusso' ? 'selected' : '' }}
                        value="bielorrusso"> Bielorrússia – bielorrusso </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'belga' ? 'selected' : '' }}
                        value="belga"> Bélgica – belga </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'belizenho' ? 'selected' : '' }}
                        value="belizenho"> Belize – belizenho </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'beninense' ? 'selected' : '' }}
                        value="beninense"> Benim – beninense </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'boliviano' ? 'selected' : '' }}
                        value="boliviano"> Bolívia – boliviano </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'bósnio' ? 'selected' : '' }}
                        value="bósnio"> Bósnia – bósnio </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'bechuano' ? 'selected' : '' }}
                        value="bechuano"> Botsuana – bechuano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'brasileiro' ? 'selected' : '' }}
                        value="brasileiro"> Brasil – brasileiro </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'bruneano' ? 'selected' : '' }}
                        value="bruneano"> Brunei – bruneano </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'búlgaro' ? 'selected' : '' }}
                        value="búlgaro"> Bulgária – búlgaro </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'burquinense' ? 'selected' : '' }}
                        value="burquinense"> BurkinaFaso – burquinense </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'burundês' ? 'selected' : '' }}
                        value="burundês"> Burundi – burundês </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'butanense' ? 'selected' : '' }}
                        value="butanense"> Butão – butanense </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'cabo-verdiano' ? 'selected' : '' }}
                        value="cabo-verdiano"> Cabo Verde – cabo-verdiano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'camaronense' ? 'selected' : '' }}
                        value="camaronense"> Camarões – camaronense </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'cambojano' ? 'selected' : '' }}
                        value="cambojano"> Camboja – cambojano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'canadense' ? 'selected' : '' }}
                        value="canadense"> Canadá – canadense </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'centroafricano' ? 'selected' : '' }}
                        value="centroafricano">República Centro Africana – centroafricano </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'chadiano' ? 'selected' : '' }}
                        value="chadiano">Chade – chadiano </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'chinês' ? 'selected' : '' }}
                        value="chinês">China – chinês </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'chileno' ? 'selected' : '' }}
                        value="chileno">Chile – chileno </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'cookiano' ? 'selected' : '' }}
                        value="cookiano">Ilhas Cook – cookiano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'colombiano' ? 'selected' : '' }}
                        value="colombiano">Colômbia – colombiano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'comoriano' ? 'selected' : '' }}
                        value="comoriano">Comores – comoriano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'costa-riquenho' ? 'selected' : '' }}
                        value="costa-riquenho">Costa Rica – costa-riquenho</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'croata' ? 'selected' : '' }}
                        value="croata">Croácia – croata </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'Cubano' ? 'selected' : '' }}
                        value="Cubano">Cuba – Cubano </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'cipriota' ? 'selected' : '' }}
                        value="cipriota">Chipre – cipriota </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'tcheco' ? 'selected' : '' }}
                        value="tcheco">República Tcheca – tcheco </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'congolense' ? 'selected' : '' }}
                        value="congolense">República Democrática do Congo – congolense </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'dinamarquês' ? 'selected' : '' }}
                        value="dinamarquês">Dinamarca – dinamarquês </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'djibutiense' ? 'selected' : '' }}
                        value="djibutiense">Djibuti – djibutiense </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'dominiquense' ? 'selected' : '' }}
                        value="dominiquense">Dominica – dominiquense </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'dominicano' ? 'selected' : '' }}
                        value="dominicano">República Dominicana – dominicano</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'timorense' ? 'selected' : '' }}
                        value="timorense">Timor Leste – timorense</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'equatoriano' ? 'selected' : '' }}
                        value="equatoriano">Equador – equatoriano</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'egípcio' ? 'selected' : '' }}
                        value="egípcio">Egito – egípcio</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'salvadorenho' ? 'selected' : '' }}
                        value="salvadorenho">El Salvador – salvadorenho</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'inglês' ? 'selected' : '' }}
                        value="inglês">Inglaterra – inglês</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'guinéu-equatoriano' ? 'selected' : '' }}
                        value="guinéu-equatoriano">Guiné Equatorial – guinéu-equatoriano</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'eritreu' ? 'selected' : '' }}
                        value="eritreu">Eritreia – eritreu </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'estoniano' ? 'selected' : '' }}
                        value="estoniano">Estônia – estoniano </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'fijiano' ? 'selected' : '' }}
                        value="fijiano">Fiji – fijiano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'finlandês' ? 'selected' : '' }}
                        value="finlandês">Finlândia – finlandês </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'francês' ? 'selected' : '' }}
                        value="francês">Finlândia – francês </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'gabonense' ? 'selected' : '' }}
                        value="gabonense">Gabão – gabonense </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'gambiano' ? 'selected' : '' }}
                        value="gambiano">Gâmbia – gambiano </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'geórgico' ? 'selected' : '' }}
                        value="geórgico">Geórgia – geórgico </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'alemão' ? 'selected' : '' }}
                        value="alemão">Alemanha – alemão </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'granadino' ? 'selected' : '' }}
                        value="granadino">Granada – granadino </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'grego' ? 'selected' : '' }}
                        value="grego">Grécia – grego </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'guatemalteco' ? 'selected' : '' }}
                        value="guatemalteco">Guatemala – guatemalteco </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'guineano' ? 'selected' : '' }}
                        value="guineano">Guiné – guineano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'guineense' ? 'selected' : '' }}
                        value="guineense">GuinéBissau - guineense</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'guianense' ? 'selected' : '' }}
                        value="guianense">Guiana – guianense </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'haitiano' ? 'selected' : '' }}
                        value="haitiano">Haiti – haitiano </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'holandês' ? 'selected' : '' }}
                        value="holandês">Haiti – holandês </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'hondurenho' ? 'selected' : '' }}
                        value="hondurenho">Honduras – hondurenho </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'húngaro' ? 'selected' : '' }}
                        value="húngaro">Hungria – húngaro </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'islandês' ? 'selected' : '' }}
                        value="islandês">Islândia – islandês </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'indiano' ? 'selected' : '' }}
                        value="indiano">Índia – indiano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'indonésio' ? 'selected' : '' }}
                        value="indonésio">Indonésia – indonésio </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'iraniano' ? 'selected' : '' }}
                        value="iraniano">Irã – iraniano </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'irlandês' ? 'selected' : '' }}
                        value="irlandês">Irlanda – irlandês </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'israelita' ? 'selected' : '' }}
                        value="israelita">Irlanda – israelita </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'italiano' ? 'selected' : '' }}
                        value="italiano">Itália – italiano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'costa-marfinense' ? 'selected' : '' }}
                        value="costa-marfinense">Costa do Marfim – costa-marfinense</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'jamaicano' ? 'selected' : '' }}
                        value="jamaicano">Jamaica – jamaicano </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'japonês' ? 'selected' : '' }}
                        value="japonês">Japão – japonês </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'jordão' ? 'selected' : '' }}
                        value="jordão">Jordânia – jordão </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'cazaque' ? 'selected' : '' }}
                        value="cazaque">Cazaquistão – cazaque </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'queniano' ? 'selected' : '' }}
                        value="queniano">Quênia – queniano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'quiribatiano' ? 'selected' : '' }}
                        value="quiribatiano">Quiribati – quiribatiano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'quirguistanês' ? 'selected' : '' }}
                        value="quirguistanês">Quirguistão – quirguistanês </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'kuwaitiano' ? 'selected' : '' }}
                        value="kuwaitiano">Kuwait – kuwaitiano </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'laosiano' ? 'selected' : '' }}
                        value="laosiano">Laos – laosiano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'letoniano' ? 'selected' : '' }}
                        value="letoniano">Letônia – letoniano </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'libanês' ? 'selected' : '' }}
                        value="libanês">Líbano – libanês </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'lesotiano' ? 'selected' : '' }}
                        value="lesotiano">Lesoto – lesotiano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'liberiano' ? 'selected' : '' }}
                        value="liberiano">Libéria – liberiano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'liechtensteinense' ? 'selected' : '' }}
                        value="liechtensteinense">Liechtenstein – liechtensteinense </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'lituano' ? 'selected' : '' }}
                        value="lituano">Lituânia – lituano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'luxemburguês' ? 'selected' : '' }}
                        value="luxemburguês">Luxemburgo – luxemburguês </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'líbio' ? 'selected' : '' }}
                        value="líbio">Líbia – líbio </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'macedônio' ? 'selected' : '' }}
                        value="macedônio">Macedônia – macedônio </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'madagascarense' ? 'selected' : '' }}
                        value="madagascarense">Madagascar – madagascarense </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'malaio' ? 'selected' : '' }}
                        value="malaio">Madagascar – malaio </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'malauiano' ? 'selected' : '' }}
                        value="malauiano">Malaui – malauiano </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'maldivo' ? 'selected' : '' }}
                        value="maldivo">Maldivas – maldivo </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'maliano' ? 'selected' : '' }}
                        value="maliano">Máli – maliano </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'maltês' ? 'selected' : '' }}
                        value="maltês">Malta – maltês </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'mauriciano' ? 'selected' : '' }}
                        value="mauriciano">Maurício – mauriciano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'mauritano' ? 'selected' : '' }}
                        value="mauritano">Mauritânia – mauritano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'marshallino' ? 'selected' : '' }}
                        value="marshallino">Ilhas Marshall – marshallino</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'micronésio' ? 'selected' : '' }}
                        value="micronésio">Estados Federados da Micronésia – micronésio</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'mexicano' ? 'selected' : '' }}
                        value="mexicano">México – mexicano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'marroquino' ? 'selected' : '' }}
                        value="marroquino">Marrocos – marroquino </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'moldávio' ? 'selected' : '' }}
                        value="moldávio">Moldavia – moldávio </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'monegasco' ? 'selected' : '' }}
                        value="monegasco">Mônaco – monegasco </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'mongol' ? 'selected' : '' }}
                        value="mongol">Mongólia – mongol </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'montenegrino' ? 'selected' : '' }}
                        value="montenegrino">Montenegro – montenegrino </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'moçambicano' ? 'selected' : '' }}
                        value="moçambicano">Moçambique – moçambicano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'birmanês' ? 'selected' : '' }}
                        value="birmanês">Myanmar – birmanês </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'namibiano' ? 'selected' : '' }}
                        value="namibiano">Namíbia – namibiano </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'nauruano' ? 'selected' : '' }}
                        value="nauruano">Nauru – nauruano </option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'nepalês' ? 'selected' : '' }}
                        value="nepalês">Nepal – nepalês </option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'neozelandês' ? 'selected' : '' }}
                        value="neozelandês">Nova Zelândia – neozelandês</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'nicaraguense' ? 'selected' : '' }}
                        value="nicaraguense">Nicarágua – nicaraguense</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'nigerino' ? 'selected' : '' }}
                        value="nigerino">Níger – nigerino</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'nigeriano' ? 'selected' : '' }}
                        value="nigeriano">Nigéria – nigeriano</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'niuano' ? 'selected' : '' }}
                        value="niuano">Niue – niuano</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'norte-coreano' ? 'selected' : '' }}
                        value="norte-coreano">Coréia do Norte – norte-coreano</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'norueguês' ? 'selected' : '' }}
                        value="norueguês">Noruega – norueguês</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'omanense' ? 'selected' : '' }}
                        value="omanense">Omã – omanense</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'palestino' ? 'selected' : '' }}
                        value="palestino">Palestina – palestino</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'paquistanês' ? 'selected' : '' }}
                        value="paquistanês">Paquistão – paquistanês</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'palauense' ? 'selected' : '' }}
                        value="palauense">Palau – palauense</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'panamenho' ? 'selected' : '' }}
                        value="panamenho">Panamá – panamenho</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'papuásio' ? 'selected' : '' }}
                        value="papuásio">Papua Nova Guiné – papuásio</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'paraguaio' ? 'selected' : '' }}
                        value="paraguaio">Paraguai – paraguaio</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'peruano' ? 'selected' : '' }}
                        value="peruano">Peru – peruano</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'filipino' ? 'selected' : '' }}
                        value="filipino">Philippines – filipino</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'polonês' ? 'selected' : '' }}
                        value="polonês">Polônia – polonês</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'português' ? 'selected' : '' }}
                        value="português">Portugal – português</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'catarense' ? 'selected' : '' }}
                        value="catarense">Catar – catarense</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'romeno' ? 'selected' : '' }}
                        value="romeno">Romênia – romeno</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'russo' ? 'selected' : '' }}
                        value="russo">Rússia – russo</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'ruandês' ? 'selected' : '' }}
                        value="ruandês">Ruanda – ruandês</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'samoano' ? 'selected' : '' }}
                        value="samoano">Samoa – samoano</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'santa' ? 'selected' : '' }}
                        value="santa">Santa Lúcia – santa</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'são-cristovense' ? 'selected' : '' }}
                        value="são-cristovense">São Cristóvão e Nevis – são-cristovense</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'são-marinense' ? 'selected' : '' }}
                        value="são-marinense">São Marino – são-marinense</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'são-tomense' ? 'selected' : '' }}
                        value="são-tomense">São Tomé e Príncipe – são-tomense</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'são-vicentino' ? 'selected' : '' }}
                        value="são-vicentino">São Vicente e Granadinas – são-vicentino</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'escocês' ? 'selected' : '' }}
                        value="escocês">Escócia – escocês</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'senegalense' ? 'selected' : '' }}
                        value="senegalense">Escócia – senegalense</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'sérvio' ? 'selected' : '' }}
                        value="sérvio">Sérvia – sérvio</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'seichelense' ? 'selected' : '' }}
                        value="seichelense">Seicheles – seichelense</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'serra-leonês' ? 'selected' : '' }}
                        value="serra-leonês">Serra Leoa – serra-leonês</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'singapurense' ? 'selected' : '' }}
                        value="singapurense">Singapura – singapurense</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'eslovaco' ? 'selected' : '' }}
                        value="eslovaco">Singapura – eslovaco</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'salomônico' ? 'selected' : '' }}
                        value="salomônico">Ilhas Salomão – salomônico</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'somali' ? 'selected' : '' }}
                        value="somali">Somália – somali</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'sul–africano' ? 'selected' : '' }}
                        value="sul–africano">África do Sul – sul–africano</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'coreano' ? 'selected' : '' }}
                        value="coreano">Coréia do Sul – coreano</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'sul-sudanense' ? 'selected' : '' }}
                        value="sul-sudanense">Sudão do Sul – sul-sudanense</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'espanhol' ? 'selected' : '' }}
                        value="espanhol">Espanha – espanhol</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'srilankês' ? 'selected' : '' }}
                        value="srilankês">Sri Lanka – srilankês</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'sudanense' ? 'selected' : '' }}
                        value="sudanense">Sudão – sudanense</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'surinamês' ? 'selected' : '' }}
                        value="surinamês">Suriname – surinamês</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'suazi' ? 'selected' : '' }}
                        value="suazi">Suazilândia – suazi</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'sueco' ? 'selected' : '' }}
                        value="sueco">Suécia – sueco</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'suíço' ? 'selected' : '' }}
                        value="suíço">Suíça – suíço</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'sírio' ? 'selected' : '' }}
                        value="sírio">Síria – sírio</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'tajique' ? 'selected' : '' }}
                        value="tajique">Síria – tajique</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'tanzaniano' ? 'selected' : '' }}
                        value="tanzaniano">Tanzânia – tanzaniano</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'tailandês' ? 'selected' : '' }}
                        value="tailandês">Tailândia – tailandês</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'togolês' ? 'selected' : '' }}
                        value="togolês">Togo – togolês</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'tonganês' ? 'selected' : '' }}
                        value="tonganês">Tonga – tonganês</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'trinitário' ? 'selected' : '' }}
                        value="trinitário">Trindade e Tobago – trinitário</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'tunisiano' ? 'selected' : '' }}
                        value="tunisiano">Tunísia – tunisiano</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'turcomeno' ? 'selected' : '' }}
                        value="turcomeno">Turcomenistão – turcomeno</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'turco' ? 'selected' : '' }}
                        value="turco">Turquia – turco</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'tuvaluano' ? 'selected' : '' }}
                        value="tuvaluano">Tuvalu – tuvaluano</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'ucraniano' ? 'selected' : '' }}
                        value="ucraniano">Ucrânia – ucraniano</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'ugandês' ? 'selected' : '' }}
                        value="ugandês">Uganda – ugandês</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'uruguaio' ? 'selected' : '' }}
                        value="uruguaio">Uruguai – uruguaio</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'árabe' ? 'selected' : '' }}
                        value="árabe">Uruguai – árabe</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'britânico' ? 'selected' : '' }}
                        value="britânico">Reino Unido – britânico</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'americano' ? 'selected' : '' }}
                        value="americano">Estados Unidos – americano</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'uzbeque' ? 'selected' : '' }}
                        value="uzbeque">Usbequistão – uzbeque</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'vanuatuano' ? 'selected' : '' }}
                        value="vanuatuano">Vanuatu – vanuatuano</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'venezuelano' ? 'selected' : '' }}
                        value="venezuelano">Vanuatu – venezuelano</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'vietnamita' ? 'selected' : '' }}
                        value="vietnamita">Vietnã – vietnamita</option>
                    <option {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'galês' ? 'selected' : '' }}
                        value="galês">País de Gales – galês</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'iemenita' ? 'selected' : '' }}
                        value="iemenita">Iêmen – iemenita</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'zambiano' ? 'selected' : '' }}
                        value="zambiano">Zâmbia – zambiano</option>
                    <option
                        {{ isset($autor->nacionalidade) && $autor->nacionalidade == 'zimbabueano' ? 'selected' : '' }}
                        value="zimbabueano">Zimbábue – zimbabueano</option>

                </select>

                @error('nacionalidade')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>



</div>
