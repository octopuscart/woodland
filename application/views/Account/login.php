<?php
$this->load->view('layout/header');
?>
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-area">
                    <h1>My Account</h1>
                    <ul>
                        <li><a href="#">Home</a> /</li>
                        <li>Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Login Registration Page Area Start Here -->
<div class="login-registration-page-area" style="padding: 20px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                if ($next_link === 'checkoutInit') {
                    ?>
                    <h5  class="text-center">
                        <a href="<?php echo site_url("CartGuest/checkoutInit"); ?>" class="btn  btn btn-danger">
                            <i class=" fa fa-user"></i> Checkout As Guest <i class="fa fa-arrow-right"></i>
                        </a>
                    </h5>
                    <h3  class="text-center">Or</h3>
                    <?php
                }
                ?>
                <h5 class="text-center">  By creating an account with our store, you will be able to move through
                    the checkout process faster, store multiple shipping addresses,
                    view and track your orders in your account and more.
                </h5>
            </div>
            <?php
            if ($msg) {
                ?>
                <div class="col-md-12">
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i> </span></button>
                        <i class="fa fa-exclamation-triangle "></i> <?php echo $msg; ?>
                    </div>
                </div>
                <?php
            }
            ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="login-registration-field">
                    <h2 class="cart-area-title">Login</h2>
                    <form method="post" action="#">
                        <label>Email address *</label>
                        <input type="email" name="email" placeholder="Email " required=""/>
                        <label>Password *</label>
                        <input type="password" name="password" placeholder="Password *" required=""/>

                        <button class="btn-send-message disabled" name="signIn" type="submit" value="signIn">Login</button>
                        <!--<span><input type="checkbox" name="remember"/>Remember Me</span>-->
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="login-registration-field">
                    <h2 class="cart-area-title">Register</h2>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Last Name *</label>
                                <input type="text" name="last_name" placeholder="Last Name *" required="">
                            </div>
                            <div class="col-md-6">
                                <label>First Name *</label>
                                <input type="text" name="first_name" placeholder="First Name *" required="">
                            </div>
                        </div>
                        <label>Email address *</label>
                        <input type="email" name="email" placeholder="Email *" required="">

                        <div class="row">
                            <div class="col-md-6">
                                <label>Password *</label>
                                <input type="password" class="pass" name="password" placeholder="Password" required="">

                            </div>
                            <div class="col-md-6">
                                <label>Confirm Password *</label>
                                <input type="password" class="con_pass" name="con_password" placeholder="Confirm Password" required="">

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <label>Gender *</label>
                                <select name="gender" id="gender"    required >
                                    <option value="Male" >Male</option>
                                    <option value="Female" >Female</option>
                                </select>


                            </div>
                            <div class="col-md-6">
                                <input type="hidden" name="birth_date" id="birth_date" value="{{birth_year}}-{{birth_month}}-{{date_birth}}"> 
                                <label>Date Of Birth *</label>
                                <select id="birth_year" name="birth_year" ng-model="birth_year" class="r_corners bg_light w_full border_none bith_date_select_year"  required >
                                    <option value="" >-YYYY-</option>
                                    <option value="1920" >1920</option>
                                    <option value="1921" >1921</option>
                                    <option value="1922" >1922</option>
                                    <option value="1923" >1923</option>
                                    <option value="1924" >1924</option>
                                    <option value="1925" >1925</option>
                                    <option value="1926" >1926</option>
                                    <option value="1927" >1927</option>
                                    <option value="1928" >1928</option>
                                    <option value="1929" >1929</option>
                                    <option value="1930" >1930</option>
                                    <option value="1931" >1931</option>
                                    <option value="1932" >1932</option>
                                    <option value="1933" >1933</option>
                                    <option value="1934" >1934</option>
                                    <option value="1935" >1935</option>
                                    <option value="1936" >1936</option>
                                    <option value="1937" >1937</option>
                                    <option value="1938" >1938</option>
                                    <option value="1939" >1939</option>
                                    <option value="1940" >1940</option>
                                    <option value="1941" >1941</option>
                                    <option value="1942" >1942</option>
                                    <option value="1943" >1943</option>
                                    <option value="1944" >1944</option>
                                    <option value="1945" >1945</option>
                                    <option value="1946" >1946</option>
                                    <option value="1947" >1947</option>
                                    <option value="1948" >1948</option>
                                    <option value="1949" >1949</option>
                                    <option value="1950" >1950</option>
                                    <option value="1951" >1951</option>
                                    <option value="1952" >1952</option>
                                    <option value="1953" >1953</option>
                                    <option value="1954" >1954</option>
                                    <option value="1955" >1955</option>
                                    <option value="1956" >1956</option>
                                    <option value="1957" >1957</option>
                                    <option value="1958" >1958</option>
                                    <option value="1959" >1959</option>
                                    <option value="1960" >1960</option>
                                    <option value="1961" >1961</option>
                                    <option value="1962" >1962</option>
                                    <option value="1963" >1963</option>
                                    <option value="1964" >1964</option>
                                    <option value="1965" >1965</option>
                                    <option value="1966" >1966</option>
                                    <option value="1967" >1967</option>
                                    <option value="1968" >1968</option>
                                    <option value="1969" >1969</option>
                                    <option value="1970" >1970</option>
                                    <option value="1971" >1971</option>
                                    <option value="1972" >1972</option>
                                    <option value="1973" >1973</option>
                                    <option value="1974" >1974</option>
                                    <option value="1975" >1975</option>
                                    <option value="1976" >1976</option>
                                    <option value="1977" >1977</option>
                                    <option value="1978" >1978</option>
                                    <option value="1979" >1979</option>
                                    <option value="1980" >1980</option>
                                    <option value="1981" >1981</option>
                                    <option value="1982" >1982</option>
                                    <option value="1983" >1983</option>
                                    <option value="1984" >1984</option>
                                    <option value="1985" >1985</option>
                                    <option value="1986" >1986</option>
                                    <option value="1987" >1987</option>
                                    <option value="1988" >1988</option>
                                    <option value="1989" >1989</option>
                                    <option value="1990" >1990</option>
                                    <option value="1991" >1991</option>
                                    <option value="1992" >1992</option>
                                    <option value="1993" >1993</option>
                                    <option value="1994" >1994</option>
                                    <option value="1995" >1995</option>
                                    <option value="1996" >1996</option>
                                    <option value="1997" >1997</option>
                                    <option value="1998" >1998</option>
                                    <option value="1999" >1999</option>
                                    <option value="2000" >2000</option>
                                    <option value="2001" >2001</option>
                                    <option value="2002" >2002</option>
                                    <option value="2003" >2003</option>
                                    <option value="2004" >2004</option>
                                    <option value="2005" >2005</option>
                                    <option value="2006" >2006</option>
                                    <option value="2007" >2007</option>
                                    <option value="2008" >2008</option>
                                    <option value="2009" >2009</option>
                                    <option value="2010" >2010</option>
                                    <option value="2011" >2011</option>
                                    <option value="2012" >2012</option>
                                    <option value="2013" >2013</option>
                                    <option value="2014" >2014</option>
                                    <option value="2015" >2015</option>
                                    <option value="2016" >2016</option>
                                    <option value="2017" >2017</option>
                                    <option value="2018" >2018</option>
                                </select>

                                <select id="birth_month" ng-model="birth_month" name="birth_month" class="r_corners bg_light w_full border_none bith_date_select" required >
                                    <option value="" >-MM-</option>
                                    <option value="1" >1</option>
                                    <option value="2" >2</option>
                                    <option value="3" >3</option>
                                    <option value="4" >4</option>
                                    <option value="5" >5</option>
                                    <option value="6" >6</option>
                                    <option value="7" >7</option>
                                    <option value="8" >8</option>
                                    <option value="9" >9</option>
                                    <option value="10" >10</option>
                                    <option value="11" >11</option>
                                    <option value="12" >12</option>
                                </select> 

                                <select id="birth_date" name="date_birth" ng-model="date_birth" class="r_corners bg_light w_full border_none bith_date_select"  required >
                                    <option value="" >-DD-</option>
                                    <option value="1" >1</option>
                                    <option value="2" >2</option>
                                    <option value="3" >3</option>
                                    <option value="4" >4</option>
                                    <option value="5" >5</option>
                                    <option value="6" >6</option>
                                    <option value="7" >7</option>
                                    <option value="8" >8</option>
                                    <option value="9" >9</option>
                                    <option value="10" >10</option>
                                    <option value="11" >11</option>
                                    <option value="12" >12</option>
                                    <option value="13" >13</option>
                                    <option value="14" >14</option>
                                    <option value="15" >15</option>
                                    <option value="16" >16</option>
                                    <option value="17" >17</option>
                                    <option value="18" >18</option>
                                    <option value="19" >19</option>
                                    <option value="20" >20</option>
                                    <option value="21" >21</option>
                                    <option value="22" >22</option>
                                    <option value="23" >23</option>
                                    <option value="24" >24</option>
                                    <option value="25" >25</option>
                                    <option value="26" >26</option>
                                    <option value="27" >27</option>
                                    <option value="28" >28</option>
                                    <option value="29" >29</option>
                                    <option value="30" >30</option>
                                    <option value="31" >31</option>
                                </select>

                            </div>
                        </div>
                        <div style="clear: both"></div>

                        <div class="row" style="margin-top: 15px;">
                            <div class="col-md-6">
                                <label>Profession *</label>
                                <select name="profession" id="profession_select"  onchange="professionChange()" class="r_corners bg_light w_full border_none" style="width: 100%;height: 40px;padding: 5px;" required >
                                    <option value="" >Select Profession</option>
                                    <option value="Academic" >Academic</option>
                                    <option value="Medicine" >Medicine</option>
                                    <option value="Law" >Law</option>
                                    <option value="Banking" >Banking</option>
                                    <option value="IT" >IT</option>
                                    <option value="Entrepreneur" >Entrepreneur</option>
                                    <option value="Sales/Marketing" >Sales/Marketing</option>
                                    <option value="Other" >Other</option>
                                </select>

                            </div>
                            <div class="col-md-6">
                                <label>Country *</label>
                                <select name="country" id="country"  onchange="countryChange()" class="r_corners bg_light w_full border_none" style="width: 100%;height: 40px;padding: 5px;" required >
                                    <option value="" >Select Country</option>
                                    <option value="Aruba" >Aruba</option>
                                    <option value="Afghanistan" >Afghanistan</option>
                                    <option value="Angola" >Angola</option>
                                    <option value="Anguilla" >Anguilla</option>
                                    <option value="Albania" >Albania</option>
                                    <option value="Andorra" >Andorra</option>
                                    <option value="Netherlands Antilles" >Netherlands Antilles</option>
                                    <option value="United Arab Emirates" >United Arab Emirates</option>
                                    <option value="Argentina" >Argentina</option>
                                    <option value="Armenia" >Armenia</option>
                                    <option value="American Samoa" >American Samoa</option>
                                    <option value="Antarctica" >Antarctica</option>
                                    <option value="French Southern territories" >French Southern territories</option>
                                    <option value="Antigua and Barbuda" >Antigua and Barbuda</option>
                                    <option value="Australia" >Australia</option>
                                    <option value="Austria" >Austria</option>
                                    <option value="Azerbaijan" >Azerbaijan</option>
                                    <option value="Burundi" >Burundi</option>
                                    <option value="Belgium" >Belgium</option>
                                    <option value="Benin" >Benin</option>
                                    <option value="Burkina Faso" >Burkina Faso</option>
                                    <option value="Bangladesh" >Bangladesh</option>
                                    <option value="Bulgaria" >Bulgaria</option>
                                    <option value="Bahrain" >Bahrain</option>
                                    <option value="Bahamas" >Bahamas</option>
                                    <option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
                                    <option value="Belarus" >Belarus</option>
                                    <option value="Belize" >Belize</option>
                                    <option value="Bermuda" >Bermuda</option>
                                    <option value="Bolivia" >Bolivia</option>
                                    <option value="Brazil" >Brazil</option>
                                    <option value="Barbados" >Barbados</option>
                                    <option value="Brunei" >Brunei</option>
                                    <option value="Bhutan" >Bhutan</option>
                                    <option value="Bouvet Island" >Bouvet Island</option>
                                    <option value="Botswana" >Botswana</option>
                                    <option value="Central African Republic" >Central African Republic</option>
                                    <option value="Canada" >Canada</option>
                                    <option value="Cocos (Keeling) Islands" >Cocos (Keeling) Islands</option>
                                    <option value="Switzerland" >Switzerland</option>
                                    <option value="Chile" >Chile</option>
                                    <option value="China" >China</option>
                                    <option value="Côte d’Ivoire" >Côte d’Ivoire</option>
                                    <option value="Cameroon" >Cameroon</option>
                                    <option value="Congo, The Democratic Republic" >Congo, The Democratic Republic</option>
                                    <option value="Congo" >Congo</option>
                                    <option value="Cook Islands" >Cook Islands</option>
                                    <option value="Colombia" >Colombia</option>
                                    <option value="Comoros" >Comoros</option>
                                    <option value="Cape Verde" >Cape Verde</option>
                                    <option value="Costa Rica" >Costa Rica</option>
                                    <option value="Cuba" >Cuba</option>
                                    <option value="Christmas Island" >Christmas Island</option>
                                    <option value="Cayman Islands" >Cayman Islands</option>
                                    <option value="Cyprus" >Cyprus</option>
                                    <option value="Czech Republic" >Czech Republic</option>
                                    <option value="Germany" >Germany</option>
                                    <option value="Djibouti" >Djibouti</option>
                                    <option value="Dominica" >Dominica</option>
                                    <option value="Denmark" >Denmark</option>
                                    <option value="Dominican Republic" >Dominican Republic</option>
                                    <option value="Algeria" >Algeria</option>
                                    <option value="Ecuador" >Ecuador</option>
                                    <option value="Egypt" >Egypt</option>
                                    <option value="Eritrea" >Eritrea</option>
                                    <option value="Western Sahara" >Western Sahara</option>
                                    <option value="Spain" >Spain</option>
                                    <option value="Estonia" >Estonia</option>
                                    <option value="Ethiopia" >Ethiopia</option>
                                    <option value="Finland" >Finland</option>
                                    <option value="Fiji Islands" >Fiji Islands</option>
                                    <option value="Falkland Islands" >Falkland Islands</option>
                                    <option value="France" >France</option>
                                    <option value="Faroe Islands" >Faroe Islands</option>
                                    <option value="Micronesia, Federated States o" >Micronesia, Federated States o</option>
                                    <option value="Gabon" >Gabon</option>
                                    <option value="United Kingdom" >United Kingdom</option>
                                    <option value="Georgia" >Georgia</option>
                                    <option value="Ghana" >Ghana</option>
                                    <option value="Gibraltar" >Gibraltar</option>
                                    <option value="Guinea" >Guinea</option>
                                    <option value="Guadeloupe" >Guadeloupe</option>
                                    <option value="Gambia" >Gambia</option>
                                    <option value="Guinea-Bissau" >Guinea-Bissau</option>
                                    <option value="Equatorial Guinea" >Equatorial Guinea</option>
                                    <option value="Greece" >Greece</option>
                                    <option value="Grenada" >Grenada</option>
                                    <option value="Greenland" >Greenland</option>
                                    <option value="Guatemala" >Guatemala</option>
                                    <option value="French Guiana" >French Guiana</option>
                                    <option value="Guam" >Guam</option>
                                    <option value="Guyana" >Guyana</option>
                                    <option value="Hong Kong" >Hong Kong</option>
                                    <option value="Heard Island and McDonald Isla" >Heard Island and McDonald Isla</option>
                                    <option value="Honduras" >Honduras</option>
                                    <option value="Croatia" >Croatia</option>
                                    <option value="Haiti" >Haiti</option>
                                    <option value="Hungary" >Hungary</option>
                                    <option value="Indonesia" >Indonesia</option>
                                    <option value="India" >India</option>
                                    <option value="British Indian Ocean Territory" >British Indian Ocean Territory</option>
                                    <option value="Ireland" >Ireland</option>
                                    <option value="Iran" >Iran</option>
                                    <option value="Iraq" >Iraq</option>
                                    <option value="Iceland" >Iceland</option>
                                    <option value="Israel" >Israel</option>
                                    <option value="Italy" >Italy</option>
                                    <option value="Jamaica" >Jamaica</option>
                                    <option value="Jordan" >Jordan</option>
                                    <option value="Japan" >Japan</option>
                                    <option value="Kazakstan" >Kazakstan</option>
                                    <option value="Kenya" >Kenya</option>
                                    <option value="Kyrgyzstan" >Kyrgyzstan</option>
                                    <option value="Cambodia" >Cambodia</option>
                                    <option value="Kiribati" >Kiribati</option>
                                    <option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
                                    <option value="South Korea" >South Korea</option>
                                    <option value="Kuwait" >Kuwait</option>
                                    <option value="Laos" >Laos</option>
                                    <option value="Lebanon" >Lebanon</option>
                                    <option value="Liberia" >Liberia</option>
                                    <option value="Libyan Arab Jamahiriya" >Libyan Arab Jamahiriya</option>
                                    <option value="Saint Lucia" >Saint Lucia</option>
                                    <option value="Liechtenstein" >Liechtenstein</option>
                                    <option value="Sri Lanka" >Sri Lanka</option>
                                    <option value="Lesotho" >Lesotho</option>
                                    <option value="Lithuania" >Lithuania</option>
                                    <option value="Luxembourg" >Luxembourg</option>
                                    <option value="Latvia" >Latvia</option>
                                    <option value="Macao" >Macao</option>
                                    <option value="Morocco" >Morocco</option>
                                    <option value="Monaco" >Monaco</option>
                                    <option value="Moldova" >Moldova</option>
                                    <option value="Madagascar" >Madagascar</option>
                                    <option value="Maldives" >Maldives</option>
                                    <option value="Mexico" >Mexico</option>
                                    <option value="Marshall Islands" >Marshall Islands</option>
                                    <option value="Macedonia" >Macedonia</option>
                                    <option value="Mali" >Mali</option>
                                    <option value="Malta" >Malta</option>
                                    <option value="Myanmar" >Myanmar</option>
                                    <option value="Mongolia" >Mongolia</option>
                                    <option value="Northern Mariana Islands" >Northern Mariana Islands</option>
                                    <option value="Mozambique" >Mozambique</option>
                                    <option value="Mauritania" >Mauritania</option>
                                    <option value="Montserrat" >Montserrat</option>
                                    <option value="Martinique" >Martinique</option>
                                    <option value="Mauritius" >Mauritius</option>
                                    <option value="Malawi" >Malawi</option>
                                    <option value="Malaysia" >Malaysia</option>
                                    <option value="Mayotte" >Mayotte</option>
                                    <option value="Namibia" >Namibia</option>
                                    <option value="New Caledonia" >New Caledonia</option>
                                    <option value="Niger" >Niger</option>
                                    <option value="Norfolk Island" >Norfolk Island</option>
                                    <option value="Nigeria" >Nigeria</option>
                                    <option value="Nicaragua" >Nicaragua</option>
                                    <option value="Niue" >Niue</option>
                                    <option value="Netherlands" >Netherlands</option>
                                    <option value="Norway" >Norway</option>
                                    <option value="Nepal" >Nepal</option>
                                    <option value="Nauru" >Nauru</option>
                                    <option value="New Zealand" >New Zealand</option>
                                    <option value="Oman" >Oman</option>
                                    <option value="Pakistan" >Pakistan</option>
                                    <option value="Panama" >Panama</option>
                                    <option value="Pitcairn" >Pitcairn</option>
                                    <option value="Peru" >Peru</option>
                                    <option value="Philippines" >Philippines</option>
                                    <option value="Palau" >Palau</option>
                                    <option value="Papua New Guinea" >Papua New Guinea</option>
                                    <option value="Poland" >Poland</option>
                                    <option value="Puerto Rico" >Puerto Rico</option>
                                    <option value="North Korea" >North Korea</option>
                                    <option value="Portugal" >Portugal</option>
                                    <option value="Paraguay" >Paraguay</option>
                                    <option value="Palestine" >Palestine</option>
                                    <option value="French Polynesia" >French Polynesia</option>
                                    <option value="Qatar" >Qatar</option>
                                    <option value="Réunion" >Réunion</option>
                                    <option value="Romania" >Romania</option>
                                    <option value="Russian Federation" >Russian Federation</option>
                                    <option value="Rwanda" >Rwanda</option>
                                    <option value="Saudi Arabia" >Saudi Arabia</option>
                                    <option value="Sudan" >Sudan</option>
                                    <option value="Senegal" >Senegal</option>
                                    <option value="Singapore" >Singapore</option>
                                    <option value="South Georgia and the South Sa" >South Georgia and the South Sa</option>
                                    <option value="Saint Helena" >Saint Helena</option>
                                    <option value="Svalbard and Jan Mayen" >Svalbard and Jan Mayen</option>
                                    <option value="Solomon Islands" >Solomon Islands</option>
                                    <option value="Sierra Leone" >Sierra Leone</option>
                                    <option value="El Salvador" >El Salvador</option>
                                    <option value="San Marino" >San Marino</option>
                                    <option value="Somalia" >Somalia</option>
                                    <option value="Saint Pierre and Miquelon" >Saint Pierre and Miquelon</option>
                                    <option value="Sao Tome and Principe" >Sao Tome and Principe</option>
                                    <option value="Suriname" >Suriname</option>
                                    <option value="Slovakia" >Slovakia</option>
                                    <option value="Slovenia" >Slovenia</option>
                                    <option value="Sweden" >Sweden</option>
                                    <option value="Swaziland" >Swaziland</option>
                                    <option value="Seychelles" >Seychelles</option>
                                    <option value="Syria" >Syria</option>
                                    <option value="Turks and Caicos Islands" >Turks and Caicos Islands</option>
                                    <option value="Chad" >Chad</option>
                                    <option value="Togo" >Togo</option>
                                    <option value="Thailand" >Thailand</option>
                                    <option value="Tajikistan" >Tajikistan</option>
                                    <option value="Tokelau" >Tokelau</option>
                                    <option value="Turkmenistan" >Turkmenistan</option>
                                    <option value="East Timor" >East Timor</option>
                                    <option value="Tonga" >Tonga</option>
                                    <option value="Trinidad and Tobago" >Trinidad and Tobago</option>
                                    <option value="Tunisia" >Tunisia</option>
                                    <option value="Turkey" >Turkey</option>
                                    <option value="Tuvalu" >Tuvalu</option>
                                    <option value="Taiwan" >Taiwan</option>
                                    <option value="Tanzania" >Tanzania</option>
                                    <option value="Uganda" >Uganda</option>
                                    <option value="Ukraine" >Ukraine</option>
                                    <option value="United States Minor Outlying I" >United States Minor Outlying I</option>
                                    <option value="Uruguay" >Uruguay</option>
                                    <option value="United States" >United States</option>
                                    <option value="Uzbekistan" >Uzbekistan</option>
                                    <option value="Holy See (Vatican City State)" >Holy See (Vatican City State)</option>
                                    <option value="Saint Vincent and the Grenadin" >Saint Vincent and the Grenadin</option>
                                    <option value="Venezuela" >Venezuela</option>
                                    <option value="Virgin Islands, British" >Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S." >Virgin Islands, U.S.</option>
                                    <option value="Vietnam" >Vietnam</option>
                                    <option value="Vanuatu" >Vanuatu</option>
                                    <option value="Wallis and Futuna" >Wallis and Futuna</option>
                                    <option value="Samoa" >Samoa</option>
                                    <option value="Yemen" >Yemen</option>
                                    <option value="Yugoslavia" >Yugoslavia</option>
                                    <option value="South Africa" >South Africa</option>
                                    <option value="Zambia" >Zambia</option>
                                    <option value="Zimbabwe" >Zimbabwe</option>
                                </select>
                            </div>
                        </div> 



                        <br/>


                        <button name = "registration" class="btn-send-message disabled" type="submit" value="Login">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Registration Page Area End Here -->

<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>