<!DOCTYPE html>
<html>
<head>
	<title>new registration form</title>
</head>
<body>

	<center><h1>PLEASE FILL THE REGISTRATION FROM</h1></center>
<form method="post" action="new_form_back.php"><center><table border="5px" cellpadding="9" bordercolor="black" bgcolor="lightblue">

	<tr>
		<td colspan="6"><center><marquee>REGISTRATION FORM</marquee><center></td>
	</tr>
	
    <tr>
    	<td>FIRST NAME :-</td>
    	<td><input type="text" name="Fname" placeholder="--first name--"></td>
        <td>MIDDLE NAME :-</td>
        <td><input type="text" name="Mname" placeholder="--middle name--"></td>
        <td>LAST NAME :-</td>
        <td><input type="text" name="Lname" placeholder="--last name--"></td>
    </tr>

    <tr>
    	<td>NUMBER :-</td>
    	<td><input type="text" name="number" placeholder="--number--"></td>
        <td>ALTERNAT NUMBER :-</td>
        <td><input type="text" name="alnumber" placeholder="--alternet number--"></td>
        <td>ANY FRIEND'S NUMBER:-</td>
        <td><input type="text" name="afnumber" placeholder="--friend's number--"></td>
    </tr>

    <tr>
    	<td>PASSWORD :-</td>
    	<td><input type="password" name="password" placeholder="--password--"></td>
        <td>RE ENTER PASSWORD :-</td>
        <td><input type="password" name="repassword" placeholder="--re enter password--"></td>
        <td>CONFIRM PASSWORD :-</td>
        <td><input type="password" name="cpassword" placeholder="--confirm password--"></td>
    </tr>

    <tr>
    	<td>GMAIL@ :-</td>
    	<td><input type="text" name="gmail" placeholder="--abc@gmail.com"></td>
        <td>MICROSOFT ACCOUNT:-</td>
        <td><input type="text" name="msoftaccount" placeholder="--abc@outlook.com--"></td>
         <td>INSTAGRAM ID :-</td>
        <td><input type="text" name="insaccount" placeholder="--paste link--"></td>

    </tr>

     <tr>
     	<td>COUNTRY :-</td>
     	<td><select class="form-select" id="country" name="country">
    <option selected="selected" value="0">--Select --</option>
    <option value="AF">Afghanistan</option>
    <option value="AX">Aland Islands</option>
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
    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
    <option value="BA">Bosnia and Herzegovina</option>
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
    <option value="CD">Congo, Democratic Republic of the Congo</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote D'Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CW">Curacao</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
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
    <option value="GG">Guernsey</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Island and Mcdonald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IM">Isle of Man</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JE">Jersey</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People's Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="XK">Kosovo</option>
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
    <option value="MO">Macao</option>
    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
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
    <option value="ME">Montenegro</option>
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
    <option value="PS">Palestinian Territory, Occupied</option>
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
    <option value="BL">Saint Barthelemy</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="CS">Serbia and Montenegro</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SX">Sint Maarten</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="SS">South Sudan</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan, Province of China</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
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
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.s.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
</select></td>

       <td>STATE :-</td>
       <td>
           <select name=statelist>
