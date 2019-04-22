@extends('user.layouts.app')
@section('title','User - Home')
@section('pagename', 'Home')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                
                @if ($getUserMeta->count() == 0 )
                <form method="POST" action="{{route('userMetaSave')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control">  
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select name="country" class="form-control"> 
                                <option value="" selected="selected">Select Country</option> 
                                <option value="United States" selected>United States</option> 
                                <option value="United Kingdom">United Kingdom</option> 
                                <option value="Afghanistan">Afghanistan</option> 
                                <option value="Albania">Albania</option> 
                                <option value="Algeria">Algeria</option> 
                                <option value="American Samoa">American Samoa</option> 
                                <option value="Andorra">Andorra</option> 
                                <option value="Angola">Angola</option> 
                                <option value="Anguilla">Anguilla</option> 
                                <option value="Antarctica">Antarctica</option> 
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                                <option value="Argentina">Argentina</option> 
                                <option value="Armenia">Armenia</option> 
                                <option value="Aruba">Aruba</option> 
                                <option value="Australia">Australia</option> 
                                <option value="Austria">Austria</option> 
                                <option value="Azerbaijan">Azerbaijan</option> 
                                <option value="Bahamas">Bahamas</option> 
                                <option value="Bahrain">Bahrain</option> 
                                <option value="Bangladesh">Bangladesh</option> 
                                <option value="Barbados">Barbados</option> 
                                <option value="Belarus">Belarus</option> 
                                <option value="Belgium">Belgium</option> 
                                <option value="Belize">Belize</option> 
                                <option value="Benin">Benin</option> 
                                <option value="Bermuda">Bermuda</option> 
                                <option value="Bhutan">Bhutan</option> 
                                <option value="Bolivia">Bolivia</option> 
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                                <option value="Botswana">Botswana</option> 
                                <option value="Bouvet Island">Bouvet Island</option> 
                                <option value="Brazil">Brazil</option> 
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                                <option value="Brunei Darussalam">Brunei Darussalam</option> 
                                <option value="Bulgaria">Bulgaria</option> 
                                <option value="Burkina Faso">Burkina Faso</option> 
                                <option value="Burundi">Burundi</option> 
                                <option value="Cambodia">Cambodia</option> 
                                <option value="Cameroon">Cameroon</option> 
                                <option value="Canada">Canada</option> 
                                <option value="Cape Verde">Cape Verde</option> 
                                <option value="Cayman Islands">Cayman Islands</option> 
                                <option value="Central African Republic">Central African Republic</option> 
                                <option value="Chad">Chad</option> 
                                <option value="Chile">Chile</option> 
                                <option value="China">China</option> 
                                <option value="Christmas Island">Christmas Island</option> 
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                                <option value="Colombia">Colombia</option> 
                                <option value="Comoros">Comoros</option> 
                                <option value="Congo">Congo</option> 
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                                <option value="Cook Islands">Cook Islands</option> 
                                <option value="Costa Rica">Costa Rica</option> 
                                <option value="Cote D'ivoire">Cote D'ivoire</option> 
                                <option value="Croatia">Croatia</option> 
                                <option value="Cuba">Cuba</option> 
                                <option value="Cyprus">Cyprus</option> 
                                <option value="Czech Republic">Czech Republic</option> 
                                <option value="Denmark">Denmark</option> 
                                <option value="Djibouti">Djibouti</option> 
                                <option value="Dominica">Dominica</option> 
                                <option value="Dominican Republic">Dominican Republic</option> 
                                <option value="Ecuador">Ecuador</option> 
                                <option value="Egypt">Egypt</option> 
                                <option value="El Salvador">El Salvador</option> 
                                <option value="Equatorial Guinea">Equatorial Guinea</option> 
                                <option value="Eritrea">Eritrea</option> 
                                <option value="Estonia">Estonia</option> 
                                <option value="Ethiopia">Ethiopia</option> 
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                                <option value="Faroe Islands">Faroe Islands</option> 
                                <option value="Fiji">Fiji</option> 
                                <option value="Finland">Finland</option> 
                                <option value="France">France</option> 
                                <option value="French Guiana">French Guiana</option> 
                                <option value="French Polynesia">French Polynesia</option> 
                                <option value="French Southern Territories">French Southern Territories</option> 
                                <option value="Gabon">Gabon</option> 
                                <option value="Gambia">Gambia</option> 
                                <option value="Georgia">Georgia</option> 
                                <option value="Germany">Germany</option> 
                                <option value="Ghana">Ghana</option> 
                                <option value="Gibraltar">Gibraltar</option> 
                                <option value="Greece">Greece</option> 
                                <option value="Greenland">Greenland</option> 
                                <option value="Grenada">Grenada</option> 
                                <option value="Guadeloupe">Guadeloupe</option> 
                                <option value="Guam">Guam</option> 
                                <option value="Guatemala">Guatemala</option> 
                                <option value="Guinea">Guinea</option> 
                                <option value="Guinea-bissau">Guinea-bissau</option> 
                                <option value="Guyana">Guyana</option> 
                                <option value="Haiti">Haiti</option> 
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                                <option value="Honduras">Honduras</option> 
                                <option value="Hong Kong">Hong Kong</option> 
                                <option value="Hungary">Hungary</option> 
                                <option value="Iceland">Iceland</option> 
                                <option value="India">India</option> 
                                <option value="Indonesia">Indonesia</option> 
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                                <option value="Iraq">Iraq</option> 
                                <option value="Ireland">Ireland</option> 
                                <option value="Israel">Israel</option> 
                                <option value="Italy">Italy</option> 
                                <option value="Jamaica">Jamaica</option> 
                                <option value="Japan">Japan</option> 
                                <option value="Jordan">Jordan</option> 
                                <option value="Kazakhstan">Kazakhstan</option> 
                                <option value="Kenya">Kenya</option> 
                                <option value="Kiribati">Kiribati</option> 
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                                <option value="Korea, Republic of">Korea, Republic of</option> 
                                <option value="Kuwait">Kuwait</option> 
                                <option value="Kyrgyzstan">Kyrgyzstan</option> 
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                                <option value="Latvia">Latvia</option> 
                                <option value="Lebanon">Lebanon</option> 
                                <option value="Lesotho">Lesotho</option> 
                                <option value="Liberia">Liberia</option> 
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                                <option value="Liechtenstein">Liechtenstein</option> 
                                <option value="Lithuania">Lithuania</option> 
                                <option value="Luxembourg">Luxembourg</option> 
                                <option value="Macao">Macao</option> 
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                                <option value="Madagascar">Madagascar</option> 
                                <option value="Malawi">Malawi</option> 
                                <option value="Malaysia">Malaysia</option> 
                                <option value="Maldives">Maldives</option> 
                                <option value="Mali">Mali</option> 
                                <option value="Malta">Malta</option> 
                                <option value="Marshall Islands">Marshall Islands</option> 
                                <option value="Martinique">Martinique</option> 
                                <option value="Mauritania">Mauritania</option> 
                                <option value="Mauritius">Mauritius</option> 
                                <option value="Mayotte">Mayotte</option> 
                                <option value="Mexico">Mexico</option> 
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                                <option value="Moldova, Republic of">Moldova, Republic of</option> 
                                <option value="Monaco">Monaco</option> 
                                <option value="Mongolia">Mongolia</option> 
                                <option value="Montserrat">Montserrat</option> 
                                <option value="Morocco">Morocco</option> 
                                <option value="Mozambique">Mozambique</option> 
                                <option value="Myanmar">Myanmar</option> 
                                <option value="Namibia">Namibia</option> 
                                <option value="Nauru">Nauru</option> 
                                <option value="Nepal">Nepal</option> 
                                <option value="Netherlands">Netherlands</option> 
                                <option value="Netherlands Antilles">Netherlands Antilles</option> 
                                <option value="New Caledonia">New Caledonia</option> 
                                <option value="New Zealand">New Zealand</option> 
                                <option value="Nicaragua">Nicaragua</option> 
                                <option value="Niger">Niger</option> 
                                <option value="Nigeria">Nigeria</option> 
                                <option value="Niue">Niue</option> 
                                <option value="Norfolk Island">Norfolk Island</option> 
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                                <option value="Norway">Norway</option> 
                                <option value="Oman">Oman</option> 
                                <option value="Pakistan">Pakistan</option> 
                                <option value="Palau">Palau</option> 
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                                <option value="Panama">Panama</option> 
                                <option value="Papua New Guinea">Papua New Guinea</option> 
                                <option value="Paraguay">Paraguay</option> 
                                <option value="Peru">Peru</option> 
                                <option value="Philippines">Philippines</option> 
                                <option value="Pitcairn">Pitcairn</option> 
                                <option value="Poland">Poland</option> 
                                <option value="Portugal">Portugal</option> 
                                <option value="Puerto Rico">Puerto Rico</option> 
                                <option value="Qatar">Qatar</option> 
                                <option value="Reunion">Reunion</option> 
                                <option value="Romania">Romania</option> 
                                <option value="Russian Federation">Russian Federation</option> 
                                <option value="Rwanda">Rwanda</option> 
                                <option value="Saint Helena">Saint Helena</option> 
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                <option value="Saint Lucia">Saint Lucia</option> 
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                                <option value="Samoa">Samoa</option> 
                                <option value="San Marino">San Marino</option> 
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                <option value="Saudi Arabia">Saudi Arabia</option> 
                                <option value="Senegal">Senegal</option> 
                                <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                                <option value="Seychelles">Seychelles</option> 
                                <option value="Sierra Leone">Sierra Leone</option> 
                                <option value="Singapore">Singapore</option> 
                                <option value="Slovakia">Slovakia</option> 
                                <option value="Slovenia">Slovenia</option> 
                                <option value="Solomon Islands">Solomon Islands</option> 
                                <option value="Somalia">Somalia</option> 
                                <option value="South Africa">South Africa</option> 
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                                <option value="Spain">Spain</option> 
                                <option value="Sri Lanka">Sri Lanka</option> 
                                <option value="Sudan">Sudan</option> 
                                <option value="Suriname">Suriname</option> 
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                                <option value="Swaziland">Swaziland</option> 
                                <option value="Sweden">Sweden</option> 
                                <option value="Switzerland">Switzerland</option> 
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                                <option value="Tajikistan">Tajikistan</option> 
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                                <option value="Thailand">Thailand</option> 
                                <option value="Timor-leste">Timor-leste</option> 
                                <option value="Togo">Togo</option> 
                                <option value="Tokelau">Tokelau</option> 
                                <option value="Tonga">Tonga</option> 
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                                <option value="Tunisia">Tunisia</option> 
                                <option value="Turkey">Turkey</option> 
                                <option value="Turkmenistan">Turkmenistan</option> 
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                                <option value="Tuvalu">Tuvalu</option> 
                                <option value="Uganda">Uganda</option> 
                                <option value="Ukraine">Ukraine</option> 
                                <option value="United Arab Emirates">United Arab Emirates</option> 
                                <option value="United Kingdom">United Kingdom</option> 
                                <option value="United States">United States</option> 
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                                <option value="Uruguay">Uruguay</option> 
                                <option value="Uzbekistan">Uzbekistan</option> 
                                <option value="Vanuatu">Vanuatu</option> 
                                <option value="Venezuela">Venezuela</option> 
                                <option value="Viet Nam">Viet Nam</option> 
                                <option value="Virgin Islands, British">Virgin Islands, British</option> 
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                                <option value="Wallis and Futuna">Wallis and Futuna</option> 
                                <option value="Western Sahara">Western Sahara</option> 
                                <option value="Yemen">Yemen</option> 
                                <option value="Zambia">Zambia</option> 
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="available_to">Availability</label>
                            <select name="available_to" class="form-control">
                                <option value="Global">Global</option>
                                <option value="Local">Local</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="fee">Fee</label>
                        <select name="fee" id="fee" class="form-control">
                            <option value="Free">Free</option>
                            <option value="Up to $250">Up to $250</option>
                            <option value="$250 - $1500">$250 - $1500</option>
                            <option value="$1500 - $5000">$1500 - $5000</option>
                            <option value="$5000 - $10,000">$5000 - $10,000</option>
                            <option value="More than $10,000">More than $10,000</option>
                        </select>
                    </div>
                
                        <input type="hidden" name="volunteer" value="Yes" class="form-control">
                
                    
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="any" selected>Any</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="why_choose">Why Choose Me - Please share a short blurb about your expertise and experience. - (250 Characters Max) </label>
                        @if ($errors->has('why_choose'))
                            <p style="color:red;">
                            {{ $errors->first('why_choose') }}
                            </p>
                        @endif
                        <textarea class="form-control" id="why_choose" name="why_choose" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio - Please share your bio below. We recommend highlighting your journey and your achievements.</label>
                        <textarea class="form-control" id="bio" name="bio" rows="7" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="profile_image">Profile Image</label>
                        <input type="file" class="form-control-file" id="profile_image" name="profile_image">
                    </div>
                    @if ($errors->has('profile_image'))
                    <span role="alert">
                    <strong class="text-danger">{{ $errors->first('profile_image') }}</strong>
                    </span>
                    @endif
                    @if (session('message'))
                    <p id="generalinfo_added" class="alert alert-success">{{session('message')}}</p>
                    @endif
                    <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Save</button>
                </form>
                
                @endif
                
                
                @foreach ($getUserMeta as $generalinfo)
                    @if ($getUserMeta->count() == 1)
                {{-- Update Form --}}
                <form method="POST" action="{{url('dashboard/generalinfo/update')}}" enctype="multipart/form-data">
                    @csrf
                    
                    <input type="hidden" name="id" value="{{$generalinfo->id}}" class="form-control">

                    <div class="form-group">
                        <label for="country">Country</label>
                        <select name="country" class="form-control"> 
                                <option value="" selected="selected">Select Country</option> 
                                <option value="United States" selected>United States</option> 
                                <option value="United Kingdom">United Kingdom</option> 
                                <option value="Afghanistan">Afghanistan</option> 
                                <option value="Albania">Albania</option> 
                                <option value="Algeria">Algeria</option> 
                                <option value="American Samoa">American Samoa</option> 
                                <option value="Andorra">Andorra</option> 
                                <option value="Angola">Angola</option> 
                                <option value="Anguilla">Anguilla</option> 
                                <option value="Antarctica">Antarctica</option> 
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                                <option value="Argentina">Argentina</option> 
                                <option value="Armenia">Armenia</option> 
                                <option value="Aruba">Aruba</option> 
                                <option value="Australia">Australia</option> 
                                <option value="Austria">Austria</option> 
                                <option value="Azerbaijan">Azerbaijan</option> 
                                <option value="Bahamas">Bahamas</option> 
                                <option value="Bahrain">Bahrain</option> 
                                <option value="Bangladesh">Bangladesh</option> 
                                <option value="Barbados">Barbados</option> 
                                <option value="Belarus">Belarus</option> 
                                <option value="Belgium">Belgium</option> 
                                <option value="Belize">Belize</option> 
                                <option value="Benin">Benin</option> 
                                <option value="Bermuda">Bermuda</option> 
                                <option value="Bhutan">Bhutan</option> 
                                <option value="Bolivia">Bolivia</option> 
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                                <option value="Botswana">Botswana</option> 
                                <option value="Bouvet Island">Bouvet Island</option> 
                                <option value="Brazil">Brazil</option> 
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                                <option value="Brunei Darussalam">Brunei Darussalam</option> 
                                <option value="Bulgaria">Bulgaria</option> 
                                <option value="Burkina Faso">Burkina Faso</option> 
                                <option value="Burundi">Burundi</option> 
                                <option value="Cambodia">Cambodia</option> 
                                <option value="Cameroon">Cameroon</option> 
                                <option value="Canada">Canada</option> 
                                <option value="Cape Verde">Cape Verde</option> 
                                <option value="Cayman Islands">Cayman Islands</option> 
                                <option value="Central African Republic">Central African Republic</option> 
                                <option value="Chad">Chad</option> 
                                <option value="Chile">Chile</option> 
                                <option value="China">China</option> 
                                <option value="Christmas Island">Christmas Island</option> 
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                                <option value="Colombia">Colombia</option> 
                                <option value="Comoros">Comoros</option> 
                                <option value="Congo">Congo</option> 
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                                <option value="Cook Islands">Cook Islands</option> 
                                <option value="Costa Rica">Costa Rica</option> 
                                <option value="Cote D'ivoire">Cote D'ivoire</option> 
                                <option value="Croatia">Croatia</option> 
                                <option value="Cuba">Cuba</option> 
                                <option value="Cyprus">Cyprus</option> 
                                <option value="Czech Republic">Czech Republic</option> 
                                <option value="Denmark">Denmark</option> 
                                <option value="Djibouti">Djibouti</option> 
                                <option value="Dominica">Dominica</option> 
                                <option value="Dominican Republic">Dominican Republic</option> 
                                <option value="Ecuador">Ecuador</option> 
                                <option value="Egypt">Egypt</option> 
                                <option value="El Salvador">El Salvador</option> 
                                <option value="Equatorial Guinea">Equatorial Guinea</option> 
                                <option value="Eritrea">Eritrea</option> 
                                <option value="Estonia">Estonia</option> 
                                <option value="Ethiopia">Ethiopia</option> 
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                                <option value="Faroe Islands">Faroe Islands</option> 
                                <option value="Fiji">Fiji</option> 
                                <option value="Finland">Finland</option> 
                                <option value="France">France</option> 
                                <option value="French Guiana">French Guiana</option> 
                                <option value="French Polynesia">French Polynesia</option> 
                                <option value="French Southern Territories">French Southern Territories</option> 
                                <option value="Gabon">Gabon</option> 
                                <option value="Gambia">Gambia</option> 
                                <option value="Georgia">Georgia</option> 
                                <option value="Germany">Germany</option> 
                                <option value="Ghana">Ghana</option> 
                                <option value="Gibraltar">Gibraltar</option> 
                                <option value="Greece">Greece</option> 
                                <option value="Greenland">Greenland</option> 
                                <option value="Grenada">Grenada</option> 
                                <option value="Guadeloupe">Guadeloupe</option> 
                                <option value="Guam">Guam</option> 
                                <option value="Guatemala">Guatemala</option> 
                                <option value="Guinea">Guinea</option> 
                                <option value="Guinea-bissau">Guinea-bissau</option> 
                                <option value="Guyana">Guyana</option> 
                                <option value="Haiti">Haiti</option> 
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                                <option value="Honduras">Honduras</option> 
                                <option value="Hong Kong">Hong Kong</option> 
                                <option value="Hungary">Hungary</option> 
                                <option value="Iceland">Iceland</option> 
                                <option value="India">India</option> 
                                <option value="Indonesia">Indonesia</option> 
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                                <option value="Iraq">Iraq</option> 
                                <option value="Ireland">Ireland</option> 
                                <option value="Israel">Israel</option> 
                                <option value="Italy">Italy</option> 
                                <option value="Jamaica">Jamaica</option> 
                                <option value="Japan">Japan</option> 
                                <option value="Jordan">Jordan</option> 
                                <option value="Kazakhstan">Kazakhstan</option> 
                                <option value="Kenya">Kenya</option> 
                                <option value="Kiribati">Kiribati</option> 
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                                <option value="Korea, Republic of">Korea, Republic of</option> 
                                <option value="Kuwait">Kuwait</option> 
                                <option value="Kyrgyzstan">Kyrgyzstan</option> 
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                                <option value="Latvia">Latvia</option> 
                                <option value="Lebanon">Lebanon</option> 
                                <option value="Lesotho">Lesotho</option> 
                                <option value="Liberia">Liberia</option> 
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                                <option value="Liechtenstein">Liechtenstein</option> 
                                <option value="Lithuania">Lithuania</option> 
                                <option value="Luxembourg">Luxembourg</option> 
                                <option value="Macao">Macao</option> 
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                                <option value="Madagascar">Madagascar</option> 
                                <option value="Malawi">Malawi</option> 
                                <option value="Malaysia">Malaysia</option> 
                                <option value="Maldives">Maldives</option> 
                                <option value="Mali">Mali</option> 
                                <option value="Malta">Malta</option> 
                                <option value="Marshall Islands">Marshall Islands</option> 
                                <option value="Martinique">Martinique</option> 
                                <option value="Mauritania">Mauritania</option> 
                                <option value="Mauritius">Mauritius</option> 
                                <option value="Mayotte">Mayotte</option> 
                                <option value="Mexico">Mexico</option> 
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                                <option value="Moldova, Republic of">Moldova, Republic of</option> 
                                <option value="Monaco">Monaco</option> 
                                <option value="Mongolia">Mongolia</option> 
                                <option value="Montserrat">Montserrat</option> 
                                <option value="Morocco">Morocco</option> 
                                <option value="Mozambique">Mozambique</option> 
                                <option value="Myanmar">Myanmar</option> 
                                <option value="Namibia">Namibia</option> 
                                <option value="Nauru">Nauru</option> 
                                <option value="Nepal">Nepal</option> 
                                <option value="Netherlands">Netherlands</option> 
                                <option value="Netherlands Antilles">Netherlands Antilles</option> 
                                <option value="New Caledonia">New Caledonia</option> 
                                <option value="New Zealand">New Zealand</option> 
                                <option value="Nicaragua">Nicaragua</option> 
                                <option value="Niger">Niger</option> 
                                <option value="Nigeria">Nigeria</option> 
                                <option value="Niue">Niue</option> 
                                <option value="Norfolk Island">Norfolk Island</option> 
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                                <option value="Norway">Norway</option> 
                                <option value="Oman">Oman</option> 
                                <option value="Pakistan">Pakistan</option> 
                                <option value="Palau">Palau</option> 
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                                <option value="Panama">Panama</option> 
                                <option value="Papua New Guinea">Papua New Guinea</option> 
                                <option value="Paraguay">Paraguay</option> 
                                <option value="Peru">Peru</option> 
                                <option value="Philippines">Philippines</option> 
                                <option value="Pitcairn">Pitcairn</option> 
                                <option value="Poland">Poland</option> 
                                <option value="Portugal">Portugal</option> 
                                <option value="Puerto Rico">Puerto Rico</option> 
                                <option value="Qatar">Qatar</option> 
                                <option value="Reunion">Reunion</option> 
                                <option value="Romania">Romania</option> 
                                <option value="Russian Federation">Russian Federation</option> 
                                <option value="Rwanda">Rwanda</option> 
                                <option value="Saint Helena">Saint Helena</option> 
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                <option value="Saint Lucia">Saint Lucia</option> 
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                                <option value="Samoa">Samoa</option> 
                                <option value="San Marino">San Marino</option> 
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                <option value="Saudi Arabia">Saudi Arabia</option> 
                                <option value="Senegal">Senegal</option> 
                                <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                                <option value="Seychelles">Seychelles</option> 
                                <option value="Sierra Leone">Sierra Leone</option> 
                                <option value="Singapore">Singapore</option> 
                                <option value="Slovakia">Slovakia</option> 
                                <option value="Slovenia">Slovenia</option> 
                                <option value="Solomon Islands">Solomon Islands</option> 
                                <option value="Somalia">Somalia</option> 
                                <option value="South Africa">South Africa</option> 
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                                <option value="Spain">Spain</option> 
                                <option value="Sri Lanka">Sri Lanka</option> 
                                <option value="Sudan">Sudan</option> 
                                <option value="Suriname">Suriname</option> 
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                                <option value="Swaziland">Swaziland</option> 
                                <option value="Sweden">Sweden</option> 
                                <option value="Switzerland">Switzerland</option> 
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                                <option value="Tajikistan">Tajikistan</option> 
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                                <option value="Thailand">Thailand</option> 
                                <option value="Timor-leste">Timor-leste</option> 
                                <option value="Togo">Togo</option> 
                                <option value="Tokelau">Tokelau</option> 
                                <option value="Tonga">Tonga</option> 
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                                <option value="Tunisia">Tunisia</option> 
                                <option value="Turkey">Turkey</option> 
                                <option value="Turkmenistan">Turkmenistan</option> 
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                                <option value="Tuvalu">Tuvalu</option> 
                                <option value="Uganda">Uganda</option> 
                                <option value="Ukraine">Ukraine</option> 
                                <option value="United Arab Emirates">United Arab Emirates</option> 
                                <option value="United Kingdom">United Kingdom</option> 
                                <option value="United States">United States</option> 
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                                <option value="Uruguay">Uruguay</option> 
                                <option value="Uzbekistan">Uzbekistan</option> 
                                <option value="Vanuatu">Vanuatu</option> 
                                <option value="Venezuela">Venezuela</option> 
                                <option value="Viet Nam">Viet Nam</option> 
                                <option value="Virgin Islands, British">Virgin Islands, British</option> 
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                                <option value="Wallis and Futuna">Wallis and Futuna</option> 
                                <option value="Western Sahara">Western Sahara</option> 
                                <option value="Yemen">Yemen</option> 
                                <option value="Zambia">Zambia</option> 
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="available_to">Availability</label>
                        <select name="available_to" class="form-control">
                            <option value="Global" {{ ($generalinfo->available_to == 'Global') ? "Selected" : " " }}>Global</option>
                            <option value="Local" {{ ($generalinfo->available_to == 'Local') ? "Selected" : " " }}>Local</option>
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <label for="fee">Fee</label>
                        <input type="text" name="fee" value="{{$generalinfo->fee}}" class="form-control">
                    </div> --}}

                    <div class="form-group">
                            <label for="fee">Fee</label>
                            <select name="fee" id="fee" class="form-control">
                                <option value="Free" {{ ($generalinfo->fee == 'Free') ? "Selected" : " " }}>Free</option>
                                <option value="Up to $250" {{ ($generalinfo->fee == 'Up to $250') ? "Selected" : " " }}>Up to $250</option>
                                <option value="$250 - $1500" {{ ($generalinfo->fee == '$250 - $1500') ? "Selected" : " " }}>$250 - $1500</option>
                                <option value="$1500 - $5000" {{ ($generalinfo->fee == '$1500 - $5000') ? "Selected" : " " }}>$1500 - $5000</option>
                                <option value="$5000 - $10,000" {{ ($generalinfo->fee == '$5000 - $10,000') ? "Selected" : " " }}>$5000 - $10,000</option>
                                <option value="More than $10,000" {{ ($generalinfo->fee == 'More than $10,000') ? "Selected" : " " }}>More than $10,000</option>
                            </select>
                    </div>

                   
                        <input type="hidden" name="volunteer" value="{{$generalinfo->volunteer}}" class="form-control">
                 
                    
                    <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="male" {{ ($generalinfo->gender == 'Male') ? "Selected" : " " }}>Male</option>
                                <option value="female" {{ ($generalinfo->gender == 'female') ? "Selected" : " " }}>Female</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="why_choose">Why Choose Me - Please share a short blurb about your expertise and experience. - (250 Characters Max) </label>
                    
                        @if ($errors->has('why_choose'))
                            <p style="color:red;">
                            {{ $errors->first('why_choose') }}
                            </p>
                        @endif
                        
                        <textarea class="form-control" id="why_choose" name="why_choose" rows="4">{{$generalinfo->why_choose}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio - Please share your bio below. We recommend highlighting your journey and your achievements.</label>
                        <textarea class="form-control" id="bio" name="bio" rows="7">{{$generalinfo->bio}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="profile_image">Profile Image</label>
                        <input type="file" class="form-control-file" id="profile_image" name="profile_image" value="{{$generalinfo->profile_img}}">
                    </div>
                    @if ($errors->has('profile_image'))
                    <span role="alert">
                    <strong class="text-danger">{{ $errors->first('profile_image') }}</strong>
                    </span>
                    @endif
                    @if (session('message'))
                    <p id="generalinfo_added" class="alert alert-success">{{session('message')}}</p>
                    @endif
                    <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Update</button>
                </form>
                @endif                
                @endforeach
            </div>

            <div class="col-md-5 offset-md-1">
                <div class="row">
                        @foreach ($getUserMeta as $generalinfo)
                    <div class="col-md-4">
                        <img src="{{asset('adminassets/img/speakerprofileimages/')}}/{{$generalinfo->profile_img}}" alt="{{$generalinfo->profile_img}}" class="img-thumbnail">
                    </div>
                    <div class="col-md-8">
                       
                    </div>    
                </div>

                <div class="row">
                    <div class="col-md-12 mt-4">
                            <strong>COUNTRY:</strong> {{$generalinfo->country}} <br><br>
                            <strong>FEE:</strong> {{$generalinfo->fee}}<br><br>
                            <strong>Availability:</strong> {{$generalinfo->available_to}} <br><br>
                       <h5><strong>Why Choose:</strong> </h5> 
                       <p>{{$generalinfo->why_choose}}</p>
                       <h5><strong>Bio:</strong></h5>
                       <p>{{$generalinfo->bio}}</p>
                    </div>
                </div>


                @endforeach
                
            </div>
        </div>
    </div>
    

@endsection



@section('scripts')
<script>

$(document).ready(function(){
    $("#generalinfo_added").delay(1500).slideUp(300);
    $("#generalinfo_deleted").delay(1500).slideUp(300);
});

</script>
@endsection