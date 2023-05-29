
<div class="footer pt-3 pb-1 bg-dark mt-5">
<div class="container-fluid">
<p class="text-center text-warning">
Snapshot Tours and Safaris <br> Explore Unlimited!

</p>
</div>
</div>




<!-- MODALS-->
<!-- type="button" data-toggle="modal" data-target="#specificdest"-->

<!-- Specific destination-->

<div class="modal fade" id="specificdest" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="destModalTitle">Destination</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="destModalBody">itinerary</div>
          <input type="hidden" id="destModalId">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary float-left" id="destBookModal">Book this Package</button>
          <button type="button" class="btn border border-primary float-left" id="customBookModal">Get a Customized Package</button>
        </div>
      </div>
    </div>
  </div>



  <!-- Book Specific destination-->

<div class="modal fade" id="bookdest" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="destModalTitle">Book for Package</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="book_dest">
          <div class="row">
            <div class="col-sm-6 my-2">
              <input class="form-control" placeholder="Name" name="name" required>
            </div>
            
            <div class="col-sm-6 my-2">
              <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
            
            <div class="col-sm-6 my-2">
              <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
            </div>
            
            <div class="col-sm-6 my-2">
              <select class="form-control" placeholder="Country of Residence" name="country" required>
                <option value="0">Country Of Residence</option><option value="Aruba">Aruba</option><option value="Afghanistan">Afghanistan</option><option value="Angola">Angola</option><option value="Albania">Albania</option><option value="Andorra">Andorra</option><option value="United Arab Emirates">United Arab Emirates</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="American Samoa">American Samoa</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Burundi">Burundi</option><option value="Belgium">Belgium</option><option value="Benin">Benin</option><option value="Burkina Faso">Burkina Faso</option><option value="Bangladesh">Bangladesh</option><option value="Bulgaria">Bulgaria</option><option value="Bahrain">Bahrain</option><option value="Bahamas">Bahamas</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Belarus">Belarus</option><option value="Belize">Belize</option><option value="Bermuda">Bermuda</option><option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option><option value="Brazil">Brazil</option><option value="Barbados">Barbados</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bhutan">Bhutan</option><option value="Botswana">Botswana</option><option value="Central African Republic">Central African Republic</option><option value="Canada">Canada</option><option value="Switzerland">Switzerland</option><option value="Chile">Chile</option><option value="China">China</option><option value="Côte d’Ivoire">Côte d’Ivoire</option><option value="Cameroon">Cameroon</option><option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option><option value="Congo">Congo</option><option value="Cook Islands">Cook Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Cape Verde">Cape Verde</option><option value="Costa Rica">Costa Rica</option><option value="Cuba">Cuba</option><option value="Cayman Islands">Cayman Islands</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Germany">Germany</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Denmark">Denmark</option><option value="Dominican Republic">Dominican Republic</option><option value="Algeria">Algeria</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="Eritrea">Eritrea</option><option value="Spain">Spain</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Finland">Finland</option><option value="Fiji">Fiji</option><option value="France">France</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Gabon">Gabon</option><option value="United Kingdom">United Kingdom</option><option value="Georgia">Georgia</option><option value="Ghana">Ghana</option><option value="Guinea">Guinea</option><option value="Gambia">Gambia</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guam">Guam</option><option value="Guyana">Guyana</option><option value="Hong Kong">Hong Kong</option><option value="Honduras">Honduras</option><option value="Croatia">Croatia</option><option value="Haiti">Haiti</option><option value="Hungary">Hungary</option><option value="Indonesia">Indonesia</option><option value="India">India</option><option value="Ireland">Ireland</option><option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option><option value="Iraq">Iraq</option><option value="Iceland">Iceland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Jordan">Jordan</option><option value="Japan">Japan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Cambodia">Cambodia</option><option value="Kiribati">Kiribati</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kuwait">Kuwait</option><option value="Lao People’s Democratic Republic">Lao People’s Democratic Republic</option><option value="Lebanon">Lebanon</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Saint Lucia">Saint Lucia</option><option value="Liechtenstein">Liechtenstein</option><option value="Sri Lanka">Sri Lanka</option><option value="Lesotho">Lesotho</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Latvia">Latvia</option><option value="Morocco">Morocco</option><option value="Monaco">Monaco</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Madagascar">Madagascar</option><option value="Maldives">Maldives</option><option value="Mexico">Mexico</option><option value="Marshall Islands">Marshall Islands</option><option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Myanmar">Myanmar</option><option value="Montenegro">Montenegro</option><option value="Mongolia">Mongolia</option><option value="Mozambique">Mozambique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Namibia">Namibia</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Nicaragua">Nicaragua</option><option value="Netherlands">Netherlands</option><option value="Norway">Norway</option><option value="Nepal">Nepal</option><option value="Nauru">Nauru</option><option value="New Zealand">New Zealand</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Panama">Panama</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Palau">Palau</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Poland">Poland</option><option value="Puerto Rico">Puerto Rico</option><option value="Korea, Democratic People’s Republic of">Korea, Democratic People’s Republic of</option><option value="Portugal">Portugal</option><option value="Paraguay">Paraguay</option><option value="Palestine, State of">Palestine, State of</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Sudan">Sudan</option><option value="Senegal">Senegal</option><option value="Singapore">Singapore</option><option value="Solomon Islands">Solomon Islands</option><option value="Sierra Leone">Sierra Leone</option><option value="El Salvador">El Salvador</option><option value="San Marino">San Marino</option><option value="Somalia">Somalia</option><option value="Serbia">Serbia</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Suriname">Suriname</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Sweden">Sweden</option><option value="Swaziland">Swaziland</option><option value="Seychelles">Seychelles</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Chad">Chad</option><option value="Togo">Togo</option><option value="Thailand">Thailand</option><option value="Tajikistan">Tajikistan</option><option value="Turkmenistan">Turkmenistan</option><option value="Timor-Leste">Timor-Leste</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Tuvalu">Tuvalu</option><option value="Taiwan, Province of China">Taiwan, Province of China</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="Uruguay">Uruguay</option><option value="United States">United States</option><option value="Uzbekistan">Uzbekistan</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option><option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option value="Viet Nam">Viet Nam</option><option value="Vanuatu">Vanuatu</option><option value="Samoa">Samoa</option><option value="Yemen">Yemen</option><option value="South Africa">South Africa</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
              </select>
            </div>
            
            <div class="col-12 my-2">
              <input class="form-control" placeholder="Destination" id="destModaldest" required readonly>
              <input type="hidden" name="book_specific_dest" id="bookdestId">
            </div>

            <div class="col-sm-6 my-2">
              <input type="number" class="form-control" placeholder="No. of People" name="people" required>
            </div>

            <div class="col-sm-6 my-2">
              <input type="text" onfocus="(this.type='date')"   onblur="(this.type='text')" min="<?php echo date("Y-m-d");?>" class="form-control" placeholder="Date of Travel" name="dateT" required>
            </div>

            <div class="col-12 my-2">
              <textarea rows="5" class="form-control" name="comment" placeholder="Any suggestions, preferences, meals, activities..." ></textarea>
            </div>

            <div class="text-center col-12" id="bookdestsuccess"></div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary float-left" id="book_dest_btn">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>



