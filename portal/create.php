<?php
    $page = 'Create a Recce';
    include('includes/header.php')
?>

  <style>
    main{
      background-color: #f4f4f4 !important;
      height: 100vh !important;
    }
  </style>

  <!-- Progress markers on the side -->
  <div id='create-progress'>
    <div id='progress-middle'>
      <!-- edit number of these depending on final creation process -->
      <div class='progress-marker current-page'></div>
      <div class='progress-marker'></div>
      <div class='progress-marker'></div>
      <div class='progress-marker'></div>
      <div class='progress-marker'></div>
      <div class='progress-marker'></div>
    </div>
  </div>

  <div id='create-modal'>
    <h1>Create a Recce</h1>
    <form method='post' action='create-script' id='create-form' enctype="multipart/form-data">
    <section class='create-section create-active-section'>

      <div class='input-wrapper'>
        <label for='name'>Let's give this place a name</label>
        <input name='name' class="create-input" type="text" required placeholder="Location Name">
      </div>

      <div class='input-wrapper'>
        <label for="type">What type of location are you listing?</label>
        <select name='type' class="create-input">
          <option value="House" selected="selected">House</option>
          <option value="Apartment/Flat">Apartment/Flat</option>
          <option value="Open Space">Open Space</option>
          <option value="Farm">Farm</option>
          <option value="Office">Office</option>
          <option value="Cafe/Restaurant">Cafe/Restaurant</option>
          <option value="Leisure Centre/Gym/Pool">Leisure Centre/Gym/Pool</option>
          <option value="Club, Bar or Pub">Club, Bar or Pub</option>
          <option value="Cinema/Theatre">Cinema/Theatre</option>
          <option value="University, School or College">University, School or College</option>
          <option value="Shop">Shop</option>
          <option value="Shopping Centre/Mall">Shopping Centre/Mall</option>
          <option value="Amusement park/Arcade">Amusement park/Arcade</option>
          <option value="Warehouse/Storage Unit">Warehouse/Storage Unit</option>
          <option value="Crematorium/Cemetery/Chapel">Crematorium/Cemetery/Chapel</option>
          <option value="High Street">High Street</option>
          <option value="Pier">Pier</option>
          <option value="Park">Park</option>
          <option value="Woods/Forest">Woods/Forest</option>
          <option value="Lake/River">Lake/River</option>
          <option value="Other">Other</option>
        </select>
      </div>

      <div class='input-wrapper'>
        <label for='owner-name'>Who owns this place?</label>
        <input name='owner-name' class="create-input" type='text' required placeholder="Owner Name"></input>
      </div>

      <div class='input-wrapper'>
        <label>What is your association with the owner?</label>
        <label class='create-radio-label'>
          <input name='owner-asso' class="create-radio" type='radio' selected='selected' value="I am the owner">
          <div class='create-check create-check-checked'></div>
          <p>I am the owner</p>
        </label>
        <label class='create-radio-label'>
          <input name='owner-asso' class="create-radio" type='radio' selected value="I am associated with the property">
          <div class='create-check'></div>
          <p>I am associated with the property</p>
        </label>
        <label class='create-radio-label'>
          <input name='owner-asso' class="create-radio" type='radio' selected value="I know the owner">
          <div class='create-check'></div>
          <p>I know the owner</p>
        </label>
      </div>
    </section>

    <section class='create-section'>
      <div class='input-wrapper'>
        <label for='description'>Let's get a short descritption for your Recce</label>
        <textarea required class='create-input create-textarea' name='description'></textarea>
      </div>
    </section>

    <section class='create-section'>
      <div class='input-wrapper' style='text-align: center;'>
        <label for='description'>Now for some pictures!</label>
        <div class='image-upload'>
          <input type='file' name='pic1' data-pic-id='1'>
          <div class='custom-file-upload' data-pic-id='1'>+</div>
          <div class='custom-img-change-remove'>
            <div class='custom-img-change'>Change</div>
            <div class='custom-img-remove'>Remove</div>
          </div>
        </div>
        <div class='image-upload'>
          <input type='file' name='pic2' data-pic-id='2'>
          <div class='custom-file-upload' data-pic-id='2'>+</div>
          <div class='custom-img-change-remove'>
            <div class='custom-img-change'>Change</div>
            <div class='custom-img-remove'>Remove</div>
          </div>
        </div>
        <div class='image-upload'>
          <input type='file' name='pic3' data-pic-id='3'>
          <div class='custom-file-upload' data-pic-id='3'>+</div>
          <div class='custom-img-change-remove'>
            <div class='custom-img-change'>Change</div>
            <div class='custom-img-remove'>Remove</div>
          </div>
        </div>
        <div class='image-upload'>
          <input type='file' name='pic4' data-pic-id='4'>
          <div class='custom-file-upload' data-pic-id='4'>+</div>
          <div class='custom-img-change-remove'>
            <div class='custom-img-change'>Change</div>
            <div class='custom-img-remove'>Remove</div>
          </div>
        </div>
        <div class='image-upload'>
          <input type='file' name='pic5' data-pic-id='5'>
          <div class='custom-file-upload' data-pic-id='5'>+</div>
          <div class='custom-img-change-remove'>
            <div class='custom-img-change'>Change</div>
            <div class='custom-img-remove'>Remove</div>
          </div>
        </div>
        <div class='image-upload'>
          <input type='file' name='pic6' data-pic-id='6'>
          <div class='custom-file-upload' data-pic-id='6'>+</div>
          <div class='custom-img-change-remove'>
            <div class='custom-img-change'>Change</div>
            <div class='custom-img-remove'>Remove</div>
          </div>
        </div>
      </div>
    </section>

    <section class='create-section'>
        <div class='input-wrapper'>
          <label for='features'>Location Features</label>
          <input name='features' class="create-checkbox" type='checkbox' value='wifi'> WiFi</input>
        </div>
    </section>

    <section class='create-section'>
          <!-- address-line1 input-->
          <div class="control-group">
              <label class="control-label">Address Line 1</label>
              <div class="controls">
                  <input id="address-line1" name="address-line1" type="text" placeholder="address line 1"
                  class="create-input">
              </div>
          </div>
          <!-- address-line2 input-->
          <div class="control-group">
              <label class="control-label">Address Line 2</label>
              <div class="controls">
                  <input id="address-line2" name="address-line2" type="text" placeholder="address line 2"
                  class="create-input">
              </div>
          </div>
          <!-- city input-->
          <div class="control-group">
              <label class="control-label">City / Town</label>
              <div class="controls">
                  <input id="city" name="city" type="text" placeholder="city" class="create-input">
                  <p class="help-block"></p>
              </div>
          </div>
          <!-- region input-->
          <div class="control-group">
              <label class="control-label">State / Province / Region</label>
              <div class="controls">
                  <input id="region" name="region" type="text" placeholder="state / province / region"
                  class="create-input">
                  <p class="help-block"></p>
              </div>
          </div>
          <!-- postal-code input-->
          <div class="control-group">
              <label class="control-label">Zip / Postal Code</label>
              <div class="controls">
                  <input id="postal-code" name="postal-code" type="text" placeholder="zip or postal code"
                  class="create-input">
                  <p class="help-block"></p>
              </div>
          </div>
          <!-- country select -->
          <div class="control-group">
              <label class="control-label">Country</label>
              <div class="controls">
                  <select id="country" name="country" class="create-input">
                      <option value="" selected="selected">(please select a country)</option>
                      <option value="AF">Afghanistan</option>
                      <option value="AL">Albania</option>
                      <option value="DZ">Algeria</option>
                      <option value="AS">American Samoa</option>
                      <option value="AD">Andorra</option>
                      <option value="AO">Angola</option>
                      <option value="AI">Anguilla</option>
                      <option value="AQ">Antarctica</option>
                      <option value="AG">Antigua and Barbuda</option>
                      <option value="AR">Argentina</option>
                      <option value="AM">Armenia</option>
                      <option value="AW">Aruba</option>
                      <option value="AU">Australia</option>
                      <option value="AT">Austria</option>
                      <option value="AZ">Azerbaijan</option>
                      <option value="BS">Bahamas</option>
                      <option value="BH">Bahrain</option>
                      <option value="BD">Bangladesh</option>
                      <option value="BB">Barbados</option>
                      <option value="BY">Belarus</option>
                      <option value="BE">Belgium</option>
                      <option value="BZ">Belize</option>
                      <option value="BJ">Benin</option>
                      <option value="BM">Bermuda</option>
                      <option value="BT">Bhutan</option>
                      <option value="BO">Bolivia</option>
                      <option value="BA">Bosnia and Herzegowina</option>
                      <option value="BW">Botswana</option>
                      <option value="BV">Bouvet Island</option>
                      <option value="BR">Brazil</option>
                      <option value="IO">British Indian Ocean Territory</option>
                      <option value="BN">Brunei Darussalam</option>
                      <option value="BG">Bulgaria</option>
                      <option value="BF">Burkina Faso</option>
                      <option value="BI">Burundi</option>
                      <option value="KH">Cambodia</option>
                      <option value="CM">Cameroon</option>
                      <option value="CA">Canada</option>
                      <option value="CV">Cape Verde</option>
                      <option value="KY">Cayman Islands</option>
                      <option value="CF">Central African Republic</option>
                      <option value="TD">Chad</option>
                      <option value="CL">Chile</option>
                      <option value="CN">China</option>
                      <option value="CX">Christmas Island</option>
                      <option value="CC">Cocos (Keeling) Islands</option>
                      <option value="CO">Colombia</option>
                      <option value="KM">Comoros</option>
                      <option value="CG">Congo</option>
                      <option value="CD">Congo, the Democratic Republic of the</option>
                      <option value="CK">Cook Islands</option>
                      <option value="CR">Costa Rica</option>
                      <option value="CI">Cote d'Ivoire</option>
                      <option value="HR">Croatia (Hrvatska)</option>
                      <option value="CU">Cuba</option>
                      <option value="CY">Cyprus</option>
                      <option value="CZ">Czech Republic</option>
                      <option value="DK">Denmark</option>
                      <option value="DJ">Djibouti</option>
                      <option value="DM">Dominica</option>
                      <option value="DO">Dominican Republic</option>
                      <option value="TP">East Timor</option>
                      <option value="EC">Ecuador</option>
                      <option value="EG">Egypt</option>
                      <option value="SV">El Salvador</option>
                      <option value="GQ">Equatorial Guinea</option>
                      <option value="ER">Eritrea</option>
                      <option value="EE">Estonia</option>
                      <option value="ET">Ethiopia</option>
                      <option value="FK">Falkland Islands (Malvinas)</option>
                      <option value="FO">Faroe Islands</option>
                      <option value="FJ">Fiji</option>
                      <option value="FI">Finland</option>
                      <option value="FR">France</option>
                      <option value="FX">France, Metropolitan</option>
                      <option value="GF">French Guiana</option>
                      <option value="PF">French Polynesia</option>
                      <option value="TF">French Southern Territories</option>
                      <option value="GA">Gabon</option>
                      <option value="GM">Gambia</option>
                      <option value="GE">Georgia</option>
                      <option value="DE">Germany</option>
                      <option value="GH">Ghana</option>
                      <option value="GI">Gibraltar</option>
                      <option value="GR">Greece</option>
                      <option value="GL">Greenland</option>
                      <option value="GD">Grenada</option>
                      <option value="GP">Guadeloupe</option>
                      <option value="GU">Guam</option>
                      <option value="GT">Guatemala</option>
                      <option value="GN">Guinea</option>
                      <option value="GW">Guinea-Bissau</option>
                      <option value="GY">Guyana</option>
                      <option value="HT">Haiti</option>
                      <option value="HM">Heard and Mc Donald Islands</option>
                      <option value="VA">Holy See (Vatican City State)</option>
                      <option value="HN">Honduras</option>
                      <option value="HK">Hong Kong</option>
                      <option value="HU">Hungary</option>
                      <option value="IS">Iceland</option>
                      <option value="IN">India</option>
                      <option value="ID">Indonesia</option>
                      <option value="IR">Iran (Islamic Republic of)</option>
                      <option value="IQ">Iraq</option>
                      <option value="IE">Ireland</option>
                      <option value="IL">Israel</option>
                      <option value="IT">Italy</option>
                      <option value="JM">Jamaica</option>
                      <option value="JP">Japan</option>
                      <option value="JO">Jordan</option>
                      <option value="KZ">Kazakhstan</option>
                      <option value="KE">Kenya</option>
                      <option value="KI">Kiribati</option>
                      <option value="KP">Korea, Democratic People's Republic of</option>
                      <option value="KR">Korea, Republic of</option>
                      <option value="KW">Kuwait</option>
                      <option value="KG">Kyrgyzstan</option>
                      <option value="LA">Lao People's Democratic Republic</option>
                      <option value="LV">Latvia</option>
                      <option value="LB">Lebanon</option>
                      <option value="LS">Lesotho</option>
                      <option value="LR">Liberia</option>
                      <option value="LY">Libyan Arab Jamahiriya</option>
                      <option value="LI">Liechtenstein</option>
                      <option value="LT">Lithuania</option>
                      <option value="LU">Luxembourg</option>
                      <option value="MO">Macau</option>
                      <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                      <option value="MG">Madagascar</option>
                      <option value="MW">Malawi</option>
                      <option value="MY">Malaysia</option>
                      <option value="MV">Maldives</option>
                      <option value="ML">Mali</option>
                      <option value="MT">Malta</option>
                      <option value="MH">Marshall Islands</option>
                      <option value="MQ">Martinique</option>
                      <option value="MR">Mauritania</option>
                      <option value="MU">Mauritius</option>
                      <option value="YT">Mayotte</option>
                      <option value="MX">Mexico</option>
                      <option value="FM">Micronesia, Federated States of</option>
                      <option value="MD">Moldova, Republic of</option>
                      <option value="MC">Monaco</option>
                      <option value="MN">Mongolia</option>
                      <option value="MS">Montserrat</option>
                      <option value="MA">Morocco</option>
                      <option value="MZ">Mozambique</option>
                      <option value="MM">Myanmar</option>
                      <option value="NA">Namibia</option>
                      <option value="NR">Nauru</option>
                      <option value="NP">Nepal</option>
                      <option value="NL">Netherlands</option>
                      <option value="AN">Netherlands Antilles</option>
                      <option value="NC">New Caledonia</option>
                      <option value="NZ">New Zealand</option>
                      <option value="NI">Nicaragua</option>
                      <option value="NE">Niger</option>
                      <option value="NG">Nigeria</option>
                      <option value="NU">Niue</option>
                      <option value="NF">Norfolk Island</option>
                      <option value="MP">Northern Mariana Islands</option>
                      <option value="NO">Norway</option>
                      <option value="OM">Oman</option>
                      <option value="PK">Pakistan</option>
                      <option value="PW">Palau</option>
                      <option value="PA">Panama</option>
                      <option value="PG">Papua New Guinea</option>
                      <option value="PY">Paraguay</option>
                      <option value="PE">Peru</option>
                      <option value="PH">Philippines</option>
                      <option value="PN">Pitcairn</option>
                      <option value="PL">Poland</option>
                      <option value="PT">Portugal</option>
                      <option value="PR">Puerto Rico</option>
                      <option value="QA">Qatar</option>
                      <option value="RE">Reunion</option>
                      <option value="RO">Romania</option>
                      <option value="RU">Russian Federation</option>
                      <option value="RW">Rwanda</option>
                      <option value="KN">Saint Kitts and Nevis</option>
                      <option value="LC">Saint LUCIA</option>
                      <option value="VC">Saint Vincent and the Grenadines</option>
                      <option value="WS">Samoa</option>
                      <option value="SM">San Marino</option>
                      <option value="ST">Sao Tome and Principe</option>
                      <option value="SA">Saudi Arabia</option>
                      <option value="SN">Senegal</option>
                      <option value="SC">Seychelles</option>
                      <option value="SL">Sierra Leone</option>
                      <option value="SG">Singapore</option>
                      <option value="SK">Slovakia (Slovak Republic)</option>
                      <option value="SI">Slovenia</option>
                      <option value="SB">Solomon Islands</option>
                      <option value="SO">Somalia</option>
                      <option value="ZA">South Africa</option>
                      <option value="GS">South Georgia and the South Sandwich Islands</option>
                      <option value="ES">Spain</option>
                      <option value="LK">Sri Lanka</option>
                      <option value="SH">St. Helena</option>
                      <option value="PM">St. Pierre and Miquelon</option>
                      <option value="SD">Sudan</option>
                      <option value="SR">Suriname</option>
                      <option value="SJ">Svalbard and Jan Mayen Islands</option>
                      <option value="SZ">Swaziland</option>
                      <option value="SE">Sweden</option>
                      <option value="CH">Switzerland</option>
                      <option value="SY">Syrian Arab Republic</option>
                      <option value="TW">Taiwan, Province of China</option>
                      <option value="TJ">Tajikistan</option>
                      <option value="TZ">Tanzania, United Republic of</option>
                      <option value="TH">Thailand</option>
                      <option value="TG">Togo</option>
                      <option value="TK">Tokelau</option>
                      <option value="TO">Tonga</option>
                      <option value="TT">Trinidad and Tobago</option>
                      <option value="TN">Tunisia</option>
                      <option value="TR">Turkey</option>
                      <option value="TM">Turkmenistan</option>
                      <option value="TC">Turks and Caicos Islands</option>
                      <option value="TV">Tuvalu</option>
                      <option value="UG">Uganda</option>
                      <option value="UA">Ukraine</option>
                      <option value="AE">United Arab Emirates</option>
                      <option value="GB">United Kingdom</option>
                      <option value="US">United States</option>
                      <option value="UM">United States Minor Outlying Islands</option>
                      <option value="UY">Uruguay</option>
                      <option value="UZ">Uzbekistan</option>
                      <option value="VU">Vanuatu</option>
                      <option value="VE">Venezuela</option>
                      <option value="VN">Viet Nam</option>
                      <option value="VG">Virgin Islands (British)</option>
                      <option value="VI">Virgin Islands (U.S.)</option>
                      <option value="WF">Wallis and Futuna Islands</option>
                      <option value="EH">Western Sahara</option>
                      <option value="YE">Yemen</option>
                      <option value="YU">Yugoslavia</option>
                      <option value="ZM">Zambia</option>
                      <option value="ZW">Zimbabwe</option>
                  </select>
              </div>
          </div>
    </section>

    <section class='create-section last'>
      <div class='input-wrapper'>
        <label for='price'>Price</label>
        <input name='price' class="create-input" type="number" required>
      </div>
    </section>

    </form>

    <div id='create-back' class='create-button back-hide clickable'>&#8592 Back</div>
    <div id='create-next' class='create-button clickable'>Next</div>
  </div>

  <div id='create-summary'>
    <h2>Summary</h2>
    <div id='create-publish'>
      Publish!
    </div>
  </div>

<script src='js/create.js'></script>

</main>
</body>
</html>
