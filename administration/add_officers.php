<?php include "includes/logic/header.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Add Borrower || Mighty Finance </title>
  <!-- base:css -->
  <link rel="stylesheet" href="css/css-materialdesignicons.min.css">
  <link rel="stylesheet" href="css/css-vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="css/css-font-awesome.min.css">
  <link rel="stylesheet" href="css/jquery-bar-rating-bars-1to10.css">
  <link rel="stylesheet" href="css/jquery-bar-rating-bars-horizontal.css">
  <link rel="stylesheet" href="css/jquery-bar-rating-bars-movie.css">
  <link rel="stylesheet" href="css/jquery-bar-rating-bars-pill.css">
  <link rel="stylesheet" href="css/jquery-bar-rating-bars-reversed.css">
  <link rel="stylesheet" href="css/jquery-bar-rating-bars-square.css">
  <link rel="stylesheet" href="css/jquery-bar-rating-bootstrap-stars.css">
  <link rel="stylesheet" href="css/jquery-bar-rating-css-stars.css">
  <link rel="stylesheet" href="css/jquery-bar-rating-examples.css">
  <link rel="stylesheet" href="css/jquery-bar-rating-fontawesome-stars-o.css">
  <link rel="stylesheet" href="css/jquery-bar-rating-fontawesome-stars.css">
  <link rel="stylesheet" href="css/css-asColorPicker.min.css">
  <link rel="stylesheet" href="css/x-editable-bootstrap-editable.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker-bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="css/dropify-dropify.min.css">
  <link rel="stylesheet" href="css/jquery-file-upload-uploadfile.css">
  <link rel="stylesheet" href="css/jquery-tags-input-jquery.tagsinput.min.css">
  <link rel="stylesheet" href="css/tempusdominus-bootstrap-4-tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="css/dropzone-dropzone.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light-style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png">
</head>
<style>
  .navbar .navbar-brand-wrapper .navbar-brand img {
    width: calc(290px - 130px);
    max-width: 68rem;
    height: 35px;
    margin: auto;
    vertical-align: middle;
  }

  .sidebar .nav .nav-item .nav-link .menu-title {
    color: rgba(255, 255, 255, 0.9);
    display: inline-block;
    font-size: 0.875rem;
    line-height: 1;
  }

  .panel-body.bg-gray.text-bold {
    background-color: gainsboro;
  }.popUpFundo.white {
    background-color: #7e25bb6b;
}
</style>

<body>
<?php include 'components/constants_views/messages.php'?>


  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

    <?php include 'components/constants_views/top_nav.php' ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <?php include 'components/constants_views/side_nav.php' ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Add Borrower</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>
                  <form method="post" id="add_borrower_form" class="forms-sample">
                    <div class="panel panel-default form-group"><br>
                      <div class="panel-body bg-gray text-bold">Required Fields: </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="exampleInputName1">Name</label>
                        <div class="input-group ">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class="mdi mdi-account-box-outline"></em></span>
                            </div>
                            <input required type="text" class="form-control" id="fname" name="fname" placeholder="First Name" aria-label="fname">
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleInputName1">Last Name</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><em class="mdi mdi-account-box-outline"></em></span>
                          </div>
                          <input required type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" aria-label="lname">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="exampleInputName1">Email Address</label>
                        <div class="input-group ">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class="mdi mdi-email "></em></span>
                            </div>
                            <input required type="email" class="form-control" id="email" name="email" placeholder="email" aria-label="email">
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleInputName1">Country</label>
                        <div class="input-group ">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class="mdi mdi-flag-variant"></em></span>
                            </div>
                            

<select class="form-control" id="country" name="country">
    <option>select country</option>
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
    <option selected value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