<!-- Book Customized -->

<div class="modal fade" id="bookcustom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="destModalTitle">Get a Customized Package</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="book_cust">
          <div class="row">
            <div class="col-sm-6 my-2">
              <input class="form-control" placeholder="Name" name="name" required>
            </div>
            
            <div class="col-sm-6 my-2">
              <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
            
            <div class="col-sm-6 my-2">
              <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
            </div>
            
            <div class="col-sm-6 my-2">
              <select class="form-control" placeholder="Country of Residence" name="country" required>
                <option value="0">Country Of Residence</option><option value="Aruba">Aruba</option><option value="Afghanistan">Afghanistan</option><option value="Angola">Angola</option><option value="Albania">Albania</option><option value="Andorra">Andorra</option><option value="United Arab Emirates">United Arab Emirates</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="American Samoa">American Samoa</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Burundi">Burundi</option><option value="Belgium">Belgium</option><option value="Benin">Benin</option><option value="Burkina Faso">Burkina Faso</option><option value="Bangladesh">Bangladesh</option><option value="Bulgaria">Bulgaria</option><option value="Bahrain">Bahrain</option><option value="Bahamas">Bahamas</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Belarus">Belarus</option><option value="Belize">Belize</option><option value="Bermuda">Bermuda</option><option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option><option value="Brazil">Brazil</option><option value="Barbados">Barbados</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bhutan">Bhutan</option><option value="Botswana">Botswana</option><option value="Central African Republic">Central African Republic</option><option value="Canada">Canada</option><option value="Switzerland">Switzerland</option><option value="Chile">Chile</option><option value="China">China</option><option value="Côte d’Ivoire">Côte d’Ivoire</option><option value="Cameroon">Cameroon</option><option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option><option value="Congo">Congo</option><option value="Cook Islands">Cook Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Cape Verde">Cape Verde</option><option value="Costa Rica">Costa Rica</option><option value="Cuba">Cuba</option><option value="Cayman Islands">Cayman Islands</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Germany">Germany</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Denmark">Denmark</option><option value="Dominican Republic">Dominican Republic</option><option value="Algeria">Algeria</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="Eritrea">Eritrea</option><option value="Spain">Spain</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Finland">Finland</option><option value="Fiji">Fiji</option><option value="France">France</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Gabon">Gabon</option><option value="United Kingdom">United Kingdom</option><option value="Georgia">Georgia</option><option value="Ghana">Ghana</option><option value="Guinea">Guinea</option><option value="Gambia">Gambia</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guam">Guam</option><option value="Guyana">Guyana</option><option value="Hong Kong">Hong Kong</option><option value="Honduras">Honduras</option><option value="Croatia">Croatia</option><option value="Haiti">Haiti</option><option value="Hungary">Hungary</option><option value="Indonesia">Indonesia</option><option value="India">India</option><option value="Ireland">Ireland</option><option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option><option value="Iraq">Iraq</option><option value="Iceland">Iceland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Jordan">Jordan</option><option value="Japan">Japan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Cambodia">Cambodia</option><option value="Kiribati">Kiribati</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kuwait">Kuwait</option><option value="Lao People’s Democratic Republic">Lao People’s Democratic Republic</option><option value="Lebanon">Lebanon</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Saint Lucia">Saint Lucia</option><option value="Liechtenstein">Liechtenstein</option><option value="Sri Lanka">Sri Lanka</option><option value="Lesotho">Lesotho</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Latvia">Latvia</option><option value="Morocco">Morocco</option><option value="Monaco">Monaco</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Madagascar">Madagascar</option><option value="Maldives">Maldives</option><option value="Mexico">Mexico</option><option value="Marshall Islands">Marshall Islands</option><option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Myanmar">Myanmar</option><option value="Montenegro">Montenegro</option><option value="Mongolia">Mongolia</option><option value="Mozambique">Mozambique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Namibia">Namibia</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Nicaragua">Nicaragua</option><option value="Netherlands">Netherlands</option><option value="Norway">Norway</option><option value="Nepal">Nepal</option><option value="Nauru">Nauru</option><option value="New Zealand">New Zealand</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Panama">Panama</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Palau">Palau</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Poland">Poland</option><option value="Puerto Rico">Puerto Rico</option><option value="Korea, Democratic People’s Republic of">Korea, Democratic People’s Republic of</option><option value="Portugal">Portugal</option><option value="Paraguay">Paraguay</option><option value="Palestine, State of">Palestine, State of</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Sudan">Sudan</option><option value="Senegal">Senegal</option><option value="Singapore">Singapore</option><option value="Solomon Islands">Solomon Islands</option><option value="Sierra Leone">Sierra Leone</option><option value="El Salvador">El Salvador</option><option value="San Marino">San Marino</option><option value="Somalia">Somalia</option><option value="Serbia">Serbia</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Suriname">Suriname</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Sweden">Sweden</option><option value="Swaziland">Swaziland</option><option value="Seychelles">Seychelles</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Chad">Chad</option><option value="Togo">Togo</option><option value="Thailand">Thailand</option><option value="Tajikistan">Tajikistan</option><option value="Turkmenistan">Turkmenistan</option><option value="Timor-Leste">Timor-Leste</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Tuvalu">Tuvalu</option><option value="Taiwan, Province of China">Taiwan, Province of China</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="Uruguay">Uruguay</option><option value="United States">United States</option><option value="Uzbekistan">Uzbekistan</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option><option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option value="Viet Nam">Viet Nam</option><option value="Vanuatu">Vanuatu</option><option value="Samoa">Samoa</option><option value="Yemen">Yemen</option><option value="South Africa">South Africa</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
              </select>
            </div>
            
            <div class="col-sm-6 my-2">
              <input class="form-control" placeholder="Place of Travel" name="book_custom_dest" required>
            </div>

            <div class="col-sm-6 my-2">
              <input type="number" class="form-control" placeholder="No. of Nights" name="nights" required>
            </div>

            <div class="col-sm-6 my-2">
              <input type="number" class="form-control" placeholder="No. of People" name="people" required>
            </div>

            <div class="col-sm-6 my-2">
              <input type="text" onfocus="(this.type='date')"   onblur="(this.type='text')"  min="<?php echo date("Y-m-d");?>" class="form-control" placeholder="Date of Travel" name="dateT" required>
            </div>

            <div class="col-12 my-2">
              <textarea rows="5" class="form-control" name="comment" placeholder="Any suggestions, preferences, meals, activities..." ></textarea>
            </div>

            <div class="text-center col-12" id="bookcustsuccess"></div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary float-left" id="book_cust_btn">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>