<option selected="selected" value="0">--Select --</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value=”Assam”>Assam</option>
<option value=”Bihar”>Bihar</option>
<option value=”Chandigarh”>Chandigarh</option>
<option value=”Chhattisgarh”>Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value=”Delhi”>Delhi</option>
<option value=”Goa”>Goa</option>
<option value=”Gujarat”>Gujarat</option>
<option value=”Haryana”>Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value=”Jharkhand”>Jharkhand</option>
<option value=”Karnataka”>Karnataka</option>
<option value=”Kerala”>Kerala</option>
<option value=”Lakshadweep”>Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value=”Maharashtra”>Maharashtra</option>
<option value=”Manipur”>Manipur</option>
<option value=”Meghalaya”>Meghalaya</option>
<option value=”Mizoram”>Mizoram</option>
<option value=”Nagaland”>Nagaland</option>
<option value=”Orissa”>Orissa</option>
<option value=”Pondicherry”>Pondicherry</option>
<option value=”Punjab”>Punjab</option>
<option value=”Rajasthan”>Rajasthan</option>
<option value=”Sikkim”>Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value=”Tripura”>Tripura</option>
<option value=”Uttaranchal”>Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
</select>
       </td>

       <td>DISTRICT :-</td>
       <td><select name="district">
        <option selected="selected" value="0">--Select --</option>
        <option value=alipurduar>Alipurduar</option>Bankura
        <option value="Birbhum">birbhum</option>
        <option value="Cooch Behar">cooch bihar</option>
        <option value="Dakshin Dinajpur">Dakshin Dinajpur</option>
        <option value="Darjeeling">Darjeeling</option>
        <option value="Hooghly">Hooghly</option>
        <option value="Howrah">Howrah</option>
        <option value="Jalpaiguri">Jalpaiguri</option>
        <option value="Kalimpong">Kalimpong</option>
        <option value="Kolkata">Kolkata</option>
        <option value="Malda">Malda</option>
        <option value="Murshidabad">Murshidabad</option>
        <option value="Nadia">Nadia</option>
        <option value="North 24 Parganas">North 24 Parganas</option>
        <option value="Paschim Bardhaman">Paschim Bardhaman</option>
        <option value="Purba Bardhaman">Purba Bardhaman</option>
        <option value="Purba Medinipur">Purba Medinipur</option>
        <option value="Purulia">Purulia</option>
        <option value="South 24 Parganas">South 24 Parganas</option>
        <option value="Uttar Dinajpur">Uttar Dinajpur</option>
 </td>
     </tr>

    <tr>
    	<td>GENDER :-</td>
    	<td><input type="radio" name="gender" value="MALE">MALE
            <input type="radio" name="gender" value="FEMALE">FEMALE
            <input type="radio" name="gender" value="TRANSGENDER">OTHER'S
    	</td>
        <td>BANK :-</td>
        <td>
            <select name="bankname" class="form-control" required>
  <option selected="selected" value="0">--Select --</option>
  <option value="ALLAHABAD BANK">ALLAHABAD BANK</option>
  <option value="ANDHRA BANK">ANDHRA BANK</option>
  <option value="AXIS BANK">AXIS BANK</option>
  <option value="STATE BANK OF INDIA">STATE BANK OF INDIA</option>
  <option value="STATE BANK OF INDIA">BANK OF BARODA</option>
  <option value="UCO BANK">UCO BANK</option>
  <option value="UNION BANK OF INDIA">UNION BANK OF INDIA</option>
  <option value="BANK OF INDIA">BANK OF INDIA</option>
  <option value="BANDHAN BANK LIMITED">BANDHAN BANK LIMITED</option>
  <option value="CANARA BANK">CANARA BANK</option>
  <option value="GRAMIN VIKASH BANK">GRAMIN VIKASH BANK</option>
  <option value="CORPORATION BANK">CORPORATION BANK</option>
  <option value="INDIAN BANK">INDIAN BANK</option>
  <option value="INDIAN OVERSEAS BANK">INDIAN OVERSEAS BANK</option>
  <option value="ORIENTAL BANK OF COMMERCE">ORIENTAL BANK OF COMMERCE</option>
  <option value="PUNJAB AND SIND BANK">PUNJAB AND SIND BANK</option>
  <option value="PUNJAB NATIONAL BANK">PUNJAB NATIONAL BANK</option>
  <option value="RESERVE BANK OF INDIA">RESERVE BANK OF INDIA</option>
  <option value="SOUTH INDIAN BANK">SOUTH INDIAN BANK</option>
  <option value="UNITED BANK OF INDIA">UNITED BANK OF INDIA</option>
  <option value="CENTRAL BANK OF INDIA">CENTRAL BANK OF INDIA</option>
  <option value="VIJAYA BANK">VIJAYA BANK</option>
  <option value="DENA BANK">DENA BANK</option>
  <option value="BHARATIYA MAHILA BANK LIMITED">BHARATIYA MAHILA BANK LIMITED</option>
  <option value="FEDERAL BANK LTD">FEDERAL BANK LTD </option>
  <option value="HDFC BANK LTD">HDFC BANK LTD</option>
  <option value="ICICI BANK LTD">ICICI BANK LTD</option>
  <option value="IDBI BANK LTD">IDBI BANK LTD</option>
  <option value="PAYTM BANK">PAYTM BANK</option>
  <option value="FINO PAYMENT BANK">FINO PAYMENT BANK</option>
  <option value="INDUSIND BANK LTD">INDUSIND BANK LTD</option>
  <option value="KARNATAKA BANK LTD">KARNATAKA BANK LTD</option>
  <option value="KOTAK MAHINDRA BANK">KOTAK MAHINDRA BANK</option>
  <option value="YES BANK LTD">YES BANK LTD</option>
  <option value="SYNDICATE BANK">SYNDICATE BANK</option>
  <option value="BANK OF INDIA">BANK OF INDIA</option>
  <option value="BANK OF MAHARASHTRA">BANK OF MAHARASHTRA</option>
</select>
        </td>
        <td>IFSC CODE :-</td>
        <td><input type="number" name="ifsc" placeholder="--IFSC CODE--"></td>
    </tr>

    <tr>
    	<td>CUALIFICATION:-</td>
    	<td>
    		<select name="cualification">
                <option selected="selected" value="0">--Select --</option>
    			<option value="B.C.A">B.C.A</option>
    			<option value="M.C.A">M.C.A</option>
    			<option value="B.TECH">B.TECH</option>
    			<option value="M.TECH">M.TECH</option>
    			<option value="H.S">HIGHER SECONDERY</option>
    			<option value="MATRICULATION">MATRICULATION</option>
    			<option value="DIPLOMA">DIPLOMA</option>
    			<option value="B.A">B.A</option>
    			<option value="B.SC">B.SC</option>
    			<option value="M.A">M.A</option>
    			<option value="M.S.C">M.SC</option>
    		</select>
    	</td>
        <td>ADDRESS :-</td>
        <td><textarea name="address" placeholder="--address--"></textarea></td>

        <td>POLICE STATION :-</td>
        <td><input type="text" name="police" placeholder="--police station--"></td>
    </tr>

    <tr>
    	<td>LANGUAGE :-</td>
    	<td><input type="checkbox" name='la1' value="bangla">BENGALI
    	    <input type="checkbox" name='la1' value="hindi">HINDI
    	    <input type="checkbox" name='la1' value="english">ENGLISH
    </td>

    <td>RAILWAY STATION :-</td>
        <td><input type="text" name="railway" placeholder="--railway station--"></td>

        <td>POST OFFICE :-</td>
        <td><input type="text" name="post" placeholder="--post office--"></td>
    </tr>
    
    <tr>
    <td colspan="6"><center><input type="submit" name="submit" value="submit">
    <input type="reset" name="submit" value="reset"></center></td></tr>
</table>
</center>
</form>
</body>
</html>