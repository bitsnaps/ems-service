<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>EMS Query</title>
  </head>
  <body>

<div class="container">

  <div class="row">
    <h1>EMS Query Service</h1>
    <p>If you open this file from a local server (e.g.: apache...) you may need to install CORS extension into your browser</p>
  </div>

        <div class="row">
          <div class="col-md-6">


          <form class="form-vertical" action="#" method="post">

            <!-- Type d'expédition -->
            <div class="form-group">
              <label for="type_exp">Type d'expédition</label>
              <select class="form-control" name="type_exp" id="type_exp" disabled>
                <option value="0" selected>National</option>
                <option value="1">International</option>
              </select>
            </div>

            <!-- Pays (TODO: not yet implemented) -->
            <div class="form-group" style="display: none">
              <label for="pays" class="label-control">Pays:</label>
              <select class="form-control" name="pays" id="pays">
                <option value="">Choisissez un Pays</option>
                <option value="AF">AFGHANISTAN</option>
                <option value="ZA">AFRIQUE DU SUD</option>
                <option value="AL">ALBANIE</option>
                <option value="DE">ALLEMAGNE</option>
                <option value="AO">ANGOLA</option>
                <option value="SA">ARABIE SAOUDITE</option>
                <option value="AR">ARGENTINE</option>
                <option value="AM">ARMENIE</option>
                <option value="AU">AUSTRALIE</option>
                <option value="AT">AUTRICHE</option>
                <option value="AZ">AZERBAÏDJAN</option>
                <option value="BS">BAHAMAS</option>
                <option value="BH">BAHRAIN</option>
                <option value="BD">BANGLADESH</option>
                <option value="BB">BARBADOS</option>
                <option value="BE">BELGIQUE</option>
                <option value="BJ">BENIN</option>
                <option value="BY">BIELORUSSIE</option>
                <option value="BO">BOLIVIA</option>
                <option value="QN">BOSNIE</option>
                <option value="BW">BOTSWANA</option>
                <option value="BR">BRESIL</option>
                <option value="BG">BULGARIE</option>
                <option value="BF">BURKINA FASO</option>
                <option value="BI">BURUNDI</option>
                <option value="KH">CAMBODGE</option>
                <option value="CM">CAMEROUN</option>
                <option value="CA">CANADA</option>
                <option value="ES">CANARIES</option>
                <option value="CV">CAP VERT</option>
                <option value="IS">CAYMAN ISLANDS</option>
                <option value="CF">CENTRE AFRIQUE</option>
                <option value="CL">CHILI</option>
                <option value="CN">CHINE</option>
                <option value="CY">CHYPRE</option>
                <option value="CO">COLOMBIE</option>
                <option value="KM">COMORES</option>
                <option value="CG">CONGO DEMOCRATIQUE</option>
                <option value="CD">CONGO REPUBLIQUE</option>
                <option value="KR">COREE DU SUD</option>
                <option value="CR">COSTA RICA</option>
                <option value="CI">COTE D’IVOIRE</option>
                <option value="HR">CROATIE</option>
                <option value="CU">CUBA</option>
                <option value="CZ">CZECH REPUBLIC</option>
                <option value="DK">DANEMARK</option>
                <option value="DJ">DJIBOUTI</option>
                <option value="DM">DOMINICAINE</option>
                <option value="EG">EGYPTE</option>
                <option value="AE">EMIRATS ARABES</option>
                <option value="EC">EQUATEUR</option>
                <option value="ER">ERYTHREE </option>
                <option value="ES">ESPAGNE</option>
                <option value="EE">ESTONIE</option>
                <option value="US">ETATS UNIS D'AMERIQUE</option>
                <option value="ET">ETHIOPIE</option>
                <option value="FJ">FIJI</option>
                <option value="FI">FINLANDE</option>
                <option value="FR">FRANCE</option>
                <option value="GA">GABON</option>
                <option value="GM">GAMBIE</option>
                <option value="GE">GEORGIE</option>
                <option value="GH">GHANA</option>
                <option value="GI">GIBRALTAR</option>
                <option value="GR">GRECE</option>
                <option value="GD">GRENADE</option>
                <option value="GP">GUADELOUPE</option>
                <option value="GT">GUATEMALA</option>
                <option value="GW">GUINEE BISSAU</option>
                <option value="GN">GUINEE EQUATORIALE</option>
                <option value="GF">GUYANE FRANÇAISE</option>
                <option value="HT">HAITI</option>
                <option value="HN">HONDURAS</option>
                <option value="HK">HONG KONG</option>
                <option value="HU">HONGRIE</option>
                <option value="IN">INDE</option>
                <option value="ID">INDONESIE</option>
                <option value="IR">IRAN </option>
                <option value="IQ">IRAQ</option>
                <option value="IE">IRLANDE </option>
                <option value="IS">ISLANDE</option>
                <option value="IT">ITALIE </option>
                <option value="JM">JAMAIQUE</option>
                <option value="JP">JAPON </option>
                <option value="JE">Jersey </option>
                <option value="JO">JORDANIE</option>
                <option value="KZ">KAZAKHSTAN</option>
                <option value="KE">KENYA</option>
                <option value="KW">KOWEIT</option>
                <option value="KG">KYRGYZSTAN</option>
                <option value="LS">LESOTHO</option>
                <option value="LV">LETTONIE</option>
                <option value="LB">LIBAN</option>
                <option value="LR">LIBERIA</option>
                <option value="LT">LITUANIE</option>
                <option value="LU">LUXEMBOURG</option>
                <option value="LY">LYBIE</option>
                <option value="MO">MACAO</option>
                <option value="MK">MACEDOINE</option>
                <option value="MG">MADAGASCAR</option>
                <option value="MW">MALAWI</option>
                <option value="MY">MALAYSIA</option>
                <option value="MV">MALDIVE</option>
                <option value="ML">MALI</option>
                <option value="MT">MALTE</option>
                <option value="MA">MAROC</option>
                <option value="MQ">MARTINIQUE</option>
                <option value="MU">MAURICE (ILE)</option>
                <option value="MR">MAURITANIE</option>
                <option value="MX">MEXIQUE</option>
                <option value="MD">MOLDAVIE</option>
                <option value="MC">MONACO</option>
                <option value="MN">MONGOLIE</option>
                <option value="ME">MONTENEGRO</option>
                <option value="MZ">MOZAMBIQUE</option>
                <option value="NA">NAMIBIE</option>
                <option value="NP">NEPAL</option>
                <option value="NI">NICARAGUA</option>
                <option value="NE">NIGER</option>
                <option value="NG">NIGERIA</option>
                <option value="NO">NORVERGE</option>
                <option value="NC">NOUVELLE CALEDONIE</option>
                <option value="NZ">NOUVELLE ZELANDE</option>
                <option value="OM">OMAN</option>
                <option value="UG">OUGANDA</option>
                <option value="UZ">OUZBEKISTAN</option>
                <option value="PK">PAKISTAN</option>
                <option value="PS">PALESTINE </option>
                <option value="PA">PANAMA</option>
                <option value="PY">PARAGUAY</option>
                <option value="NL">PAYS BAS</option>
                <option value="PE">PEROU</option>
                <option value="PH">PHILIPPINE</option>
                <option value="PL">POLOGNE</option>
                <option value="PR">PORTO RICO</option>
                <option value="PT">PORTUGAL</option>
                <option value="QA">QATAR</option>
                <option value="RO">ROUMANIE</option>
                <option value="GB">ROYAUME UNI</option>
                <option value="RU">RUSSIE</option>
                <option value="RW">RWANDA</option>
                <option value="SJ">SALVADOR</option>
                <option value="SN">SENEGAL</option>
                <option value="RS">SERBIE</option>
                <option value="CS">SERBIE-ET-MONTÉNÉGRO</option>
                <option value="SC">SEYCHELLES</option>
                <option value="SL">SIERRA LEONE</option>
                <option value="SG">SINGAPOUR</option>
                <option value="SK">SLOVAQUIE</option>
                <option value="SI">SLOVENIE</option>
                <option value="SO">SOMALIE</option>
                <option value="SD">SOUDAN</option>
                <option value="SS">SOUTH SUDAN </option>
                <option value="LK">SRI LANKA</option>
                <option value="SE">SUEDE</option>
                <option value="CH">SUISSE</option>
                <option value="SR">SURINAME</option>
                <option value="SZ">SWAZILAND</option>
                <option value="SY">SYRIE</option>
                <option value="TW">TAIWAN</option>
                <option value="TJ">TAJIKISTAN</option>
                <option value="TZ">TANZANIE</option>
                <option value="TD">TCHAD</option>
                <option value="TH">THAÏLANDE</option>
                <option value="TG">TOGO</option>
                <option value="TN">TUNISIE</option>
                <option value="TM">TURKMENISTAN</option>
                <option value="TR">TURQUIE</option>
                <option value="UA">UKRAINE</option>
                <option value="UY">URUGUAY</option>
                <option value="UZ">UZBEKISTAN</option>
                <option value="VE">VENEZUELA</option>
                <option value="VN">VIET-NAM</option>
                <option value="YE">YEMEN</option>
                <option value="ZM">ZAMBIE</option>
                <option value="ZW">ZIMBABWE</option>
              </select>
            </div>

            <!-- Poid -->
            <div class="form-group">
              <label for="poid" class="label-control">Poid:</label>
              <input type="number" placeholder="from 1 to 30 or 0.5" class="form-control" name="poid" id="poid">
            </div>

            <!-- Source -->
            <div class="form-group">
              <label for="w_src">Source:</label>
              <select class="form-control" name="w_src" id="w_src">
                <option value="">Choisissez Wilaya d'expédition</option>
                <option value="01">Adrar</option>
                <option value="44">Ain Defla</option>
                <option value="46">Ain Temouchent</option>
                <option value="16">Alger</option>
                <option value="23">Annaba</option>
                <option value="05">Batna</option>
                <option value="08">Bechar</option>
                <option value="06">Bejaia</option>
                <option value="07">Biskra</option>
                <option value="09">Blida</option>
                <option value="34">Bordj Bou Arreridj</option>
                <option value="10">Bouira</option>
                <option value="35">Boumerdes</option>
                <option value="02">Chlef</option>
                <option value="25">Constantine</option>
                <option value="17">Djelfa</option>
                <option value="32">El Bayadh</option>
                <option value="39">El Oued</option>
                <option value="36">El Taref</option>
                <option value="47">Ghardaia</option>
                <option value="24">Guelma</option>
                <option value="33">Illizi</option>
                <option value="18">Jijel</option>
                <option value="40">Khenchela</option>
                <option value="03">Laghouat</option>
                <option value="29">Mascara</option>
                <option value="26">Medea</option>
                <option value="43">Mila</option>
                <option value="27">Mostaganem</option>
                <option value="28">M’sila</option>
                <option value="45">Naama</option>
                <option value="31">Oran</option>
                <option value="30">Ouargla</option>
                <option value="04">Oum El Bouaghi</option>
                <option value="48">Relizane</option>
                <option value="20">Saida</option>
                <option value="19">Sétif</option>
                <option value="22">Sidi Bel Abbes</option>
                <option value="21">Skikda</option>
                <option value="41">Souk Ahras</option>
                <option value="11">Tamanrasset</option>
                <option value="12">Tebessa</option>
                <option value="14">Tiaret</option>
                <option value="37">Tindouf</option>
                <option value="42">Tipaza</option>
                <option value="38">Tissemsilet</option>
                <option value="15">Tizi Ouzou</option>
                <option value="13">Tlemcen</option>
              </select>
            </div>

            <!-- Destination -->
            <div class="form-group">
              <label for="w_dest" class="label-control">Destination:</label>

              <select class="form-control" name="w_dest" id="w_dest">
                <option value="">Choisissez Wilaya destination</option>
                <option value="01">Adrar</option>
                <option value="44">Ain Defla</option>
                <option value="46">Ain Temouchent</option>
                <option value="16">Alger</option>
                <option value="23">Annaba</option>
                <option value="05">Batna</option>
                <option value="08">Bechar</option>
                <option value="06">Bejaia</option>
                <option value="07">Biskra</option>
                <option value="09">Blida</option>
                <option value="34">Bordj Bou Arreridj</option>
                <option value="10">Bouira</option>
                <option value="35">Boumerdes</option>
                <option value="02">Chlef</option>
                <option value="25">Constantine</option>
                <option value="17">Djelfa</option>
                <option value="32">El Bayadh</option>
                <option value="39">El Oued</option>
                <option value="36">El Taref</option>
                <option value="47">Ghardaia</option>
                <option value="24">Guelma</option>
                <option value="33">Illizi</option>
                <option value="18">Jijel</option>
                <option value="40">Khenchela</option>
                <option value="03">Laghouat</option>
                <option value="29">Mascara</option>
                <option value="26">Medea</option>
                <option value="43">Mila</option>
                <option value="27">Mostaganem</option>
                <option value="28">M’sila</option>
                <option value="45">Naama</option>
                <option value="31">Oran</option>
                <option value="30">Ouargla</option>
                <option value="04">Oum El Bouaghi</option>
                <option value="48">Relizane</option>
                <option value="20">Saida</option>
                <option value="19">Sétif</option>
                <option value="22">Sidi Bel Abbes</option>
                <option value="21">Skikda</option>
                <option value="41">Souk Ahras</option>
                <option value="11">Tamanrasset</option>
                <option value="12">Tebessa</option>
                <option value="14">Tiaret</option>
                <option value="37">Tindouf</option>
                <option value="42">Tipaza</option>
                <option value="38">Tissemsilet</option>
                <option value="15">Tizi Ouzou</option>
                <option value="13">Tlemcen</option>
              </select>
            </div>


            <button type="button" name="calc_inter" id="calc_inter" class="btn btn-success">Query</button>
          </form>
          </div><!-- .col-md-12 -->
          <div class="col-md-12">
            <p>Total HT: <span id="montant_ht"></span> </p>

          </div>
        </div>

    </div>

<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
$(function(){
  //'track.ems.dz'
  $("button#calc_inter").click(function(){
    // var dest = $("select#pays option:selected").val();
    var dest = $("select#w_dest option:selected").text();
    var src = $("select#w_src option:selected").val();
    // var kg1 =$("select#poid option:selected").val();
    var kg1 =$("input#poid").val();
    if (dest.length== 0 || src.length == 0 || kg1.length == 0){
      alert('Please fill all fields');
    } else {

      $.post("http://ems.dz/track/conx/select_type.php",
      {action:'tarif_national', src:src, dest:dest, kg1: kg1, crossDomain : true}, function(data, status){
          console.log(data);
          $('span#montant_ht').text(parseFloat(data) + ' DA');
      });
    }

    // from Postman
    /*var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://track.ems.dz/conx/select_type.php",
      "method": "POST",
      "headers": {
        "content-type": "application/x-www-form-urlencoded",
        "cache-control": "no-cache"
      },
      "data": {
        "action": "tarif_national",
        "src": "16",
        "dest": "Oran",
        "kg1": "1"
      }
    }

    $.ajax(settings).done(function (response) {
      console.log(response);
    });*/


  });


});


</script>

  </body>
</html>