<!-- Book Flight -->

<div class="modal fade" id="bookflight" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="destModalTitle">Book Your Next Flight</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="book_flight">
          <div class="row">
            <div class="col-sm-6 my-2">
              <input class="form-control" placeholder="Name" name="name" required>
            </div>
            
            <div class="col-sm-6 my-2">
              <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
            
            <div class="col-sm-6 my-2">
              <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
            </div>
            
            <div class="col-sm-6 my-2">
              <select class="form-control" placeholder="Country of Residence" name="country" required>
                <option value="0">Country Of Residence</option><option value="Aruba">Aruba</option><option value="Afghanistan">Afghanistan</option><option value="Angola">Angola</option><option value="Albania">Albania</option><option value="Andorra">Andorra</option><option value="United Arab Emirates">United Arab Emirates</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="American Samoa">American Samoa</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Burundi">Burundi</option><option value="Belgium">Belgium</option><option value="Benin">Benin</option><option value="Burkina Faso">Burkina Faso</option><option value="Bangladesh">Bangladesh</option><option value="Bulgaria">Bulgaria</option><option value="Bahrain">Bahrain</option><option value="Bahamas">Bahamas</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Belarus">Belarus</option><option value="Belize">Belize</option><option value="Bermuda">Bermuda</option><option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option><option value="Brazil">Brazil</option><option value="Barbados">Barbados</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bhutan">Bhutan</option><option value="Botswana">Botswana</option><option value="Central African Republic">Central African Republic</option><option value="Canada">Canada</option><option value="Switzerland">Switzerland</option><option value="Chile">Chile</option><option value="China">China</option><option value="Côte d’Ivoire">Côte d’Ivoire</option><option value="Cameroon">Cameroon</option><option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option><option value="Congo">Congo</option><option value="Cook Islands">Cook Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Cape Verde">Cape Verde</option><option value="Costa Rica">Costa Rica</option><option value="Cuba">Cuba</option><option value="Cayman Islands">Cayman Islands</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Germany">Germany</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Denmark">Denmark</option><option value="Dominican Republic">Dominican Republic</option><option value="Algeria">Algeria</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="Eritrea">Eritrea</option><option value="Spain">Spain</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Finland">Finland</option><option value="Fiji">Fiji</option><option value="France">France</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Gabon">Gabon</option><option value="United Kingdom">United Kingdom</option><option value="Georgia">Georgia</option><option value="Ghana">Ghana</option><option value="Guinea">Guinea</option><option value="Gambia">Gambia</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guam">Guam</option><option value="Guyana">Guyana</option><option value="Hong Kong">Hong Kong</option><option value="Honduras">Honduras</option><option value="Croatia">Croatia</option><option value="Haiti">Haiti</option><option value="Hungary">Hungary</option><option value="Indonesia">Indonesia</option><option value="India">India</option><option value="Ireland">Ireland</option><option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option><option value="Iraq">Iraq</option><option value="Iceland">Iceland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Jordan">Jordan</option><option value="Japan">Japan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Cambodia">Cambodia</option><option value="Kiribati">Kiribati</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kuwait">Kuwait</option><option value="Lao People’s Democratic Republic">Lao People’s Democratic Republic</option><option value="Lebanon">Lebanon</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Saint Lucia">Saint Lucia</option><option value="Liechtenstein">Liechtenstein</option><option value="Sri Lanka">Sri Lanka</option><option value="Lesotho">Lesotho</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Latvia">Latvia</option><option value="Morocco">Morocco</option><option value="Monaco">Monaco</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Madagascar">Madagascar</option><option value="Maldives">Maldives</option><option value="Mexico">Mexico</option><option value="Marshall Islands">Marshall Islands</option><option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Myanmar">Myanmar</option><option value="Montenegro">Montenegro</option><option value="Mongolia">Mongolia</option><option value="Mozambique">Mozambique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Namibia">Namibia</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Nicaragua">Nicaragua</option><option value="Netherlands">Netherlands</option><option value="Norway">Norway</option><option value="Nepal">Nepal</option><option value="Nauru">Nauru</option><option value="New Zealand">New Zealand</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Panama">Panama</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Palau">Palau</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Poland">Poland</option><option value="Puerto Rico">Puerto Rico</option><option value="Korea, Democratic People’s Republic of">Korea, Democratic People’s Republic of</option><option value="Portugal">Portugal</option><option value="Paraguay">Paraguay</option><option value="Palestine, State of">Palestine, State of</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Sudan">Sudan</option><option value="Senegal">Senegal</option><option value="Singapore">Singapore</option><option value="Solomon Islands">Solomon Islands</option><option value="Sierra Leone">Sierra Leone</option><option value="El Salvador">El Salvador</option><option value="San Marino">San Marino</option><option value="Somalia">Somalia</option><option value="Serbia">Serbia</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Suriname">Suriname</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Sweden">Sweden</option><option value="Swaziland">Swaziland</option><option value="Seychelles">Seychelles</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Chad">Chad</option><option value="Togo">Togo</option><option value="Thailand">Thailand</option><option value="Tajikistan">Tajikistan</option><option value="Turkmenistan">Turkmenistan</option><option value="Timor-Leste">Timor-Leste</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Tuvalu">Tuvalu</option><option value="Taiwan, Province of China">Taiwan, Province of China</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="Uruguay">Uruguay</option><option value="United States">United States</option><option value="Uzbekistan">Uzbekistan</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option><option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option value="Viet Nam">Viet Nam</option><option value="Vanuatu">Vanuatu</option><option value="Samoa">Samoa</option><option value="Yemen">Yemen</option><option value="South Africa">South Africa</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
              </select>
            </div>
            
            <div class="col-sm-6 my-2">
              <input class="form-control" placeholder="Travelling From" name="book_flight" required>
            </div>

            <div class="col-sm-6 my-2">
              <input type="text" class="form-control" placeholder="Travelling To" name="to" required>
            </div>

            <div class="col-sm-6 my-2">
              <input type="number" class="form-control" placeholder="No. of People" name="people" required>
            </div>

            <div class="col-sm-6 my-2">
              <input type="text" onfocus="(this.type='date')"   onblur="(this.type='text')"  min="<?php echo date("Y-m-d");?>" class="form-control" placeholder="Date of Travel" name="dateT" required>
            </div>

            <div class="col-12 my-2">
              <textarea rows="5" class="form-control" name="comment" placeholder="Any suggestions, preferences, meals, activities..." ></textarea>
            </div>

            <div class="text-center col-12" id="bookflightsuccess"></div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary float-left" id="book_flight_btn">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>



