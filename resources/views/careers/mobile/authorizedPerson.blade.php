<table class="w-full mt-8" @if($langSeg == 'ar') dir="rtl" @endif>
    <tbody>
        <caption class="my-4 underline">
            {{__('frontend.careerFormH')}}
        </caption>
        <tr class="hidden" id="requiredNotice">
            <td class="pb-4" colspan="2" class="text-red-900 text-center font-bold py-4">{{__('frontend.careerFormError')}}</td>
        </tr>

        <tr>
            <td style="width: 235px">{{__('frontend.careerFormName')}}</td>
        </tr>
        <tr>
            <td class="pb-4"><input type="text" name="applicant_name" id="applicant_name"  class=" w-full bg-transparent focus:outline-none focus:border-white focus:ring-white" required></td>
        </tr>

        <tr>
            <td>{{__('frontend.careerFormEmail')}}</td>
        </tr>
        <tr>
            <td class="pb-4"><input type="email" name="applicant_email" id="applicant_email"  class=" w-full bg-transparent focus:outline-none focus:border-white focus:ring-white" required ></td>
        </tr>
        
        <tr>
            <td>{{__('frontend.careerFormCountry')}}</td>
        </tr>
        <tr>
            <td class="pb-4">
                <select id="applicant_country" name="applicant_country" class="w-full bg-transparent focus:outline-none focus:border-white focus:ring-white"required>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="">Country of Origin</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Afghanistan">Afghanistan</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Åland Islands">Åland Islands</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Albania">Albania</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Algeria">Algeria</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="American Samoa">American Samoa</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Andorra">Andorra</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Angola">Angola</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Anguilla">Anguilla</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Antarctica">Antarctica</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Argentina">Argentina</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Armenia">Armenia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Aruba">Aruba</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Australia">Australia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Austria">Austria</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Azerbaijan">Azerbaijan</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Bahamas">Bahamas</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Bahrain">Bahrain</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Bangladesh">Bangladesh</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Barbados">Barbados</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Belarus">Belarus</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Belgium">Belgium</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Belize">Belize</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Benin">Benin</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Bermuda">Bermuda</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Bhutan">Bhutan</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Bolivia">Bolivia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Botswana">Botswana</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Bouvet Island">Bouvet Island</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Brazil">Brazil</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Brunei Darussalam">Brunei Darussalam</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Bulgaria">Bulgaria</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Burkina Faso">Burkina Faso</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Burundi">Burundi</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Cambodia">Cambodia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Cameroon">Cameroon</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Canada">Canada</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Cape Verde">Cape Verde</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Cayman Islands">Cayman Islands</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Central African Republic">Central African Republic</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Chad">Chad</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Chile">Chile</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="China">China</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Christmas Island">Christmas Island</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Colombia">Colombia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Comoros">Comoros</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Congo">Congo</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Cook Islands">Cook Islands</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Costa Rica">Costa Rica</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Cote D'ivoire">Cote D'ivoire</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Croatia">Croatia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Cuba">Cuba</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Cyprus">Cyprus</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Czech Republic">Czech Republic</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Denmark">Denmark</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Djibouti">Djibouti</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Dominica">Dominica</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Dominican Republic">Dominican Republic</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Ecuador">Ecuador</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Egypt">Egypt</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="El Salvador">El Salvador</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Equatorial Guinea">Equatorial Guinea</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Eritrea">Eritrea</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Estonia">Estonia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Ethiopia">Ethiopia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Faroe Islands">Faroe Islands</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Fiji">Fiji</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Finland">Finland</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="France">France</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="French Guiana">French Guiana</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="French Polynesia">French Polynesia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="French Southern Territories">French Southern Territories</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Gabon">Gabon</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Gambia">Gambia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Georgia">Georgia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Germany">Germany</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Ghana">Ghana</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Gibraltar">Gibraltar</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Greece">Greece</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Greenland">Greenland</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Grenada">Grenada</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Guadeloupe">Guadeloupe</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Guam">Guam</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Guatemala">Guatemala</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Guernsey">Guernsey</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Guinea">Guinea</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Guinea-bissau">Guinea-bissau</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Guyana">Guyana</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Haiti">Haiti</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Honduras">Honduras</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Hong Kong">Hong Kong</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Hungary">Hungary</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Iceland">Iceland</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="India">India</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Indonesia">Indonesia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Iraq">Iraq</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Ireland">Ireland</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Isle of Man">Isle of Man</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Israel">Israel</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Italy">Italy</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Jamaica">Jamaica</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Japan">Japan</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Jersey">Jersey</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Jordan">Jordan</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Kazakhstan">Kazakhstan</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Kenya">Kenya</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Kiribati">Kiribati</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Korea, Republic of">Korea, Republic of</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Kuwait">Kuwait</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Kyrgyzstan">Kyrgyzstan</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Latvia">Latvia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Lebanon">Lebanon</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Lesotho">Lesotho</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Liberia">Liberia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Liechtenstein">Liechtenstein</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Lithuania">Lithuania</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Luxembourg">Luxembourg</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Macao">Macao</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Madagascar">Madagascar</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Malawi">Malawi</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Malaysia">Malaysia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Maldives">Maldives</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Mali">Mali</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Malta">Malta</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Marshall Islands">Marshall Islands</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Martinique">Martinique</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Mauritania">Mauritania</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Mauritius">Mauritius</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Mayotte">Mayotte</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Mexico">Mexico</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Moldova, Republic of">Moldova, Republic of</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Monaco">Monaco</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Mongolia">Mongolia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Montenegro">Montenegro</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Montserrat">Montserrat</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Morocco">Morocco</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Mozambique">Mozambique</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Myanmar">Myanmar</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Namibia">Namibia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Nauru">Nauru</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Nepal">Nepal</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Netherlands">Netherlands</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Netherlands Antilles">Netherlands Antilles</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="New Caledonia">New Caledonia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="New Zealand">New Zealand</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Nicaragua">Nicaragua</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Niger">Niger</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Nigeria">Nigeria</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Niue">Niue</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Norfolk Island">Norfolk Island</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Norway">Norway</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Oman">Oman</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Pakistan">Pakistan</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Palau">Palau</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Panama">Panama</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Papua New Guinea">Papua New Guinea</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Paraguay">Paraguay</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Peru">Peru</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Philippines">Philippines</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Pitcairn">Pitcairn</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Poland">Poland</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Portugal">Portugal</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Puerto Rico">Puerto Rico</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Qatar">Qatar</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Reunion">Reunion</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Romania">Romania</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Russian Federation">Russian Federation</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Rwanda">Rwanda</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Saint Helena">Saint Helena</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Saint Lucia">Saint Lucia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Samoa">Samoa</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="San Marino">San Marino</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Saudi Arabia">Saudi Arabia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Senegal">Senegal</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Serbia">Serbia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Seychelles">Seychelles</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Sierra Leone">Sierra Leone</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Singapore">Singapore</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Slovakia">Slovakia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Slovenia">Slovenia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Solomon Islands">Solomon Islands</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Somalia">Somalia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="South Africa">South Africa</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Spain">Spain</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Sri Lanka">Sri Lanka</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Sudan">Sudan</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Suriname">Suriname</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Swaziland">Swaziland</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Sweden">Sweden</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Switzerland">Switzerland</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Syrian Arab Republic">Syrian Arab Republic</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Taiwan">Taiwan</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Tajikistan">Tajikistan</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Thailand">Thailand</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Timor-leste">Timor-leste</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Togo">Togo</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Tokelau">Tokelau</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Tonga">Tonga</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Tunisia">Tunisia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Turkey">Turkey</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Turkmenistan">Turkmenistan</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Tuvalu">Tuvalu</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Uganda">Uganda</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Ukraine">Ukraine</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="United Arab Emirates">United Arab Emirates</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="United Kingdom">United Kingdom</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="United States">United States</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Uruguay">Uruguay</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Uzbekistan">Uzbekistan</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Vanuatu">Vanuatu</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Venezuela">Venezuela</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Viet Nam">Viet Nam</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Virgin Islands, British">Virgin Islands, British</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Wallis and Futuna">Wallis and Futuna</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Western Sahara">Western Sahara</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Yemen">Yemen</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Zambia">Zambia</option>
                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" value="Zimbabwe">Zimbabwe</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>{{__('frontend.careerFormContact')}}</td>
        </tr>
        <tr>
            <td class="pb-4">
                <table class="w-full bg-transparent focus:outline-none focus:border-white focus:ring-white">
                    <tr>
                        <td>
                            <select name="countryCode"  class="w-full bg-transparent focus:outline-none focus:border-white focus:ring-white" >
                                <option data-countryCode="AE" value="971" Selected>United Arab Emirates (+971)</option>
                                <optgroup label="Other countries">
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="DZ" value="213">Algeria (+213)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="AD" value="376">Andorra (+376)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="AO" value="244">Angola (+244)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="AR" value="54">Argentina (+54)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="AM" value="374">Armenia (+374)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="AW" value="297">Aruba (+297)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="AU" value="61">Australia (+61)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="AT" value="43">Austria (+43)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="BH" value="973">Bahrain (+973)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="BY" value="375">Belarus (+375)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="BE" value="32">Belgium (+32)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="BZ" value="501">Belize (+501)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="BJ" value="229">Benin (+229)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="BT" value="975">Bhutan (+975)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="BO" value="591">Bolivia (+591)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="BW" value="267">Botswana (+267)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="BR" value="55">Brazil (+55)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="BN" value="673">Brunei (+673)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="BI" value="257">Burundi (+257)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="KH" value="855">Cambodia (+855)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="CM" value="237">Cameroon (+237)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="CA" value="1">Canada (+1)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="CL" value="56">Chile (+56)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="CN" value="86">China (+86)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="CO" value="57">Colombia (+57)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="KM" value="269">Comoros (+269)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="CG" value="242">Congo (+242)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="HR" value="385">Croatia (+385)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="CU" value="53">Cuba (+53)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="DK" value="45">Denmark (+45)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="EC" value="593">Ecuador (+593)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="EG" value="20">Egypt (+20)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="SV" value="503">El Salvador (+503)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="ER" value="291">Eritrea (+291)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="EE" value="372">Estonia (+372)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="FJ" value="679">Fiji (+679)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="FI" value="358">Finland (+358)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="FR" value="33">France (+33)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="GF" value="594">French Guiana (+594)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="GA" value="241">Gabon (+241)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="GM" value="220">Gambia (+220)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="DE" value="49">Germany (+49)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="GH" value="233">Ghana (+233)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="GR" value="30">Greece (+30)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="GL" value="299">Greenland (+299)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="GU" value="671">Guam (+671)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="GT" value="502">Guatemala (+502)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="GN" value="224">Guinea (+224)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="GY" value="592">Guyana (+592)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="HT" value="509">Haiti (+509)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="HN" value="504">Honduras (+504)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="HU" value="36">Hungary (+36)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="IS" value="354">Iceland (+354)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="IN" value="91">India (+91)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="ID" value="62">Indonesia (+62)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="IR" value="98">Iran (+98)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="IQ" value="964">Iraq (+964)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="IE" value="353">Ireland (+353)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="IL" value="972">Israel (+972)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="IT" value="39">Italy (+39)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="JP" value="81">Japan (+81)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="JO" value="962">Jordan (+962)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="KE" value="254">Kenya (+254)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="KI" value="686">Kiribati (+686)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="KP" value="850">Korea North (+850)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="KR" value="82">Korea South (+82)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="KW" value="965">Kuwait (+965)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="LA" value="856">Laos (+856)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="LV" value="371">Latvia (+371)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="LB" value="961">Lebanon (+961)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="LS" value="266">Lesotho (+266)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="LR" value="231">Liberia (+231)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="LY" value="218">Libya (+218)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="LT" value="370">Lithuania (+370)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="MO" value="853">Macao (+853)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="MK" value="389">Macedonia (+389)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="MG" value="261">Madagascar (+261)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="MW" value="265">Malawi (+265)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="MY" value="60">Malaysia (+60)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="MV" value="960">Maldives (+960)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="ML" value="223">Mali (+223)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="MT" value="356">Malta (+356)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="MQ" value="596">Martinique (+596)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="MR" value="222">Mauritania (+222)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="YT" value="269">Mayotte (+269)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="MX" value="52">Mexico (+52)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="FM" value="691">Micronesia (+691)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="MD" value="373">Moldova (+373)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="MC" value="377">Monaco (+377)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="MN" value="976">Mongolia (+976)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="MA" value="212">Morocco (+212)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="MN" value="95">Myanmar (+95)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="NA" value="264">Namibia (+264)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="NR" value="674">Nauru (+674)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="NP" value="977">Nepal (+977)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="NL" value="31">Netherlands (+31)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="NE" value="227">Niger (+227)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="NG" value="234">Nigeria (+234)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="NU" value="683">Niue (+683)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="NO" value="47">Norway (+47)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="OM" value="968">Oman (+968)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="PW" value="680">Palau (+680)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="PA" value="507">Panama (+507)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="PY" value="595">Paraguay (+595)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="PE" value="51">Peru (+51)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="PH" value="63">Philippines (+63)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="PL" value="48">Poland (+48)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="PT" value="351">Portugal (+351)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="QA" value="974">Qatar (+974)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="RE" value="262">Reunion (+262)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="RO" value="40">Romania (+40)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="RU" value="7">Russia (+7)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="RW" value="250">Rwanda (+250)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="SM" value="378">San Marino (+378)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="SN" value="221">Senegal (+221)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="CS" value="381">Serbia (+381)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="SC" value="248">Seychelles (+248)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="SG" value="65">Singapore (+65)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="SI" value="386">Slovenia (+386)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="SO" value="252">Somalia (+252)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="ZA" value="27">South Africa (+27)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="ES" value="34">Spain (+34)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="SH" value="290">St. Helena (+290)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="SD" value="249">Sudan (+249)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="SR" value="597">Suriname (+597)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="SE" value="46">Sweden (+46)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="CH" value="41">Switzerland (+41)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="SI" value="963">Syria (+963)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="TW" value="886">Taiwan (+886)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="TH" value="66">Thailand (+66)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="TG" value="228">Togo (+228)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="TO" value="676">Tonga (+676)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="TN" value="216">Tunisia (+216)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="TR" value="90">Turkey (+90)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="UG" value="256">Uganda (+256)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="GB" value="44">UK (+44)</option> 
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="UA" value="380">Ukraine (+380)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="UY" value="598">Uruguay (+598)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="US" value="1">USA (+1)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="VA" value="379">Vatican City (+379)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="VE" value="58">Venezuela (+58)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="VN" value="84">Vietnam (+84)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="ZM" value="260">Zambia (+260)</option>
                                    <option class="bg-transparent focus:outline-none focus:border-white focus:ring-white" data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                </optgroup>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" name="applicant_phone" id="applicant_phone" placeholder="050 123 4567" class="border w-full bg-transparent focus:outline-none focus:border-white focus:ring-white" required></td>
                    </tr>
                </table>
                
            </tr>
        <tr>
            <td>{{__('frontend.careerFormLang')}}</td>
        </tr>
        <tr>
            <td class="pb-4"><input type="text" name="applicant_languages" id="applicant_languages"  class=" w-full bg-transparent focus:outline-none focus:border-white focus:ring-white" required></td>
        </tr>   


        <tr>
            <td>{{__('frontend.careerFormRole')}}</td>
        </tr>
        <tr>
            <td class="pb-4"><input type="text" name="applicant_job" id="applicant_job" class=" w-full bg-transparent focus:outline-none focus:border-white focus:ring-white" required></td>
        </tr>        


        <tr>
            <td>{{__('frontend.careerFormCV')}}</td>
        </tr>
        <tr>
            <td class="pb-4"><input 
                type="file" 
                name="applicant_cv"
                @if($langSeg == 'ar')
                    class="
                        block w-full text-sm text-slate-500
                        border border-gray-600
                        file:ml-4 file:py-2 file:px-4
                        file:rounded-0 file:border-0
                        file:text-sm file:font-semibold
                        file:bg-black file:text-gray-50
                        file:cursor-pointer
                        bg-transparent focus:outline-none focus:border-white focus:ring-white
                    "
                @else
                    class="
                        block w-full text-sm text-slate-500
                        border border-gray-600
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-0 file:border-0
                        file:text-sm file:font-semibold
                        file:bg-black file:text-gray-50
                        file:cursor-pointer
                        bg-transparent focus:outline-none focus:border-white focus:ring-white
                    "
                @endif 
                required/>
            </td>
        </tr>

        
    </tbody>
</table>

<input type="hidden" name="country_code" id="country_code">
