@extends('user.layout.app')
@section('content')
  @include('user.partials.banner')
    <script src="{{asset('assets/js/studentRegistration.js')}}"></script>

    <div class="container" style="position: relative; margin-top: 56px">
        <div class="line"></div>
           <a href="#" class="" target="_blank" data-toggle="tooltip" title="Back to Company Website" style="position: absolute;top: 20px;color: #2e58a6;padding: 5px 15px;"><i class="fa fa-home"></i></a>

            {{-- <form class="form ajax-form" method="POST" action="https://samscrm.co.uk/s/yxE71J3P9abvb08jWYV2og6Ml" data-redirect="https://samscrm.co.uk/welcome-student"> --}}
            <form class="form ajax-form" method="POST" action="{{ route('student.registration') }}">
              @csrf
              <input type="hidden" name="" value="">
              <input type="hidden" name="office_id" value="1">

              <input type="hidden" name="batch_email_receiver" value="">


              <div class="row">
                <div class="col-lg-6">
                  <div class="card box-shadow p-3 mb-lg-0 mb-2" id="res_left">
                    <h5><span class="badge badge-primary px-3 py-2 rounded-pill">Primary Information</span></h5>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Given Name <span class="text-danger">*</span></label>
                          <input type="text" name="given_name" class="form-control" placeholder="Given Name" required="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Family Name <span class="text-danger">*</span></label>
                          <input type="text" name="family_name" class="form-control" placeholder="Family Name" required="">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Email <span class="text-danger">*</span></label>
                          <input type="text" name="email" id="email" class="form-control" placeholder="Email Address" required="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="nationality">Nationality <span class="text-danger">*</span></label>
                          <div class="selectbox">
                            <select id="nationality" name="nationality" class="form-control" required="">
                              <option disabled="" selected="" value="">
                                Select Nationality..
                              </option>
                                <option value="4">Afghanistan</option>
                                <option value="248">Åland Islands</option>
                                <option value="8">Albania</option>
                                <option value="12">Algeria</option>
                                <option value="16">American Samoa</option>
                                <option value="20">Andorra</option>
                                <option value="24">Angola</option>
                                <option value="660">Anguilla</option>
                                <option value="10">Antarctica</option>
                                <option value="28">Antigua and Barbuda</option>
                                <option value="32">Argentina</option>
                                <option value="51">Armenia</option>
                                <option value="533">Aruba</option>
                                <option value="36">Australia</option>
                                <option value="40">Austria</option>
                                <option value="31">Azerbaijan</option>
                                <option value="44">Bahamas</option>
                                <option value="48">Bahrain</option>
                                <option value="50">Bangladesh</option>
                                <option value="52">Barbados</option>
                                <option value="112">Belarus</option>
                                <option value="56">Belgium</option>
                                <option value="84">Belize</option>
                                <option value="204">Benin</option>
                                <option value="60">Bermuda</option>
                                <option value="64">Bhutan</option>
                                <option value="68">Bolivia</option>
                                <option value="535">Bonaire, Sint Eustatius and Saba</option>
                                <option value="70">Bosnia and Herzegovina</option>
                                <option value="72">Botswana</option>
                                <option value="74">Bouvet Island</option>
                                <option value="76">Brazil</option>
                                <option value="86">British Indian Ocean Territory</option>
                                <option value="96">Brunei Darussalam</option>
                                <option value="100">Bulgaria</option>
                                <option value="854">Burkina Faso</option>
                                <option value="108">Burundi</option>
                                <option value="116">Cambodia</option>
                                <option value="120">Cameroon</option>
                                <option value="124">Canada</option>
                                <option value="132">Cape Verde</option>
                                <option value="136">Cayman Islands</option>
                                <option value="140">Central African Republic</option>
                                <option value="148">Chad</option>
                                <option value="152">Chile</option>
                                <option value="156">China</option>
                                <option value="162">Christmas Island</option>
                                <option value="166">Cocos (Keeling) Islands</option>
                                <option value="170">Colombia</option>
                                <option value="174">Comoros</option>
                                <option value="178">Congo</option>
                                <option value="180">Congo (Democratic Republic)</option>
                                <option value="184">Cook Islands</option>
                                <option value="188">Costa Rica</option>
                                <option value="384">Côte d'Ivoire</option>
                                <option value="191">Croatia</option>
                                <option value="192">Cuba</option>
                                <option value="531">Curaçao</option>
                                <option value="196">Cyprus</option>
                                <option value="203">Czech Republic</option>
                                <option value="208">Denmark</option>
                                <option value="262">Djibouti</option>
                                <option value="212">Dominica</option>
                                <option value="214">Dominican Republic</option>
                                <option value="218">Ecuador</option>
                                <option value="818">Egypt</option>
                                <option value="222">El Salvador</option>
                                <option value="226">Equatorial Guinea</option>
                                <option value="232">Eritrea</option>
                                <option value="233">Estonia</option>
                                <option value="231">Ethiopia</option>
                                <option value="238">Falkland Islands (Malvinas)</option>
                                <option value="234">Faroe Islands</option>
                                <option value="242">Fiji</option>
                                <option value="246">Finland</option>
                                <option value="250">France</option>
                                <option value="254">French Guiana</option>
                                <option value="258">French Polynesia</option>
                                <option value="260">French Southern Territories</option>
                                <option value="266">Gabon</option>
                                <option value="270">Gambia</option>
                                <option value="268">Georgia</option>
                                <option value="276">Germany</option>
                                <option value="288">Ghana</option>
                                <option value="292">Gibraltar</option>
                                <option value="300">Greece</option>
                                <option value="304">Greenland</option>
                                <option value="308">Grenada</option>
                                <option value="312">Guadeloupe</option>
                                <option value="316">Guam</option>
                                <option value="320">Guatemala</option>
                                <option value="831">Guernsey</option>
                                <option value="324">Guinea</option>
                                <option value="624">Guinea-Bissau</option>
                                <option value="328">Guyana</option>
                                <option value="332">Haiti</option>
                                <option value="334">Heard Island and McDonald Islands</option>
                                <option value="336">Holy See (Vatican City State)</option>
                                <option value="340">Honduras</option>
                                <option value="344">Hong Kong</option>
                                <option value="348">Hungary</option>
                                <option value="352">Iceland</option>
                                <option value="356">India</option>
                                <option value="360">Indonesia</option>
                                <option value="364">Iran</option>
                                <option value="368">Iraq</option>
                                <option value="372">Ireland</option>
                                <option value="833">Isle of Man</option>
                                <option value="376">Israel</option>
                                <option value="380">Italy</option>
                                <option value="388">Jamaica</option>
                                <option value="392">Japan</option>
                                <option value="832">Jersey</option>
                                <option value="400">Jordan</option>
                                <option value="398">Kazakhstan</option>
                                <option value="404">Kenya</option>
                                <option value="296">Kiribati</option>
                                <option value="408">Korea (North)</option>
                                <option value="410">Korea (South)</option>
                                <option value="414">Kuwait</option>
                                <option value="417">Kyrgyzstan</option>
                                <option value="418">Lao </option>
                                <option value="428">Latvia</option>
                                <option value="422">Lebanon</option>
                                <option value="426">Lesotho</option>
                                <option value="430">Liberia</option>
                                <option value="434">Libya</option>
                                <option value="438">Liechtenstein</option>
                                <option value="440">Lithuania</option>
                                <option value="442">Luxembourg</option>
                                <option value="446">Macao</option>
                                <option value="807">Macedonia, the former Yugoslav Republic of</option>
                                <option value="450">Madagascar</option>
                                <option value="454">Malawi</option>
                                <option value="458">Malaysia</option>
                                <option value="462">Maldives</option>
                                <option value="466">Mali</option>
                                <option value="470">Malta</option>
                                <option value="584">Marshall Islands</option>
                                <option value="474">Martinique</option>
                                <option value="478">Mauritania</option>
                                <option value="480">Mauritius</option>
                                <option value="175">Mayotte</option>
                                <option value="484">Mexico</option>
                                <option value="583">Micronesia, Federated States of</option>
                                <option value="498">Moldova</option>
                                <option value="492">Monaco</option>
                                <option value="496">Mongolia</option>
                                <option value="499">Montenegro</option>
                                <option value="500">Montserrat</option>
                                <option value="504">Morocco</option>
                                <option value="508">Mozambique</option>
                                <option value="104">Myanmar</option>
                                <option value="516">Namibia</option>
                                <option value="520">Nauru</option>
                                <option value="524">Nepal</option>
                                <option value="528">Netherlands</option>
                                <option value="540">New Caledonia</option>
                                <option value="554">New Zealand</option>
                                <option value="558">Nicaragua</option>
                                <option value="562">Niger</option>
                                <option value="566">Nigeria</option>
                                <option value="570">Niue</option>
                                <option value="574">Norfolk Island</option>
                                <option value="580">Northern Mariana Islands</option>
                                <option value="578">Norway</option>
                                <option value="512">Oman</option>
                                <option value="586">Pakistan</option>
                                <option value="585">Palau</option>
                                <option value="275">Palestinian Territory, Occupied</option>
                                <option value="591">Panama</option>
                                <option value="598">Papua New Guinea</option>
                                <option value="600">Paraguay</option>
                                <option value="604">Peru</option>
                                <option value="608">Philippines</option>
                                <option value="612">Pitcairn</option>
                                <option value="616">Poland</option>
                                <option value="620">Portugal</option>
                                <option value="630">Puerto Rico</option>
                                <option value="634">Qatar</option>
                                <option value="638">Réunion</option>
                                <option value="642">Romania</option>
                                <option value="643">Russia</option>
                                <option value="646">Rwanda</option>
                                <option value="652">Saint Barthélemy</option>
                                <option value="654">Saint Helena, Ascension and Tristan da Cunha</option>
                                <option value="659">Saint Kitts and Nevis</option>
                                <option value="662">Saint Lucia</option>
                                <option value="663">Saint Martin (French part)</option>
                                <option value="666">Saint Pierre and Miquelon</option>
                                <option value="670">Saint Vincent and the Grenadines</option>
                                <option value="882">Samoa</option>
                                <option value="674">San Marino</option>
                                <option value="678">Sao Tome and Principe</option>
                                <option value="682">Saudi Arabia</option>
                                <option value="686">Senegal</option>
                                <option value="688">Serbia</option>
                                <option value="690">Seychelles</option>
                                <option value="694">Sierra Leone</option>
                                <option value="702">Singapore</option>
                                <option value="534">Sint Maarten (Dutch part)</option>
                                <option value="703">Slovakia</option>
                                <option value="705">Slovenia</option>
                                <option value="90">Solomon Islands</option>
                                <option value="706">Somalia</option>
                                <option value="710">South Africa</option>
                                <option value="239">South Georgia and the South Sandwich Islands</option>
                                <option value="728">South Sudan</option>
                                <option value="724">Spain</option>
                                <option value="144">Sri Lanka</option>
                                <option value="729">Sudan</option>
                                <option value="740">Suriname</option>
                                <option value="744">Svalbard and Jan Mayen</option>
                                <option value="748">Swaziland</option>
                                <option value="752">Sweden</option>
                                <option value="756">Switzerland</option>
                                <option value="760">Syria</option>
                                <option value="158">Taiwan, Province of China</option>
                                <option value="762">Tajikistan</option>
                                <option value="834">Tanzania</option>
                                <option value="764">Thailand</option>
                                <option value="626">Timor-Leste</option>
                                <option value="768">Togo</option>
                                <option value="772">Tokelau</option>
                                <option value="776">Tonga</option>
                                <option value="780">Trinidad and Tobago</option>
                                <option value="788">Tunisia</option>
                                <option value="792">Turkey</option>
                                <option value="795">Turkmenistan</option>
                                <option value="796">Turks and Caicos Islands</option>
                                <option value="798">Tuvalu</option>
                                <option value="800">Uganda</option>
                                <option value="804">Ukraine</option>
                                <option value="784">United Arab Emirates</option>
                                <option value="826">United Kingdom</option>
                                <option value="840">United States</option>
                                <option value="581">United States Minor Outlying Islands</option>
                                <option value="858">Uruguay</option>
                                <option value="860">Uzbekistan</option>
                                <option value="548">Vanuatu</option>
                                <option value="862">Venezuela</option>
                                <option value="704">Viet Nam</option>
                                <option value="92">Virgin Islands, British</option>
                                <option value="850">Virgin Islands, U.S.</option>
                                <option value="876">Wallis and Futuna</option>
                                <option value="732">Western Sahara</option>
                                <option value="887">Yemen</option>
                                <option value="894">Zambia</option>
                                <option value="716">Zimbabwe</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="mobile_code">
                            Country Code <span class="text-danger">*</span>
                          </label>
                          <div class="selectbox">
                            <select name="mobile_code" id="mobile_code" class="form-control" required="">
                              <option disabled="" selected="" value="">Select Country Code..</option>
                                                                <option value="4">Afghanistan +(93)</option>
                                                                <option value="248">Åland Islands +(358)</option>
                                                                <option value="8">Albania +(355)</option>
                                                                <option value="12">Algeria +(213)</option>
                                                                <option value="16">American Samoa +(1)</option>
                                                                <option value="20">Andorra +(376)</option>
                                                                <option value="24">Angola +(244)</option>
                                                                <option value="660">Anguilla +(1)</option>
                                                                <option value="10">Antarctica +(672)</option>
                                                                <option value="28">Antigua and Barbuda +(1)</option>
                                                                <option value="32">Argentina +(54)</option>
                                                                <option value="51">Armenia +(374)</option>
                                                                <option value="533">Aruba +(297)</option>
                                                                <option value="36">Australia +(61)</option>
                                                                <option value="40">Austria +(43)</option>
                                                                <option value="31">Azerbaijan +(994)</option>
                                                                <option value="44">Bahamas +(1)</option>
                                                                <option value="48">Bahrain +(973)</option>
                                                                <option value="50">Bangladesh +(880)</option>
                                                                <option value="52">Barbados +(1)</option>
                                                                <option value="112">Belarus +(375)</option>
                                                                <option value="56">Belgium +(32)</option>
                                                                <option value="84">Belize +(501)</option>
                                                                <option value="204">Benin +(229)</option>
                                                                <option value="60">Bermuda +(1)</option>
                                                                <option value="64">Bhutan +(975)</option>
                                                                <option value="68">Bolivia +(591)</option>
                                                                <option value="535">Bonaire, Sint Eustatius and Saba +(599)</option>
                                                                <option value="70">Bosnia and Herzegovina +(387)</option>
                                                                <option value="72">Botswana +(267)</option>
                                                                <option value="74">Bouvet Island +(47)</option>
                                                                <option value="76">Brazil +(55)</option>
                                                                <option value="86">British Indian Ocean Territory +(246)</option>
                                                                <option value="96">Brunei Darussalam +(673)</option>
                                                                <option value="100">Bulgaria +(359)</option>
                                                                <option value="854">Burkina Faso +(226)</option>
                                                                <option value="108">Burundi +(257)</option>
                                                                <option value="116">Cambodia +(855)</option>
                                                                <option value="120">Cameroon +(237)</option>
                                                                <option value="124">Canada +(1)</option>
                                                                <option value="132">Cape Verde +(238)</option>
                                                                <option value="136">Cayman Islands +(1)</option>
                                                                <option value="140">Central African Republic +(236)</option>
                                                                <option value="148">Chad +(235)</option>
                                                                <option value="152">Chile +(56)</option>
                                                                <option value="156">China +(86)</option>
                                                                <option value="162">Christmas Island +(61)</option>
                                                                <option value="166">Cocos (Keeling) Islands +(61)</option>
                                                                <option value="170">Colombia +(57)</option>
                                                                <option value="174">Comoros +(269)</option>
                                                                <option value="178">Congo +(242)</option>
                                                                <option value="180">Congo (Democratic Republic) +(243)</option>
                                                                <option value="184">Cook Islands +(682)</option>
                                                                <option value="188">Costa Rica +(506)</option>
                                                                <option value="384">Côte d'Ivoire +(225)</option>
                                                                <option value="191">Croatia +(385)</option>
                                                                <option value="192">Cuba +(53)</option>
                                                                <option value="531">Curaçao +(599)</option>
                                                                <option value="196">Cyprus +(357)</option>
                                                                <option value="203">Czech Republic +(420)</option>
                                                                <option value="208">Denmark +(45)</option>
                                                                <option value="262">Djibouti +(253)</option>
                                                                <option value="212">Dominica +(1)</option>
                                                                <option value="214">Dominican Republic +(1)</option>
                                                                <option value="218">Ecuador +(593)</option>
                                                                <option value="818">Egypt +(20)</option>
                                                                <option value="222">El Salvador +(503)</option>
                                                                <option value="226">Equatorial Guinea +(240)</option>
                                                                <option value="232">Eritrea +(291)</option>
                                                                <option value="233">Estonia +(372)</option>
                                                                <option value="231">Ethiopia +(251)</option>
                                                                <option value="238">Falkland Islands (Malvinas) +(500)</option>
                                                                <option value="234">Faroe Islands +(298)</option>
                                                                <option value="242">Fiji +(679)</option>
                                                                <option value="246">Finland +(358)</option>
                                                                <option value="250">France +(33)</option>
                                                                <option value="254">French Guiana +(594)</option>
                                                                <option value="258">French Polynesia +(689)</option>
                                                                <option value="260">French Southern Territories +(33)</option>
                                                                <option value="266">Gabon +(241)</option>
                                                                <option value="270">Gambia +(220)</option>
                                                                <option value="268">Georgia +(995)</option>
                                                                <option value="276">Germany +(49)</option>
                                                                <option value="288">Ghana +(233)</option>
                                                                <option value="292">Gibraltar +(350)</option>
                                                                <option value="300">Greece +(30)</option>
                                                                <option value="304">Greenland +(299)</option>
                                                                <option value="308">Grenada +(1)</option>
                                                                <option value="312">Guadeloupe +(590)</option>
                                                                <option value="316">Guam +(1)</option>
                                                                <option value="320">Guatemala +(502)</option>
                                                                <option value="831">Guernsey +(44)</option>
                                                                <option value="324">Guinea +(224)</option>
                                                                <option value="624">Guinea-Bissau +(245)</option>
                                                                <option value="328">Guyana +(592)</option>
                                                                <option value="332">Haiti +(509)</option>
                                                                <option value="334">Heard Island and McDonald Islands +(61)</option>
                                                                <option value="336">Holy See (Vatican City State) +(39)</option>
                                                                <option value="340">Honduras +(504)</option>
                                                                <option value="344">Hong Kong +(852)</option>
                                                                <option value="348">Hungary +(36)</option>
                                                                <option value="352">Iceland +(354)</option>
                                                                <option value="356">India +(91)</option>
                                                                <option value="360">Indonesia +(62)</option>
                                                                <option value="364">Iran +(98)</option>
                                                                <option value="368">Iraq +(964)</option>
                                                                <option value="372">Ireland +(353)</option>
                                                                <option value="833">Isle of Man +(44)</option>
                                                                <option value="376">Israel +(972)</option>
                                                                <option value="380">Italy +(39)</option>
                                                                <option value="388">Jamaica +(1)</option>
                                                                <option value="392">Japan +(81)</option>
                                                                <option value="832">Jersey +(44)</option>
                                                                <option value="400">Jordan +(962)</option>
                                                                <option value="398">Kazakhstan +(7)</option>
                                                                <option value="404">Kenya +(254)</option>
                                                                <option value="296">Kiribati +(686)</option>
                                                                <option value="408">Korea (North) +(850)</option>
                                                                <option value="410">Korea (South) +(82)</option>
                                                                <option value="414">Kuwait +(965)</option>
                                                                <option value="417">Kyrgyzstan +(996)</option>
                                                                <option value="418">Lao  +(856)</option>
                                                                <option value="428">Latvia +(371)</option>
                                                                <option value="422">Lebanon +(961)</option>
                                                                <option value="426">Lesotho +(266)</option>
                                                                <option value="430">Liberia +(231)</option>
                                                                <option value="434">Libya +(218)</option>
                                                                <option value="438">Liechtenstein +(423)</option>
                                                                <option value="440">Lithuania +(370)</option>
                                                                <option value="442">Luxembourg +(352)</option>
                                                                <option value="446">Macao +(853)</option>
                                                                <option value="807">Macedonia, the former Yugoslav Republic of +(389)</option>
                                                                <option value="450">Madagascar +(261)</option>
                                                                <option value="454">Malawi +(265)</option>
                                                                <option value="458">Malaysia +(60)</option>
                                                                <option value="462">Maldives +(960)</option>
                                                                <option value="466">Mali +(223)</option>
                                                                <option value="470">Malta +(356)</option>
                                                                <option value="584">Marshall Islands +(692)</option>
                                                                <option value="474">Martinique +(596)</option>
                                                                <option value="478">Mauritania +(222)</option>
                                                                <option value="480">Mauritius +(230)</option>
                                                                <option value="175">Mayotte +(262)</option>
                                                                <option value="484">Mexico +(52)</option>
                                                                <option value="583">Micronesia, Federated States of +(691)</option>
                                                                <option value="498">Moldova +(373)</option>
                                                                <option value="492">Monaco +(377)</option>
                                                                <option value="496">Mongolia +(976)</option>
                                                                <option value="499">Montenegro +(382)</option>
                                                                <option value="500">Montserrat +(1)</option>
                                                                <option value="504">Morocco +(212)</option>
                                                                <option value="508">Mozambique +(258)</option>
                                                                <option value="104">Myanmar +(95)</option>
                                                                <option value="516">Namibia +(264)</option>
                                                                <option value="520">Nauru +(674)</option>
                                                                <option value="524">Nepal +(977)</option>
                                                                <option value="528">Netherlands +(31)</option>
                                                                <option value="540">New Caledonia +(687)</option>
                                                                <option value="554">New Zealand +(64)</option>
                                                                <option value="558">Nicaragua +(505)</option>
                                                                <option value="562">Niger +(227)</option>
                                                                <option value="566">Nigeria +(234)</option>
                                                                <option value="570">Niue +(683)</option>
                                                                <option value="574">Norfolk Island +(672)</option>
                                                                <option value="580">Northern Mariana Islands +(1)</option>
                                                                <option value="578">Norway +(47)</option>
                                                                <option value="512">Oman +(968)</option>
                                                                <option value="586">Pakistan +(92)</option>
                                                                <option value="585">Palau +(680)</option>
                                                                <option value="275">Palestinian Territory, Occupied +(970)</option>
                                                                <option value="591">Panama +(507)</option>
                                                                <option value="598">Papua New Guinea +(675)</option>
                                                                <option value="600">Paraguay +(595)</option>
                                                                <option value="604">Peru +(51)</option>
                                                                <option value="608">Philippines +(63)</option>
                                                                <option value="612">Pitcairn +(649)</option>
                                                                <option value="616">Poland +(48)</option>
                                                                <option value="620">Portugal +(351)</option>
                                                                <option value="630">Puerto Rico +(1)</option>
                                                                <option value="634">Qatar +(974)</option>
                                                                <option value="638">Réunion +(262)</option>
                                                                <option value="642">Romania +(40)</option>
                                                                <option value="643">Russia +(7)</option>
                                                                <option value="646">Rwanda +(250)</option>
                                                                <option value="652">Saint Barthélemy +(590)</option>
                                                                <option value="654">Saint Helena, Ascension and Tristan da Cunha +(290)</option>
                                                                <option value="659">Saint Kitts and Nevis +(1)</option>
                                                                <option value="662">Saint Lucia +(1)</option>
                                                                <option value="663">Saint Martin (French part) +(590)</option>
                                                                <option value="666">Saint Pierre and Miquelon +(508)</option>
                                                                <option value="670">Saint Vincent and the Grenadines +(1)</option>
                                                                <option value="882">Samoa +(685)</option>
                                                                <option value="674">San Marino +(378)</option>
                                                                <option value="678">Sao Tome and Principe +(239)</option>
                                                                <option value="682">Saudi Arabia +(966)</option>
                                                                <option value="686">Senegal +(221)</option>
                                                                <option value="688">Serbia +(381)</option>
                                                                <option value="690">Seychelles +(248)</option>
                                                                <option value="694">Sierra Leone +(232)</option>
                                                                <option value="702">Singapore +(65)</option>
                                                                <option value="534">Sint Maarten (Dutch part) +(721)</option>
                                                                <option value="703">Slovakia +(421)</option>
                                                                <option value="705">Slovenia +(386)</option>
                                                                <option value="90">Solomon Islands +(677)</option>
                                                                <option value="706">Somalia +(252)</option>
                                                                <option value="710">South Africa +(27)</option>
                                                                <option value="239">South Georgia and the South Sandwich Islands +(44)</option>
                                                                <option value="728">South Sudan +(211)</option>
                                                                <option value="724">Spain +(34)</option>
                                                                <option value="144">Sri Lanka +(94)</option>
                                                                <option value="729">Sudan +(249)</option>
                                                                <option value="740">Suriname +(597)</option>
                                                                <option value="744">Svalbard and Jan Mayen +(47)</option>
                                                                <option value="748">Swaziland +(268)</option>
                                                                <option value="752">Sweden +(46)</option>
                                                                <option value="756">Switzerland +(41)</option>
                                                                <option value="760">Syria +(963)</option>
                                                                <option value="158">Taiwan, Province of China +(886)</option>
                                                                <option value="762">Tajikistan +(992)</option>
                                                                <option value="834">Tanzania +(255)</option>
                                                                <option value="764">Thailand +(66)</option>
                                                                <option value="626">Timor-Leste +(670)</option>
                                                                <option value="768">Togo +(228)</option>
                                                                <option value="772">Tokelau +(690)</option>
                                                                <option value="776">Tonga +(676)</option>
                                                                <option value="780">Trinidad and Tobago +(1)</option>
                                                                <option value="788">Tunisia +(216)</option>
                                                                <option value="792">Turkey +(90)</option>
                                                                <option value="795">Turkmenistan +(993)</option>
                                                                <option value="796">Turks and Caicos Islands +(1)</option>
                                                                <option value="798">Tuvalu +(688)</option>
                                                                <option value="800">Uganda +(256)</option>
                                                                <option value="804">Ukraine +(380)</option>
                                                                <option value="784">United Arab Emirates +(971)</option>
                                                                <option value="826">United Kingdom +(44)</option>
                                                                <option value="840">United States +(1)</option>
                                                                <option value="581">United States Minor Outlying Islands +(1)</option>
                                                                <option value="858">Uruguay +(598)</option>
                                                                <option value="860">Uzbekistan +(998)</option>
                                                                <option value="548">Vanuatu +(678)</option>
                                                                <option value="862">Venezuela +(58)</option>
                                                                <option value="704">Viet Nam +(84)</option>
                                                                <option value="92">Virgin Islands, British +(1)</option>
                                                                <option value="850">Virgin Islands, U.S. +(1)</option>
                                                                <option value="876">Wallis and Futuna +(681)</option>
                                                                <option value="732">Western Sahara +(212)</option>
                                                                <option value="887">Yemen +(967)</option>
                                                                <option value="894">Zambia +(260)</option>
                                                                <option value="716">Zimbabwe +(263)</option>
                                                          </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="mobile">
                            Mobile Number <span class="text-danger">*</span>
                          </label>
                          <input type="text" name="mobile" id="mobile" class="form-control" required="" inputmode="text" placeholder="Mobile Number">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="birthday">Date of Birth <span class="text-danger">*</span></label>
                          <input type="text" name="birthday" id="birthday" class="form-control flatpickr-input" placeholder="Date of Birth" required="" readonly="readonly">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <label class="form-label semibold" style="display: block;">
                          Gender
                          <span class="text-danger">*</span>
                        </label>
                        <div class="checkbox-detailed">
                          <input type="radio" name="gender" id="check-det-1" value="Male" required="">
                          <label for="check-det-1">
                            <span class="checkbox-detailed-tbl">
                              <span class="checkbox-detailed-cell">
                                <span class="checkbox-detailed-title">Male</span>
                              </span>
                            </span>
                          </label>
                        </div>
                        <div class="checkbox-detailed">
                          <input type="radio" name="gender" id="check-det-2" value="Female" required="">
                          <label for="check-det-2">
                            <span class="checkbox-detailed-tbl">
                              <span class="checkbox-detailed-cell">
                                <span class="checkbox-detailed-title">Female</span>
                              </span>
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="notes">Summary</label>
                          <textarea class="form-control" name="notes" id="notes" rows="3" placeholder="Please write a short summary about yourself"></textarea>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card box-shadow p-3 mb-lg-0 mb-4" style=" /*height: 550px;*/ " id="res_right">
                    <h5><span class="badge badge-primary px-3 py-2 rounded-pill">Select your preferred study destination(s)</span><i class="fa fa-info-circle ml-2 pt-1" data-toggle="tooltip" title="You can select multiple" style="color: #ceccda;"></i></h5>

                    <div id="study_destination">
                      <section class="box-typical box-typical-padding">

                          <div class="box-white">
                              <div class="row mt-2">

                                <div id="Australia"  class="col-md-3 mb-2" >
                                    <label class="labelDiv">
                                    <input type="checkbox" onclick="handleClick(`destination_australia`)" class="d-none countryBox" name="study_destinations[]" value="36" autocomplete="off">
                                    <div id="destination_australia" class="destination_div">
                                        <div class="flag_div">
                                            <img class="img-responsive flag_img" src="{{asset('assets/images/flag/1569253786.png')}}">
                                        </div>
                                        <div class="country_div">
                                            <strong>Australia</strong>
                                        </div>
                                    </div>
                                    </label>
                                </div>

                                <div id="Canada" class="col-md-3 mb-2" >
                                    <label class="labelDiv">
                                    <input type="checkbox" onclick="handleClick(`destination_canada`)"  class="d-none countryBox" name="study_destinations[]" value="124" autocomplete="off">
                                    <div id="destination_canada" class="destination_div">
                                        <div class="flag_div">
                                            <img class="img-responsive flag_img" src="{{asset('assets/images/flag/1569237351.png')}}">
                                        </div>
                                        <div class="country_div">
                                            <strong>Canada</strong>
                                        </div>
                                    </div>
                                    </label>
                                </div>



                                <div id="Germany" class="col-md-3 mb-2" >
                                    <label class="labelDiv">
                                    <input type="checkbox" onclick="handleClick(`destination_germany`)"  class="d-none countryBox" name="study_destinations[]" value="276" autocomplete="off">
                                    <div id="destination_germany" class="destination_div">
                                        <div class="flag_div">
                                            <img class="img-responsive flag_img" src="{{asset('assets/images/flag/1573652587.png')}}">
                                        </div>
                                        <div class="country_div">
                                            <strong>Germany</strong>
                                        </div>
                                    </div>
                                    </label>
                                </div>

                                <div id="Malaysia" class="col-md-3 mb-2" >
                                    <label class="labelDiv">
                                    <input type="checkbox" onclick="handleClick(`destination_malaysia`)" class="d-none countryBox" name="study_destinations[]" value="458" autocomplete="off">
                                    <div id="destination_malaysia" class="destination_div">
                                        <div class="flag_div">
                                            <img class="img-responsive flag_img" src="{{asset('assets/images/flag/1569404987.png')}}">
                                        </div>
                                        <div class="country_div">
                                            <strong>Malaysia</strong>
                                        </div>
                                    </div>
                                    </label>
                                </div>

                                <div id="United_Kingdom" class="col-md-3 mb-2" >
                                    <label class="labelDiv">
                                    <input type="checkbox" onclick="handleClick(`destination_uk`)" class="d-none countryBox" name="study_destinations[]" value="826" autocomplete="off">
                                    <div id="destination_uk" class="destination_div">
                                        <div class="flag_div">
                                            <img class="img-responsive flag_img" src="{{asset('assets/images/flag/1569240440.png')}}">
                                        </div>
                                        <div class="country_div">
                                            <strong>United Kingdom</strong>
                                        </div>
                                    </div>
                                    </label>
                                </div>

                                <div id="United_States" class="col-md-3 mb-2">
                                    <label class="labelDiv">
                                    <input type="checkbox" onclick="handleClick(`destination_us`)" class="d-none countryBox" name="study_destinations[]" value="840" autocomplete="off">
                                    <div id="destination_us" class="destination_div">
                                        <div class="flag_div">
                                            <img class="img-responsive flag_img" src="{{asset('assets/images/flag/1569246724.png')}}">
                                        </div>
                                        <div class="country_div">
                                            <strong>United States</strong>
                                        </div>
                                    </div>
                                    </label>
                                </div>

                              </div>
                          </div>
                      </section>
                    </div>

                    <h5 class="mt-2">
                      <span class="badge badge-primary px-3 py-2 rounded-pill">Admission Preference</span>
                    </h5>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Preffered Course level <span class="text-danger">*</span></label>
                          <div class="selectbox">
                            <select name="level" id="level" class="form-control" required="">
                              <option disabled="" selected="" value="">Select Course Level..</option>
                                                                <option value="23">HND</option>
                                                                <option value="24">HNC</option>
                                                                <option value="18">A Level</option>
                                                                <option value="21">APC</option>
                                                                <option value="20">Access to University</option>
                                                                <option value="19">Bachelor</option>
                                                                <option value="8">Bachelor ( Y1 )</option>
                                                                <option value="9">Bachelor ( Y2 )</option>
                                                                <option value="10">Bachelor ( Y3 )</option>
                                                                <option value="11">Bachelor ( Y4 )</option>
                                                                <option value="22">CAP</option>
                                                                <option value="4">Diploma</option>
                                                                <option value="2">English</option>
                                                                <option value="3">Foundation</option>
                                                                <option value="7">International  Year 1</option>
                                                                <option value="14">Masters</option>
                                                                <option value="15">Masters by Research</option>
                                                                <option value="16">MPhil</option>
                                                                <option value="1">Pre-Sessional English</option>
                                                                <option value="12">Pre-Masters</option>
                                                                <option value="13">PgDip</option>
                                                                <option value="17">PhD</option>
                                                                <option value="5">Schooling  Year 11</option>
                                                                <option value="6">Schooling  Year 12</option>
                                                                <option value="25">Advanced Subsidiary</option>
                                                          </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="funding_status">
                            Subject
                            <span class="text-danger">*</span>
                          </label>
                          <input type="text" name="course_name" class="form-control" placeholder="Subject" required="">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Start Date <span class="text-danger">*</span></label>
                          <div class="row">
                            <div class="col">
                              <div class="selectbox">
                                <select name="intake_month" id="intake_month" class="form-control" required="">
                                    <option disabled="" selected="" value="">Select Month..</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                              </div>
                            </div>
                            <div class="col">
                              <div class="selectbox">
                                <select name="intake_year" id="intake_year" class="form-control" required="">
                                  <option disabled="" selected="" value="">Select Year..</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>



              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="card box-shadow py-4 mb-lg-0 mb-4 mt-3 px-0" style="height: 100px;box-shadow: none;border: none;">

                    <div class="row">
                      <div class="col text-right">
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </form>

          </div>



@endsection
