<div class="tab-pane fade show active" id="Dashboards-1" role="tabpanel" aria-labelledby="Dashboards-tab">
                <div class="d-sm-flex justify-content-between align-items-center my-3">
                  <h3 class="text-dark font-weight-medium">loans dashboard process</h3>
                  <div class="link-btn-group d-flex justify-content-start align-items-start">
                    <button type="button" class="btn btn-link text-dark py-0 pl-0">Add info</button>
                    <button type="button" class="btn btn-link text-dark py-0">Get updated by email</button>
                    <button type="button" class="btn btn-link text-dark py-0">See more</button>
                  </div>
                </div>
                <div class="row">
                  
                  <div id="loan_editer" style="display:block" class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Use this to show loan summary</h4>
                        <p class="card-description">noUiSlider will keep your values within the slider range, which saves you a bunch of validation. and after summary add documents to be dwnloaded depending on loan package</p>
                        <div class="template-demo">

                          <div id="value-range" class="ul-slider slider-success"></div>
                          <p class="mt-3">Amount: <span id="huge-value"></span></p>
                          <p class="mt-3">Duration: <span id="huge-value"></span></p>
                          <p class="mt-3">Loan Package: <span id="huge-value"></span></p>
                          <p class="mt-3">another value: <span id="huge-value"></span></p>
                          <p class="mt-3"><button type="button" class="btn btn-success ml-lg-0 ml-xl-2 ml-2 ml-l mt-lg-2 mt-xl-0">Edit</button></p>

                        </div>
                        <div style="background: #fbf1ff;" class="card-body">
                          <h4 class="card-title">Use this to edit</h4>
                          <div class="template-demo">
                            <div id="skipstep" class="ul-slider slider-success"></div>
                            <div class="d-flex justify-content-between">
                              <form class="form-sample">
                                <p class="card-description">
                                  Personal info
                                </p>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Amount</label>
                                      <div class="col-sm-9">
                                        <input step="500" min="500" value="1" max="5000" type="range" class="form-control">
                                      </div>
                                    </div>
                                  </div>

                                </div>

                                <div class="col-md-12">
                                  <div class="form-group row">
                                    <label class="col-sm-9 col-form-label">Loan type</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked="">
                                          Salary Advance
                                          <i class="input-helper"></i></label>
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
                                          Collateral
                                          <i class="input-helper"></i></label>
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
                                          SML
                                          <i class="input-helper"></i></label>
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
                                          SME
                                          <i class="input-helper"></i></label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Duration</label>
                                  <div class="col-sm-9">
                                    <input step="500" min="500" value="1" max="5000" type="range" class="form-control">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <button type="button" class="btn btn-success ml-lg-0 ml-xl-2 ml-2 ml-l mt-lg-2 mt-xl-0">Done</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 grid-margin stretch-card">

                    <div class="col-12 grid-margin">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Complete Loans process</h4>
                          <form id="example-form" action="includes/logic/submit_loan.php">
                            <div>
                              <h3>Loan Details</h3>
                              <section>
                                <h3>Loan Details</h3>

                                <div class="form-group">
                                  <label for="exampleFormControlSelect2">Loan Type</label>
                                  <select class="form-control" name="loan_typeid" id="exampleFormControlSelect2">

                                    <?php $result = mysqli_query($con, "SELECT * FROM loan_types");

                                    while ($row = mysqli_fetch_assoc($result)) {
                                      $lid = $row['id'];

                                      $ltype =  $row['loan_type'];

                                      echo <<<_iwe
       
       
       <option value="$lid" > $ltype </option>
       _iwe;
                                    } ?>
                                  </select>
                                </div>


                                <div class="form-group">
                                  <label></label>
                                  <input type="number" id="amount" name="amount" class="form-control" aria-describedby="emailHelp" placeholder="Amount">
                                  <small id="emailHelp" class="form-text text-muted">Please enter the amount you want to get</small>
                                </div>
                                <div class="form-group mb_5">
                                  <label>Duration</label>
                                  <input type="number" name="duration" class="form-control" placeholder="duration">
                                </div>
                                <div class="form-group mb_5">
                                  <label>Monthly Repaymentdate</label>
                                  <input type="number" name="monthlyr_date" class="form-control" placeholder="eg 24th">
                                </div>
                                <div class="form-group">
                                  <label>Purpose</label>
                                  <textarea class="form-control" name="purpose" rows="3"></textarea>
                                </div>
                                <br>
                              </section>
                              <h3>Collateral</h3>
                              <section>
                                <h3>Collateral</h3>
                                <div class="form-group">
                                  <label>Collateral Types </label>
                                  <select class="form-control" name="collateral_type" id="loan_type">
                                    <option disabled selected>choose type</option>
                                    <?php $result = mysqli_query($con, "SELECT * FROM collateral_types");

                                    while ($row = mysqli_fetch_assoc($result)) {
                                      echo  "<option value=''.$row.''.[id]' > $row[type]</option>";
                                    } ?>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label>Description</label>
                                  <textarea class="form-control" name="desc" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                  <label>Proof of Ownership</label>
                                  <input type="file" class="form-control" name="col" placeholder="Profession">
                                </div>


                                <br>
                              </section>
                              <h3>Guarantor</h3>
                              <section>
                                <h3>Guarantor</h3>
                                <div class="form-group"><label>Guarantor Names</label>
                                  <div class="form-group row">

                                    <div class="input-group col">

                                      <input required type="text" placeholder="firstname" id="gfname" class="form-control" aria-label="Username">
                                    </div>
                                    <div class="input-group col">
                                      <label></label>
                                      <input required type="text" id="glname" class="form-control" placeholder="lastname" aria-label="Username">
                                    </div>
                                  </div>
                                  <div class="form-group mb_5">
                                    <label>Date of birth</label>
                                    <input max="2000-01-02" type="date" class="form-control" placeholder="duration">
                                  </div>
                                  <div class="form-group mb_5">
                                    <label>Phone</label>
                                    <input type="tel" name="phone" minlength="10" maxlength="10" class="form-control" placeholder="phone">
                                  </div>
                                  <div class="form-group mb_5">
                                    <label>NRC</label>
                                    <input type="text" nrc="nrc" class="form-control" placeholder="eg 1234/12/1">
                                  </div>
                                  <div class="form-group mb_5">
                                    <label>Address</label>
                                    <input type="text" address="address" class="form-control" placeholder="eg house no1, street 2">
                                  </div>
                                  <br>
                                </div>
                              </section>
                              <h3>Finish</h3>
                              <section>
                                <h3>Finish</h3>
                                <br>
                                <div class="form-group">
                                  <div class="card card-body">

                                  </div>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="checkbox" type="checkbox">
                                    I agree with the Terms and Conditions.
                                    <input type="hidden" name="add_loan" value="add_loan">
                                  </label>
                                </div>
                              </section>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-center">
                              <h4 class="card-title">Approved Loan History</h4>
                              <div class="d-flex">
                                <button type="button" class="btn btn-outline-primary btn-icon-text my-2 my-lg-0">
                                  <i class="mdi mdi-printer text-extra-small btn-icon-prepend"></i>
                                  Print
                                </button>
                                <button type="button" class="btn btn-outline-primary btn-icon-text ml-3  my-2 my-lg-0">
                                  <i class="mdi mdi-email-outline text-extra-small btn-icon-prepend"></i>
                                  Email
                                </button>
                                <button type="button" class="btn btn-primary ml-3  my-2 my-lg-0">Generate Report</button>
                              </div>
                            </div>
                            <div class="mb-4">
                              <span class="pr-2">Sales</span><span class="pr-2"><i class="mdi mdi-chevron-right"></i></span><span>Purchase history</span>
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="table-responsive">
                                  <table class="table">
                                    <thead>
                                      <tr>
                                        <th>
                                          Product
                                        </th>
                                        <th>
                                          Order ID
                                        </th>
                                        <th>
                                          Date
                                        </th>
                                        <th>
                                          Price
                                        </th>
                                        <th>
                                          Status
                                        </th>
                                        <th>
                                          Action
                                        </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td class="py-1">
                                          <div class="d-flex align-items-center"><img src="images/products-1.jpg" class="product-icon" alt="image">
                                            <div> Reebok Running Shoes</div>
                                          </div>
                                        </td>
                                        <td>
                                          #4200
                                        </td>
                                        <td>
                                          28 Dec 2019
                                        </td>
                                        <td>
                                          $342.00
                                        </td>

                                        <td>
                                          <span class="text-danger">Pending</span>
                                        </td>
                                        <td>
                                          <button class="btn btn-outline-primary btn-rounded">Details</button>

                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="py-1">
                                          <div class="d-flex align-items-center"><img src="images/products-2.jpg" class="product-icon" alt="image">
                                            <div>Puma Women's Shoes</div>
                                          </div>
                                        </td>
                                        <td>
                                          #4202
                                        </td>
                                        <td>
                                          04 Jan 2019
                                        </td>
                                        <td>
                                          $244.00
                                        </td>

                                        <td>
                                          <span class="text-success">Completed</span>
                                        </td>
                                        <td>
                                          <button class="btn btn-outline-primary btn-rounded">Details</button>

                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="py-1">
                                          <div class="d-flex align-items-center"><img src="images/products-3.jpg" class="product-icon" alt="image">
                                            <div>Acteo Men's Loafers</div>
                                          </div>
                                        </td>
                                        <td>
                                          #4210
                                        </td>
                                        <td>
                                          09 Jul 2019
                                        </td>
                                        <td>
                                          $575.00
                                        </td>

                                        <td>
                                          <span class="text-warning">Shipping</span>
                                        </td>
                                        <td>
                                          <button class="btn btn-outline-primary btn-rounded">Details</button>

                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="py-1">
                                          <div class="d-flex align-items-center"><img src="images/products-4.jpg" class="product-icon" alt="image">
                                            <div>ADL Headphones </div>
                                          </div>
                                        </td>
                                        <td>
                                          #4232
                                        </td>
                                        <td>
                                          16 May 2019
                                        </td>
                                        <td>
                                          $664.00
                                        </td>

                                        <td>
                                          <span class="text-danger">Pending</span>
                                        </td>
                                        <td>
                                          <button class="btn btn-outline-primary btn-rounded">Details</button>

                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="py-1">
                                          <div class="d-flex align-items-center"><img src="images/products-5.jpg" class="product-icon" alt="image">
                                            <div>Vuhom Sunglasses </div>
                                          </div>
                                        </td>
                                        <td>
                                          #4290
                                        </td>
                                        <td>
                                          22 Feb 2019
                                        </td>
                                        <td>
                                          $123.00
                                        </td>

                                        <td>
                                          <span class="text-danger">Pending</span>
                                        </td>
                                        <td>
                                          <button class="btn btn-outline-primary btn-rounded">Details</button>

                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>