<!-- Book Transport -->

<div class="modal fade" id="booktransport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="destModalTitle">Get a Ride</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="book_transport">
          <div class="row">
            <div class="col-sm-6 my-2">
              <input class="form-control" placeholder="Name" name="name" required>
            </div>
            
            <div class="col-sm-6 my-2">
              <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
            
            <div class="col-sm-6 my-2">
              <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
            </div>
            
            <div class="col-sm-6 my-2">
              <select class="form-control" placeholder="Country of Residence" name="country" required>
                <option value="0">Country Of Residence</option><option value="Aruba">Aruba</option><option value="Afghanistan">Afghanistan</option><option value="Angola">Angola</option><option value="Albania">Albania</option><option value="Andorra">Andorra</option><option value="United Arab Emirates">United Arab Emirates</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="American Samoa">American Samoa</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Burundi">Burundi</option><option value="Belgium">Belgium</option><option value="Benin">Benin</option><option value="Burkina Faso">Burkina Faso</option><option value="Bangladesh">Bangladesh</option><option value="Bulgaria">Bulgaria</option><option value="Bahrain">Bahrain</option><option value="Bahamas">Bahamas</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Belarus">Belarus</option><option value="Belize">Belize</option><option value="Bermuda">Bermuda</option><option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option><option value="Brazil">Brazil</option><option value="Barbados">Barbados</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bhutan">Bhutan</option><option value="Botswana">Botswana</option><option value="Central African Republic">Central African Republic</option><option value="Canada">Canada</option><option value="Switzerland">Switzerland</option><option value="Chile">Chile</option><option value="China">China</option><option value="Côte d’Ivoire">Côte d’Ivoire</option><option value="Cameroon">Cameroon</option><option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option><option value="Congo">Congo</option><option value="Cook Islands">Cook Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Cape Verde">Cape Verde</option><option value="Costa Rica">Costa Rica</option><option value="Cuba">Cuba</option><option value="Cayman Islands">Cayman Islands</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Germany">Germany</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Denmark">Denmark</option><option value="Dominican Republic">Dominican Republic</option><option value="Algeria">Algeria</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="Eritrea">Eritrea</option><option value="Spain">Spain</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Finland">Finland</option><option value="Fiji">Fiji</option><option value="France">France</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Gabon">Gabon</option><option value="United Kingdom">United Kingdom</option><option value="Georgia">Georgia</option><option value="Ghana">Ghana</option><option value="Guinea">Guinea</option><option value="Gambia">Gambia</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guam">Guam</option><option value="Guyana">Guyana</option><option value="Hong Kong">Hong Kong</option><option value="Honduras">Honduras</option><option value="Croatia">Croatia</option><option value="Haiti">Haiti</option><option value="Hungary">Hungary</option><option value="Indonesia">Indonesia</option><option value="India">India</option><option value="Ireland">Ireland</option><option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option><option value="Iraq">Iraq</option><option value="Iceland">Iceland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Jordan">Jordan</option><option value="Japan">Japan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Cambodia">Cambodia</option><option value="Kiribati">Kiribati</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kuwait">Kuwait</option><option value="Lao People’s Democratic Republic">Lao People’s Democratic Republic</option><option value="Lebanon">Lebanon</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Saint Lucia">Saint Lucia</option><option value="Liechtenstein">Liechtenstein</option><option value="Sri Lanka">Sri Lanka</option><option value="Lesotho">Lesotho</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Latvia">Latvia</option><option value="Morocco">Morocco</option><option value="Monaco">Monaco</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Madagascar">Madagascar</option><option value="Maldives">Maldives</option><option value="Mexico">Mexico</option><option value="Marshall Islands">Marshall Islands</option><option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Myanmar">Myanmar</option><option value="Montenegro">Montenegro</option><option value="Mongolia">Mongolia</option><option value="Mozambique">Mozambique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Namibia">Namibia</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Nicaragua">Nicaragua</option><option value="Netherlands">Netherlands</option><option value="Norway">Norway</option><option value="Nepal">Nepal</option><option value="Nauru">Nauru</option><option value="New Zealand">New Zealand</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Panama">Panama</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Palau">Palau</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Poland">Poland</option><option value="Puerto Rico">Puerto Rico</option><option value="Korea, Democratic People’s Republic of">Korea, Democratic People’s Republic of</option><option value="Portugal">Portugal</option><option value="Paraguay">Paraguay</option><option value="Palestine, State of">Palestine, State of</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Sudan">Sudan</option><option value="Senegal">Senegal</option><option value="Singapore">Singapore</option><option value="Solomon Islands">Solomon Islands</option><option value="Sierra Leone">Sierra Leone</option><option value="El Salvador">El Salvador</option><option value="San Marino">San Marino</option><option value="Somalia">Somalia</option><option value="Serbia">Serbia</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Suriname">Suriname</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Sweden">Sweden</option><option value="Swaziland">Swaziland</option><option value="Seychelles">Seychelles</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Chad">Chad</option><option value="Togo">Togo</option><option value="Thailand">Thailand</option><option value="Tajikistan">Tajikistan</option><option value="Turkmenistan">Turkmenistan</option><option value="Timor-Leste">Timor-Leste</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Tuvalu">Tuvalu</option><option value="Taiwan, Province of China">Taiwan, Province of China</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="Uruguay">Uruguay</option><option value="United States">United States</option><option value="Uzbekistan">Uzbekistan</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option><option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option value="Viet Nam">Viet Nam</option><option value="Vanuatu">Vanuatu</option><option value="Samoa">Samoa</option><option value="Yemen">Yemen</option><option value="South Africa">South Africa</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
              </select>
            </div>
            
            <div class="col-sm-12 my-2">
              <select class="form-control" placeholder="Choose a Vehicle" name="book_transport" required>
                <option value="0">Choose a Vehicle</option>
                <option value="Land Cruiser">Land Cruiser (Luxury)</option>
                <option value="Tour Van">Tour Van </option>
                <option value="Tour Bus">Tour Bus</option>
              </select>
            </div>

            <div class="col-sm-6 my-2">
              <input type="text" onfocus="(this.type='date')"   onblur="(this.type='text')"  min="<?php echo date("Y-m-d");?>"  class="form-control" placeholder="Date of Travel" name="dateT" required>
            </div>

            <div class="col-sm-6 my-2">
              <input type="number" class="form-control" placeholder="No. of Days" name="days" required>
            </div>

            <div class="col-12 my-2">
              <textarea rows="5" class="form-control" name="comment" placeholder="Any suggestions, preferences, meals, activities..." ></textarea>
            </div>

            <div class="text-center col-12" id="booktransportsuccess"></div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary float-left" id="book_transport_btn">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>



