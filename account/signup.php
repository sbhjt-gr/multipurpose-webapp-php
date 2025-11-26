
<!DOCTYPE html>
<html>
<head>
<title>Sign Up - Cloudy Silver</title>
<meta property="og:title" content="Sign Up - Cloudy Silver!" />
<?php include '../head-tags-efrtg1232s84.php'; ?> 
</head>
<body>
<?php include '../header-564qs59743.php'; 
?>
<br />
<form method="post" action="<?php echo htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_QUOTES, 'UTF-8'); ?>" class="form-signup">
    <div class="container">
<br />
            <div class="form-horizontal" role="form">
                <h2>Join with us!</h2>
<br />
<br />
             <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control tooltipped" data-toggle="tooltip" title="Your email will be required to log into your account. We'll never share your email with anyone." required />
                    </div>
                </div>
                <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">Choose Username</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="Choose Username" class="form-control tooltipped" data-toggle="tooltip" title="This name will be displayed as your account name and will help you to get identified by anyone." name="username" required />
                    </div>
                </div>
                <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="Full Name" class="form-control tooltipped" data-toggle="tooltip" title="Enter your first and last name here. This name will be shown in your account." name="full_name" />     
                    </div>
                </div>
                <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required />
                    </div>
                </div>
                <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" name="confirm_password" placeholder="Confirm Password" class="form-control tooltipped" required />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9">                  
