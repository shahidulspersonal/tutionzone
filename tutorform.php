<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>


<meta charset="utf-8">
<meta name="viewport:" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style4.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">

<title></title>

  </head>


  <body>

    <div class="container">
        <div class="card">
            <div class="form">
                <div class="left-side">
                    <div class="left-heading">
                        <h3>TUTOR REGISTRATION</h3>
                    </div>
                    <div class="steps-content">
                        <h3>Step <span class="step-number">1</span></h3>

                        <p class="step-number-content d-none">Get to know better by adding your diploma,certificate and education life.</p>
                        <p class="step-number-content d-none">Help companies get to know you better by telling then about your past experiences.</p>
                        <p class="step-number-content d-none">Add your profile and find tution fast.</p>
                    </div>
                    <ul class="progress-bar">
                        <li class="active">Personal Information</li>
                        <li>Educational Information</li>
                        <li>Tutoring Information</li>
                        <li>Files Information</li>
                    </ul>



                </div>
                <div class="right-side">
                    <div class="main active">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Personal Information</h2>
                            <p>Add your profile and find tution fast.</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require id="user_name">
                                <span>Full Name</span>
                            </div>

                            <div class="input-div">
                                <select>
                                    <option>Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>


                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require>
                                <span>Phone number</span>
                            </div>
                            <div class="input-div">
                                <input type="text" required require>
                                <span>E-mail Address</span>
                            </div>
                        </div>

                        <div class="input-text">

                       <form action="/action_page.php">
                      <label class="control-label" for="birthday">Birthdate:</label>
                      <input class="form-control" type="date" required require id="birthday" name="birthday">
                    </form>


                            <div class="input-div">
                              <input type="text" required require>
                              <span>Full Address</span>

                                <select>
                                    <option>Select City</option>
                                    <option>Dhaka</option>
                                    <option>Chittagong</option>
                                    <option>Gazipur</option>
                                    <option>Rangpur</option>
                                    <option>Narayanganj</option>
                                    <option>Savar</option>
                                    <option>Sylhet</option>
                                    <option>Cumilla</option>
                                    <option>Mymensingh</option>
                                    <option>Rajshahi</option>
                                    <option>Barishal</option>
                                    <option>Jashore</option>
                                    <option>Tangail</option>
                                    <option>Bogura</option>
                                    <option>Barishal</option>
                                    <option>Noakhali</option>
                                    <option>Brahmanbaria</option>
                                    <option>Tongi</option>
                                    <option>Faridpur</option>
                                </select>

                            </div>
                        </div>
                        <div class="buttons">
                            <button class="next_button">Next Step</button>
                        </div>
                    </div>
                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Educational Information</h2>
                            <p>Inform us about your education life.</p>
                        </div>

                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require>
                                <span>School</span>
                            </div>

                            <div class="input-div">
                              <select>
                                  <option>Select Curriculum</option>
                                  <option>Bangla Medium</option>
                                  <option>English Medium</option>
                                  <option>English Version</option>
                                  <option>Madrasah Background</option>
                              </select>
                            </div>

                        </div>


                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require>
                                <span>College</span>
                            </div>

                            <div class="input-div">
                              <select>
                                  <option>Select Group</option>
                                  <option>Science</option>
                                  <option>Commerce</option>
                                  <option>Arts</option>
                              </select>
                            </div>

                            <div class="input-div">
                              <select>
                                  <option>Select Board</option>
                                  <option>Edexcel</option>
                                  <option>Cambridge</option>
                                  <option>Dhaka</option>
                                  <option>Chittagong</option>
                                  <option>Sylhet</option>
                                  <option>Jessore</option>
                                  <option>Rajshahi</option>
                                  <option>Comilla</option>
                                  <option>Barisal</option>
                                  <option>Dinajpur</option>
                                  <option>Madrasah</option>
                              </select>
                            </div>
                        </div>



                        <form action="/action_page.php" class="was-validated">
                      <div class="form-check mb-3">
                         <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
                         <label class="form-check-label" for="myCheck">Graduation/Bachelor/Diploma</label>
                         <div class="valid-feedback">

                        <div class="input-text" required require>
                            <div class="input-div">
                              <input type="text" >
                                <span>University name</span>
                            </div>
                            <div class="input-div">
                                <select>
                                    <option>Select Study type</option>
                                    <option>BA</option>
                                    <option>BBA</option>
                                    <option>BSCSE</option>
                                    <option>BSEEE</option>
                                    <option>BSECO</option>
                                    <option>BCOM</option>
                                    <option>Degree</option>
                                    <option>Diploma Engineering</option>
                                    <option>Medical</option>
                                    <option>MSCSE</option>
                                    <option>MSEEE</option>
                                    <option>MBA</option>
                                    <option>MDS</option>
                                    <option>MSECO</option>
                                    <option>MSCOM</option>
                                </select>
                            </div>
                            <div class="input-div">
                                <input type="text">
                                <span>Semester/Year</span>
                            </div>
                        </div>

                      </div>

                    </div>
                     </form>

                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button">Next Step</button>
                        </div>
                    </div>
                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                          <h2>Tutoring Information</h2>
                          <p>Choose your preferences.</p>
                      </div>
                      <div class="input-text">

                          <div class="row">
                              <form>
                                <label>Preferred Locations</label>
                                <select class="form-control selectpicker" multiple data-live-search="true">

                                  <optgroup label="Dhaka">
                                    <option>Azimpur</option>
                                    <option>Beribadh</option>
                                    <option>Bashundhara</option>
                                    <option>Badda</option>
                                    <option>Dhanmondi</option>
                                    <option>Gulshan</option>
                                    <option>Mohammadpur</option>
                                    <option>Mirpur</option>
                                    <option>Mohammadpur</option>
                                    <option>Elephant Road</option>
                                    <option>Uttara</option>
                                    <option>Satarkul</option>
                                    <option>Paltan</option>
                                    <option>Lalbagh</option>
                                    <option>Katabon</option>
                                    <option>Hatirpul</option>
                                  </optgroup>

                                  <optgroup label="Chittagong">
                                    <option>Cantoment</option>
                                    <option>Baluchara</option>
                                    <option>Ruby Gate</option>
                                    <option>Aman Bazar</option>
                                    <option>DC Road</option>
                                    <option>Kadamtali</option>
                                    <option>Sitakunda</option>
                                    <option>Khulshi</option>
                                    <option>Chadgaon Thana</option>
                                    <option>Agrabad</option>
                                  </optgroup>

                                  <optgroup label="Sylhet">
                                    <option>Akhalia Bazar</option>
                                    <option>Ambarkhana</option>
                                    <option>Baghbari</option>
                                    <option>Baluchor</option>
                                    <option>Shahjalal Upashahar</option>
                                    <option>Jail Road</option>
                                    <option>Sylhet Sadar</option>
                                    <option>Golapgang</option>
                                    <option>Dakshin Surma</option>
                                    <option></option>
                                  </optgroup>

                                  <optgroup label="Rangpur">
                                    <option>Adarsha Para</option>
                                    <option>Circle Road</option>
                                    <option>Indira More</option>
                                    <option>Nilkantho</option>
                                    <option>Pandar Dighi</option>
                                    <option>Taj Hat Road</option>
                                    <option>Uttam Hazipara</option>
                                    <option>Kotwali Thana</option>
                                    <option>Senpara</option>
                                    <option>Silmon Road</option>
                                  </optgroup>

                                </select>
                              </form>
                          </div>



                          <div class="row">
                              <form>
                                <label>Days Available</label>
                                  <select class="form-control selectpicker" multiple>

                                    <option value="1">SUNDAY</option>
                                    <option value="2">MONDAY</option>
                                    <option value="3">TUESDAY</option>
                                    <option value="4">WEDNESDAY</option>
                                    <option value="5">THURSDAY</option>
                                    <option value="6">FRIDAY</option>
                                    <option value="7">SATURDAY</option>
                                </select>
                              </form>
                          </div>

                      </div>


                      <div class="input-text">
                        <div class="input-div">
                          <select>
                              <option selected disabled>Category</option>
                              <option value="1">Bangla Medium</option>
                              <option value="2">English Medium</option>
                              <option value="3">English Version</option>
                              <option value="4">Madrasah Medium</option>
                              <option value="5">International Exam Preparation</option>
                              <option value="6">Religious & Moral Studies</option>
                          </select>
                        </div>

                        <div class="input-div">
                          <select>
                              <option selected disabled>Expected Salary</option>
                              <option value="1">BDT 2000</option>
                              <option value="2">BDT 3000</option>
                              <option value="3">BDT 4000</option>
                              <option value="4">BDT 5000</option>
                              <option value="5">BDT 6000</option>
                              <option value="6">BDT 7000</option>
                              <option value="7">BDT 8000</option>
                              <option value="8">BDT 9000</option>
                              <option value="9">BDT 10000</option>
                              <option value="10">BDT 11000</option>
                              <option value="11">BDT 12000</option>
                              <option value="12">BDT 13000</option>
                              <option value="13">BDT 14000</option>
                              <option value="14">BDT 15000</option>
                              <option value="15">BDT 16000</option>
                              <option value="16">BDT 17000</option>
                              <option value="17">BDT 18000</option>
                              <option value="18">BDT 19000</option>
                              <option value="19">BDT 20000</option>
                          </select>
                        </div>
                      </div>


                      <div class="input-text">

                        <div class="row">
                            <form>
                              <label>Teaching Method</label>
                                <select class="form-control selectpicker" multiple>

                                  <option value="1">Student's Home</option>
                                  <option value="2">Teacher's Home</option>
                                  <option value="3">Online</option>
                              </select>
                            </form>
                        </div>

                        <div class="row">
                            <form>
                              <label >Preferred Class</label>
                                <select class="form-control selectpicker" multiple>
                                  <option value="1">Pre-schooling</option>
                                  <option value="2">Play</option>
                                  <option value="3">Nursery</option>
                                  <option value="4">KG</option>
                                  <option value="5">Class-1</option>
                                  <option value="6">Class-2</option>
                                  <option value="7">Class-3</option>
                                  <option value="8">Class-4</option>
                                  <option value="9">Class-5</option>
                                  <option value="10">Class-6</option>
                                  <option value="11">Class-7</option>
                                  <option value="12">Class-8</option>
                                  <option value="13">Class-9</option>
                                  <option value="14">O-level</option>
                                  <option value="15">A-level</option>
                                  <option value="16">SSC</option>
                                  <option value="17">HSC</option>
                                  <option value="18">Other Extra Programs</option>

                              </select>
                            </form>
                        </div>

                      </div>

                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button">Next Step</button>
                        </div>
                    </div>



                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Files Information</h2>
                            <p>Attach your documents.</p>
                        </div>


                        <label>NID/Passport/Birth Certificate:</label>
                            <input type="file" accept="image/jpg, image/jpeg, image/png" class="box">
                            <p></p>

                        <label>SSC/O-level/Dakhil/Certificate:</label>
                            <input type="file" accept="image/jpg, image/jpeg, image/png" class="box">
                            <p></p>

                        <label>HSC/A-level/Alim/Certificate:</label>
                            <input type="file" accept="image/jpg, image/jpeg, image/png" class="box">
                            <p></p>

                       <label>Admission Slip/University ID:</label>
                            <input type="file" accept="image/jpg, image/jpeg, image/png" class="box">
                            <p></p>


                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="submit_button">Submit</button>
                        </div>
                    </div>
                     <div class="main">
                         <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                             <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                        </svg>

                        <div class="text congrats">
                            <h2>Congratulations!</h2>
                            <p>Thanks Mr./Ms. <span class="shown_name"></span> Your information have been submitted successfully for the future reference, we will contact you soon.</p>
                        </div>

                        <div>
                          <br></br>
                          <br></br>
                          <br></br>
                            <a href="tutorpage.php" class="btn btn-primary" role="button">OK</a>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

    <script src="js/tutorform.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


</body>
</html>