<!-- Book Corporate -->

<div class="modal fade" id="bookcoop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="destModalTitle">Book a Corporate Activity</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="book_coop">
          <div class="row">
            <div class="col-sm-6 my-2">
              <input class="form-control" placeholder="Name/Organisation" name="name" required>
            </div>
            
            <div class="col-sm-6 my-2">
              <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
            
            <div class="col-sm-6 my-2">
              <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
            </div>
                        
            <div class="col-sm-12 my-2">
              <select class="form-control coop-type" placeholder="Choose a Corporate Activity" name="book_coop" required>
                <option value="0">Choose a Corporate Activity</option>
                <?php if($typ){ ?>
                <option value="1" <?php if($typ == 1){echo 'selected';}?> >Team Building</option>
                <option value="2" <?php if($typ == 2){echo 'selected';}?> >Employee Training </option>
                <?php }else{?>
                  <option value="1" >Team Building</option>
                <option value="2" >Employee Training </option>
                <?php }?>
              </select>
            </div>

            <div class="col-sm-6 my-2">
              <input type="text" onfocus="(this.type='date')"   onblur="(this.type='text')"  min="<?php echo date("Y-m-d");?>"  class="form-control" placeholder="Date of Event" name="dateT" required>
            </div>

            <div class="col-sm-6 my-2">
              <input type="number" class="form-control" placeholder="No. of People" name="people" required>
            </div>

            <div class="col-12 my-2">
              <textarea rows="5" class="form-control" name="comment" placeholder="Any suggestions, preferences, meals, activities..." ></textarea>
            </div>

            <div class="text-center col-12" id="bookcoopsuccess"></div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary float-left" id="book_coop_btn">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>