<?php 
/* $ip = $_SERVER['REMOTE_ADDR'];

$plugin = 'http://www.geoplugin.net/php.gp?ip=' . $ip;
$details = unserialize(file_get_contents($plugin));
$city = $details['geoplugin_city']; 

$country = $details['geoplugin_countryName'];

echo '<input type="hidden" name="country" value="' . $country . '" />
<input type="hidden" name="city" value="' . $city . '" />';


echo '<select id="country" class="form-control" name="country" required>
<option>Your Country</option>
<option value="Afghanistan"' . $1 . '>Afghanistan</option>
<option value="Albania"' . $2 . '>Albania</option>
<option value="Algeria"' . $3 . '>Algeria</option>
<option value="Andorra"' . $4 . '>Andorra</option>
<option value="Angola"' . $5 . '>Angola</option>
<option value="Antigua and Barbuda"' . $6 . '>Antigua and Barbuda</option>
<option value="Argentina"' . $7 . '>Argentina</option>
<option value="Armenia"' . $8 . '>Armenia</option>
<option value="Australia"' . $9 . '>Australia</option>
<option value="Austria"' . $10 . '>Austria</option>
<option value="Azerbaijan"' . $11 . '>Azerbaijan</option>
<option value="Bahamas"' . $12 . '>Bahamas</option>
<option value="Bahrain"' . $13 . '>Bahrain</option>
<option value="Bangladesh"' . $14 . '>Bangladesh</option>
<option value="Barbados"' . $15 . '>Barbados</option>
<option value="Belarus"' . $16 . '>Belarus</option>
<option value="Belgium"' . $17 . '>Belgium</option>
<option value="Belize"' . $18 . '>Belize</option>
<option value="Benin"' . $19 . '>Benin</option>
<option value="Bhutan"' . $20 . '>Bhutan</option>
<option value="Bolivia"' . $21 . '>Bolivia</option>
<option value="Bosnia and Herzegovina"' . $22 . '>Bosnia and Herzegovina</option>
<option value="Botswana"' . $23 . '>Botswana</option>
<option value="Brazil"' . $24 . '>Brazil</option>
<option value="Brunei"' . $25 . '>Brunei</option>
<option value="Bulgaria"' . $26 . '>Bulgaria</option>
<option value="Burkina Faso"' . $27 . '>Burkina Faso</option>
<option value="Burundi"' . $28 . '>Burundi</option>
<option value="Cabo Verde"' . $29 . '>Cabo Verde</option>
<option value="Cambodia"' . $30 . '>Cambodia</option>
<option value="Cameroon"' . $31 . '>Cameroon</option>
<option value="Canada"' . $32 . '>Canada</option>
<option value="Central African Republic [CAR]"' . $33 . '>Central African Republic [CAR]</option>
<option value="Chad"' . $34 . '>Chad</option>
<option value="Chile"' . $35 . '>Chile</option>
<option value="China"' . $36 . '>China</option>
<option value="Colombia"' . $37 . '>Colombia</option>
<option value="Comoros"' . $38 . '>Comoros</option>
<option value="Congo"' . $39 . '>Congo</option>
<option value="Costa Rica"' . $40 . '>Costa Rica</option>
<option value="Cote"' . $41 . '>Cote d"Ivoire</option>
<option value="Croatia"' . $42 . '>Croatia</option>
<option value="Cuba"' . $43 . '>Cuba</option>
<option value="Cyprus"' . $44 . '>Cyprus</option>
<option value="Czech Republic"' . $45 . '>Czech Republic</option>
<option value="Denmark"' . $46 . '>Denmark</option>
<option value="Djibouti"' . $47 . '>Djibouti</option>
<option value="Dominica"' . $48 . '>Dominica</option>
<option value="Dominican Republic"' . $49 . '>Dominican Republic</option>
<option value="Ecuador"' . $50 . '>Ecuador</option>
<option value="Egypt"' . $51 . '>Egypt</option>
<option value="El Salvador"' . $52 . '>El Salvador</option>
<option value="Equatorial Guinea"' . $53 . '>Equatorial Guinea</option>
<option value="Eritrea"' . $54 . '>Eritrea</option>
<option value="Estonia"' . $55 . '>Estonia</option>
<option value="Ethiopia"' . $56 . '>Ethiopia</option>
<option value="Fiji"' . $57 . '>Fiji</option>
<option value="Finland"' . $58 . '>Finland</option>
<option value="France"' . $59 . '>France</option>
<option value="Gabon"' . $60 . '>Gabon</option>
<option value="Gambia"' . $61 . '>Gambia</option>
<option value="Georgia"' . $62 . '>Georgia</option>
<option value="Germany"' . $63 . '>Germany</option>
<option value="Ghana"' . $64 . '>Ghana</option>
<option value="Greece"' . $65 . '>Greece</option>
<option value="Grenada"' . $66 . '>Grenada</option>
<option value="Guatemala"' . $67 . '>Guatemala</option>
<option value="Guinea"' . $68 . '>Guinea</option>
<option value="Guinea-Bissau"' . $69 . '>Guinea-Bissau</option>
<option value="Guyana"' . $70 . '>Guyana</option>
<option value="Haiti"' . $71 . '>Haiti</option>
<option value="Honduras"' . $72 . '>Honduras</option>
<option value="Hungary"' . $73 . '>Hungary</option>
<option value="Iceland"' . $74 . '>Iceland</option>
<option value="India"' . $75 . '>India</option>
<option value="Indonesia"' . $76 . '>Indonesia</option>
<option value="Iran"' . $77 . '>Iran</option>
<option value="Iraq"' . $78 . '>Iraq</option>
<option value="Ireland"' . $79 . '>Ireland</option>
<option value="Israel"' . $80 . '>Israel</option>
<option value="Italy"' . $81 . '>Italy</option>
<option value="Jamaica"' . $82 . '>Jamaica</option>
<option value="Japan"' . $83 . '>Japan</option>
<option value="Jordan"' . $84 . '>Jordan</option>
<option value="Kazakhstan"' . $85 . '>Kazakhstan</option>
<option value="Kenya"' . $86 . '>Kenya</option>
<option value="Kiribati"' . $87 . '>Kiribati</option>
<option value="Kosovo"' . $88 . '>Kosovo</option>
<option value="Kuwait"' . $89 . '>Kuwait</option>
<option value="Kyrgyzstan"' . $90 . '>Kyrgyzstan</option>
<option value="Laos"' . $91 . '>Laos</option>
<option value="Latvia"' . $92 . '>Latvia</option>
<option value="Lebanon"' . $93 . '>Lebanon</option>
<option value="Lesotho"' . $94 . '>Lesotho</option>
<option value="Liberia"' . $95 . '>Liberia</option>
<option value="Libya"' . $96 . '>Libya</option>
<option value="Liechtenstein"' . $97 . '>Liechtenstein</option>
<option value="Lithuania"' . $98 . '>Lithuania</option>
<option value="Luxembourg"' . $99 . '>Luxembourg</option>
<option value="Macedonia [FYROM]"' . $100 . '>Macedonia [FYROM]</option>
<option value="Madagascar"' . $101 . '>Madagascar</option>
<option value="Malawi"' . $102 . '>Malawi</option>
<option value="Malaysia"' . $103 . '>Malaysia</option>
<option value="Maldives"' . $104 . '>Maldives</option>
<option value="Mali"' . $105 . '>Mali</option>
<option value="Malta"' . $106 . '>Malta</option>
<option value="Marshall Islands"' . $107 . '>Marshall Islands</option>
<option value="Mauritania"' . $108 . '>Mauritania</option>
<option value="Mauritius"' . $109 . '>Mauritius</option>
<option value="Mexico"' . $110 . '>Mexico</option>
<option value="Micronesia"' . $111 . '>Micronesia</option>
<option value="Moldova"' . $112 . '>Moldova</option>
<option value="Monaco"' . $113 . '>Monaco</option>
<option value="Mongolia"' . $114 . '>Mongolia</option>
<option value="Montenegro"' . $115 . '>Montenegro</option>
<option value="Morocco"' . $116 . '>Morocco</option>
<option value="Mozambique"' . $117 . '>Mozambique</option>
<option value="Myanmar [Burma]"' . $118 . '>Myanmar [Burma]</option>
<option value="Namibia"' . $119 . '>Namibia</option>
<option value="Nauru"' . $120 . '>Nauru</option>
<option value="Nepal"' . $121 . '>Nepal</option>
<option value="Netherlands"' . $123 . '>Netherlands</option>
<option value="New Zealand"' . $124 . '>New Zealand</option>
<option value="Nicaragua"' . $125 . '>Nicaragua</option>
<option value="Niger"' . $126 . '>Niger</option>
<option value="Nigeria"' . $127 . '>Nigeria</option>
<option value="North Korea"' . $128 . '>North Korea</option>
<option value="Norway"' . $129 . '>Norway</option>
<option value="Oman"' . $130 . '>Oman</option>
<option value="Pakistan"' . $131 . '>Pakistan</option>
<option value="Palau"' . $132 . '>Palau</option>
<option value="Palestine"' . $133 . '>Palestine</option>
<option value="Panama"' . $134 . '>Panama</option>
<option value="Papua New"' . $135 . '>Papua New</option>
<option value="Guinea"' . $136 . '>Guinea</option>
<option value="Paraguay"' . $137 . '>Paraguay</option>
<option value="Peru"' . $138 . '>Peru</option>
<option value="PhilippinesPoland"' . $139 . '>PhilippinesPoland</option>
<option value="Portugal"' . $140 . '>Portugal</option>
<option value="Qatar"' . $141 . '>Qatar</option>
<option value="Romania"' . $142 . '>Romania</option>
<option value="Russia"' . $143 . '>Russia</option>
<option value="Rwanda"' . $144 . '>Rwanda</option>
<option value="Saint Kitts"' . $145 . '>Saint Kitts</option>
<option value="Saint Lucia"' . $146 . '>Saint Lucia</option>
<option value="Saint Vincent and the Grenadines"' . $147 . '>Saint Vincent and the Grenadines</option>
<option value="Samoa"' . $148 . '>Samoa</option>
<option value="San Marino"' . $149 . '>San Marino</option>
<option value="Sao Tome and Principe"' . $150 . '>Sao Tome and Principe</option>
<option value="Saudi Arabia"' . $151 . '>Saudi Arabia</option>
<option value="Senegal"' . $152 . '>Senegal</option>
<option value="Serbia"' . $153 . '>Serbia</option>
<option value="Seychelles"' . $154 . '>Seychelles</option>
<option value="Sierra Leone"' . $155 . '>Sierra Leone</option>
<option value="Singapore"' . $156 . '>Singapore</option>
<option value="Slovakia"' . $157 . '>Slovakia</option>
<option value="Slovenia"' . $158 . '>Slovenia</option>
<option value="Solomon Islands"' . $159 . '>Solomon Islands</option>
<option value="Somalia"' . $160 . '>Somalia</option>
<option value="South Africa"' . $161 . '>South Africa</option>
<option value="South Korea"' . $162 . '>South Korea</option>
<option value="South Sudan"' . $163 . '>South Sudan</option>
<option value="Spain"' . $164 . '>Spain</option>
<option value="Sri Lanka"' . $165 . '>Sri Lanka</option>
<option value="Sudan"' . $166 . '>Sudan</option>
<option value="Suriname"' . $167 . '>Suriname</option>
<option value="Swaziland"' . $168 . '>Swaziland</option>
<option value="Sweden"' . $169 . '>Sweden</option>
<option value="Switzerland"' . $170 . '>Switzerland</option>
<option value="Syria"' . $171 . '>Syria</option>
<option value="Taiwan"' . $172 . '>Taiwan</option>
<option value="Tajikistan"' . $173 . '>Tajikistan</option>
<option value="Tanzania"' . $174 . '>Tanzania</option>
<option value="Thailand"' . $175 . '>Thailand</option>
<option value="Timor-Leste"' . $176 . '>Timor-Leste</option>
<option value="Togo"' . $177 . '>Togo</option>
<option value="Tonga"' . $178 . '>Tonga</option>
<option value="Trinidad and Tobago"' . $179 . '>Trinidad and Tobago</option>
<option value="Tunisia"' . $180 . '>Tunisia</option>
<option value="Turkey"' . $181 . '>Turkey</option>
<option value="Turkmenistan"' . $182 . '>Turkmenistan</option>
<option value="Tuvalu"' . $183 . '>Tuvalu</option>
<option value="Uganda"' . $184 . '>Uganda</option>
<option value="Ukraine"' . $185 '>Ukraine</option>
<option value="United Arab Emirates [UAE]"' . $186 . '>United Arab Emirates [UAE]</option>
<option value="United Kingdom [UK]"' . $187 . '>United Kingdom [UK]</option>
<option value="United States of America [USA]"' . $188 . '>United States of America [USA]</option>
<option value="Uruguay"' . $189 . '>Uruguay</option>
<option value="Uzbekistan"' . $190 . '>Uzbekistan</option>
<option value="Vanuatu"' . $191 . '>Vanuatu</option>
<option value="Vatican City [Holy See]"' . $192 . '>Vatican City [Holy See]</option>
<option value="Venezuela"' . $193 . '>Venezuela</option>
<option value="Vietnam"' . $194 . '>Vietnam</option>
<option value="Yemen"' . $195 . '>Yemen</option>
<option value="Zambia"' . $196 . '>Zambia</option>
<option value="Zimbabwe"' . $197 . '>Zimbabwe</option>
                    </select>'; */
?>


                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" name="gender" value="Female" checked />Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" name="gender" value="Male" />Male
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="unknownRadio" name="gender" value="unknown" />Unknown
                                </label>
                            </div>
                        </div>
                    </div>
                </div> 
  <!--<div class="switch mt+">
    <input type="checkbox" id="switch2" name="agree_terms" value="accept" class="switch__input" checked  />
    <label for="switch2" class="switch__label">I agree to the <a href="/s/terms.php" target="_blank">Terms of Service</a></label>
  </div>
  <div class="switch mt+">
    <input type="checkbox" id="switch3" name="agree_policy" value="accept" class="switch__input" checked />
    <label for="switch3" class="switch__label">I agree to the <a href="/s/policy.php" target="_blank">Privacy Policy</a></label>
  </div>-->
<br />
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="submit" class="btn btn-primary btn-block" name="su_submit" value="Sign Up" />
                    </div>
                </div>
                <div class="ahaa">Already have an account? <a href="/account/login.php">Log In</a></div>
            </div> 
        </div> 
</form>
</div>
<script type="text/javascript">
$('.form-control').tooltip({
     placement: "right",
     trigger: "focus"
});
</script>
<br />
<?php include '../footer-73q4637394.php'; ?>
</body>
</html>