</select>


                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="exampleInputName1">Buiness Name:&nbsp &nbsp<b><u style="text-decoration: none;" class="text-warning ">(Optional)</u></b></label>
                        <div class="input-group ">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class="mdi mdi-account-multiple"></em></span>
                            </div>
                            <input type="text" id="bname" class="form-control" name="bname" placeholder="Business Name" aria-label="bname">
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleInputName1">Gender</label>
                        <div class="input-group ">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class=" mdi mdi-cellphone "></em></span>
                            </div>
                            <select required class="form-control" id="gender" name="gender"><option selected disabled>choose option</option><option value="male">Male</option><option value="female">Female</option></select>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Phone: <b><u>Do not</u> put country code or spaces</b> in the below mobile otherwise you won't be able to send SMS to the mobile.</label>
                      <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class="mdi mdi-phone"></em></span>
                            </div>
                      <input required pattern="[0-9]{1}[0-9]{9}" type="tel" maxlength="10" required name="phone" class="form-control" id="phone" placeholder="Phone">
                      </div>
          
                    </div>
                    <div class="form-group"><label for="password">New Password</label>
                    <div class="input-group">
                     
                            <div class="input-group-prepend">
                              <span class="input-group-text">***</span>
                            </div>
                     
                      <input required type="password" class="form-control" name="password" min="8" id="password" placeholder="Password">
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">City</label>
                      <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class="mdi mdi-flag"></em></span>
                            </div>
                     <input required placeholder="city" name="city" id="city" type="text" class="form-control"></div>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Physical address</label>
                      <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class="mdi mdi-flag"></em></span>
                            </div>
                     <input required placeholder="physical address" name="address" id="address" type="text" class="form-control"></div>
                    </div>
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="exampleInputName1">Employement Status :&nbsp &nbsp<b><u style="text-decoration: none;" class="text-warning ">(Optional)</u></b></label>
                        <div class="input-group ">
                        <div class="input-group-prepend">
                              <span class="input-group-text"><em class="mdi mdi-book-multiple-variant"></em></span>
                            </div>
                          <select type="text" class="form-control" id="working_status" placeholder="working_status" name="working_status">
                          <option selected disabled>option</option>
                            <option value="employed">Employed</option>
                            <option value="not_Employed">Not Employed</option>
                            <option value="self_Employed">Self Employed</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleInputName1">birth date</label>
                        <div class="input-group ">
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class="mdi mdi-calendar"></em></span>
                            </div>
                          <input required type="date" max="2003-01-01" class="form-control" name="bdate" id="bdate">
                          
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="exampleInputName1">Status</label>
                        <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><em class="class mdi mdi-account-circle"></em></span>
                                    </div>
                                    <select class="form-control" id="status" name="status">
                                    <option selected disabled>choose option</option>
                      <option value="married">Married</option>
                      <option value="single">Single</option>
                      <option value="devorced">Devorced</option>
                      <option value="windowed">Windowed</option>
                    </select>
                                  </div>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleInputName1">Eligibility</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class="mdi mdi-bookmark-check"></em></span>
                            </div>
                          <select type="text" class="form-control" name="eligibility" id="eligibility">
                            <option selected disabled>choose option</option>
                            <option value="enabled">Enabled</option>
                            <option value="disabled">Disabled</option>
                          </select>
                          
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="exampleInputName1">NRC</label>
                        <div class="input-group ">
                          <input required type="text" class="form-control" name="nrc" id="nrc" placeholder="eg..1234/33/3">
                        </div>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleInputName1">Short Description:&nbsp &nbsp<b><u style="text-decoration: none;" class="text-warning ">(Optional)</u></b></label>
                        <div class="input-group ">
                          <input type="text" class="form-control" name="description" id="description" placeholder="Descripion">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>File upload:&nbsp &nbsp<b><u style="text-decoration: none;" class="text-warning ">(Optional)</u></b></label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>File upload:&nbsp &nbsp<b><u style="text-decoration: none;" class="text-warning ">(Optional)</u></b></label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>

                    <button type="submit" name="add_borrower" id="add_borrower" class="btn btn-primary mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include 'components/constants_views/footer.php' ?>
        <script>
function close() {
    event.preventDefault();
    document.getElementById('popy').style.display = "none"
}
</script>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
 
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="js/js-vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="js/chart.js-Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/custom/add_borrowers.js"></script>
  <script src="js/js-off-canvas.js"></script>
  <script src="js/js-hoverable-collapse.js"></script>
  <script src="js/js-template.js"></script>
  <script src="js/js-settings.js"></script>
  <script src="js/js-todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="js/sweetalert-sweetalert.min"></script>
  <script src="js/jquery.avgrund-jquery.avgrund.min.js"></script>
  <script src="js/jquery-steps-jquery.steps.min.js"></script>
  <script src="js/jquery-validation-jquery.validate.min.js"></script>
  <script src="js/jquery-bar-rating-jquery.barrating.min.js"></script>
  <script src="js/jquery-asColor-jquery-asColor.min.js"></script>
  <script src="js/jquery-asGradient-jquery-asGradient.min.js"></script>
  <script src="js/jquery-asColorPicker-jquery-asColorPicker.min.js"></script>
  <script src="js/x-editable-bootstrap-editable.min.js"></script>
  <script src="js/moment-moment.min.js"></script>
  <script src="js/tempusdominus-bootstrap-4-tempusdominus-bootstrap-4.js"></script>
  <script src="js/bootstrap-datepicker-bootstrap-datepicker.min.js"></script>
  <script src="js/dropify-dropify.min.js"></script>
  <script src="js/jquery-file-upload-jquery.uploadfile.min.js"></script>
  <script src="js/jquery-tags-input-jquery.tagsinput.min.js"></script>
  <script src="js/dropzone-dropzone.js"></script>
  <script src="js/jquery.repeater-jquery.repeater.min.js"></script>
  <script src="js/inputmask-jquery.inputmask.bundle.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/js-formpickers.js"></script>
  <script src="js/js-form-addons.js"></script>
  <script src="js/js-x-editable.js"></script>
  <script src="js/js-dropify.js"></script>
  <script src="js/js-dropzone.js"></script>
  <script src="js/js-jquery-file-upload.js"></script>
  <script src="js/js-formpickers.js"></script>
  <script src="js/js-form-repeater.js"></script>
  <script src="js/js-inputmask.js"></script>
  <script src="js/custom/safe.js"></script>


  <!-- endinject -->
  <!-- plugin js for this page -->
  <div class="avgrund-overlay "></div>


</body>

</html>