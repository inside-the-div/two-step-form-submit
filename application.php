<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>personal information</title>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  
  
  
  <div class="container my-5">
    <div class="row">

      <div class="col-12">
        <div class="cards p-3">
          
          <a href="index.php" class="button mb-3">Back</a>

          <form action="" method="post">
            <!-- personal info start -->
            <div id="personal-info">

              <div class="row">
                <div class="col-12 col-lg-8">
                  <h5>Personal information</h5>
                </div>
                <div class="col-12 col-lg-4">
                  <input id="today-date" required type="date"  onchange="handler(event)"   class="form-control input-field date" name="today" value="" >
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-lg-4">
                  Applicant First Name <span class="text-danger">*</span><br>
                  <input type="text" required name="f-name" class=" form-control input-field">
                </div>

                <div class="col-lg-4">
                  Applicant Middle Name (<span class="text-info">Optional</span>)<br>
                  <input type="text"  name="m-name" class="form-control">
                </div>

                <div class="col-lg-4">
                  Applicant Last Name <span class="text-danger">*</span><br>
                  <input type="text" required name="l-name" class="form-control input-field">
                </div>
                  
              </div>

              <div class="row mt-3">
                <div class="col-lg-6">
                  Social Security Number <span class="text-danger">*</span>
                  (<span class="text-info">maximum 9 digit</span>)
                  <br>
                  <input type="number" id="s_security" required name="security" class="form-control input-field" >
                </div>

                <div class="col-lg-6">
                  Date of birth: <span class="text-danger">*</span><br>
                  <input class="form-control input-field date"  type="date"  onchange="handler(event)"   name="a_date_of_birth" >
                </div>
              </div>



              <div class="row mt-3">
                <div class="col-lg-6">
                  Physical Address<span class="text-danger">*</span><br>

                  <div class="row mt-2">
                    <div class="col-4">Address line 1</div>
                    <div class="col-8"><input type="text" required name="p_l_1" class="form-control input-field"></div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-4">Address line 2</div>
                    <div class="col-8"><input type="text"  name="p_l_1" class="form-control"></div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-4">City</div>
                    <div class="col-8"><input type="text" required name="p_city" class="form-control input-field"></div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-4">State</div>
                    <div class="col-8"><input type="text" required name="p_state" class="form-control input-field"></div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-4">Zipcode (<span class="text-info">Max: 5 digit</span>)</div>
                    <div class="col-8"><input type="number" required name="p_zipcode" class="form-control input-field" name="p_zip" id="p_zip"></div>
                  </div>
                  
                </div>

                <div class="col-lg-6">
                 
                  Mailing Address (<span class="text-info">Optional</span>)<br>

                  <div class="row mt-2">
                    <div class="col-4">Address line 1</div>
                    <div class="col-8"><input type="text"  name="m_l_1" class="form-control "></div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-4">Address line 2</div>
                    <div class="col-8"><input type="text"  name="m_l_2" class="form-control"></div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-4">City</div>
                    <div class="col-8"><input type="text"  name="m_city" class="form-control "></div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-4">State</div>
                    <div class="col-8"><input type="text"  name="m_state" class="form-control "></div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-4">Zipcode (<span class="text-info">Max: 5 digit</span>)</div>
                    <div class="col-8"><input type="number"  name="m_zipcode" class="form-control" id="m_zip"></div>
                  </div>

                </div>
              </div>

              <div class="row mt-2">
                <div class="col-12 col-lg-6">
                  Driver License No <span class="text-danger">*</span>  <input class="form-control input-field" type="text" required name="d_license">
                </div>
                <div class="col-12 col-lg-6">
                   Expiration  <span class="text-danger">*</span> <input class="form-control input-field" type="date"  onchange="handler(event)"   required name="expiration" data-date="check">
                </div>
              </div>

              <div class="row mt-2">
                <div class="col-12 col-lg-4">
                  Home phone (<span class="text-info"> optional / Must: 11 digit</span>) <input class="form-control " type="text"  name="phone" id="phone">
                </div>
                <div class="col-12 col-lg-4">
                   Call <span class="text-danger">*</span> (<span class="text-info">Must: 11 digit</span>) <input class="form-control input-field" type="text" required name="call" id="call">
                </div>

                <div class="col-12 col-lg-4">
                   Email <span class="text-danger">*</span> : <input class="form-control input-field" type="text" required name="email">
                </div>
              </div>

              <div class="row mt-2">
                
                <div class="col-12 mb-2">
                  Demographics 
                </div>

                <div class="col-12 col-lg-3">
                  Gender <span class="text-danger">*</span>
                  <select name="gender" id="" class="form-control input-field">
                    <option value="">None</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>

                <div class="col-12 col-lg-3">
                  Disabling Condition <span class="text-danger">*</span>
                  <select name="Disabling_Condition" id="" class="form-control input-field">
                    <option value="">None</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Unknown">Unknown</option>
                  </select>
                </div>


                <div class="col-12 col-lg-3">
                 Marital Status <span class="text-danger">*</span>
                  <select name="Marital_Status" id="" class="form-control input-field">
                    <option value="">None</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Legally Separated">Legally Separated</option>
                    <option value="Married">Married</option>
                    <option value="Partner">Partner</option>
                    <option value="Separated">Separated</option>
                    <option value="Single">Single</option>
                    <option value="Widowed">Widowed</option>
                  </select>
                </div>

                <div class="col-12 col-lg-3">
                  Primary Language (<span class="text-info">Optional</span>) </label> <input type="text"  name="Primary_Language"  class="form-control" />
                </div>
               </div>

              <div class="row mt-2">
                <div class="col-12 col-lg-4">
                  Household Type <span class="text-danger">*</span>
                  <select name="Household_Type" id="" class="form-control input-field">
                    <option value="">None</option>
                    <option value="Multigenerational Household">Multigenerational Household</option>
                    <option value="Single Person">Single Person</option>
                    <option value="Non-related Adults with children">Non-related Adults with children</option>
                    <option value="Two Adults No Children">Two Adults No Children</option>
                    <option value="Other">Other</option>
                    <option value="Two Parent Household">Two Parent Household</option>
                    <option value="Single Parent Female">Single Parent Female</option>
                    <option value="Unknown or not reported">Unknown / not reported</option>
                    <option value="Single Parent Male">Single Parent Male</option>
                  </select>
                </div>                

                <div class="col-12 col-lg-4">
                  Housing Type <span class="text-danger">*</span>
                  <select name="Housing_Type" id="" class="form-control input-field">
                    <option value="">None</option>
                    <option value="Homeless">Homeless</option>
                    <option value="Homeless by Choice">Homeless by Choice</option>
                    <option value="Living with friends or family">Living with friends or family</option>
                    <option value="Other Permanent Housing">Other Permanent Housing</option>
                    <option value="Rent Subsidized (Hud, Section 8, etc.)">Rent Subsidized (Hud, Section 8, etc.)</option>
                    <option value="Rent Unsubsidized">Rent Unsubsidized</option>
                    <option value=" Transitional/Shelter"> Transitional/Shelter</option>
                   
                  </select>
                </div>
                
                <div class="col-12 col-lg-4">
                  Education Highest Grade Completed <span class="text-danger">*</span>
                  <input   type="text" required name="Education_Highest_Grade_Completed" value="" class="form-control input-field" />
                </div>
              </div>
                

              <div class="row mt-2">

                <div class="col-12 col-lg-3">
                  Military Status <span class="text-danger">*</span>
                  <select name="Military_Status" id="" class="form-control input-field">
                    <option value="">None</option>
                    <option value="Active">Active</option>
                    <option value="Never Served in Military">Never Served in Military</option>
                    <option value="Veteran">Veteran</option>
                  </select>
                </div>

                <div class="col-12 col-lg-3">
                 Direct Purchase <span class="text-danger">*</span>
                  <select name="Direct_Purchase" id="" class="form-control input-field">
                    <option value="">None</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="col-12 col-lg-3">
                 Employment Based <span class="text-danger">*</span>
                  <select name="Employment_Based" id="" class="form-control input-field">
                    <option value="">None</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>


                <div class="col-12 col-lg-3">
                 Medicaid <span class="text-danger">*</span>
                  <select name="Medicaid" id="" class="form-control input-field">
                    <option value="">None</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>


                <div class="col-12 col-lg-3">
                 Medicare <span class="text-danger">*</span>
                  <select name="Medicare" id="" class="form-control input-field">
                    <option value="">None</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>


                <div class="col-12 col-lg-3">
                 Military Health Care <span class="text-danger">*</span>
                  <select name="Military_Health_Care" id="" class="form-control input-field">
                    <option value="">None</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div> 

              <div class="col-12 col-lg-3">
                 State Children’s Health Insurance <span class="text-danger">*</span>
                  <select name="S_Health_Insurance" id="" class="form-control input-field">
                    <option value="">None</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>                
                <div class="col-12 col-lg-3">
                State Health Insurance Adult <span class="text-danger">*</span>
                  <select name="State_Health_Insurance_Adult" id="" class="form-control input-field">
                    <option value="">None</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>

              </div>

              <div class="row mt-2">


                <div class="col-12 col-lg-4">
                  Race <span class="text-danger">*</span>
                    <select name="Race" id="" class="form-control input-field">
                      <option value="">None</option>
                      <option value="Asian">Asian</option>
                      <option value="Black or African American">Black or African American</option>
                      <option value="Caucasian or White">Caucasian or White</option>
                      <option value="Hispanic">Hispanic</option>
                      <option value="Native American">Native American</option>
                      <option value="Pacific Islander">Pacific Islander</option>
                      <option value="Unknown">Unknown</option>
                      <option value="Bi-racial or Multi-racial">Bi-racial or Multi-racial</option>
                    </select>
                </div>

                <div class="col-12 col-lg-4">
                  Ethnicity <span class="text-danger">*</span>
                    <select name="Ethnicity" id="" class="form-control input-field">
                      <option value="">None</option>
                      <option value="Hispanic, Latin or Spanish Origin">Hispanic, Latin or Spanish Origin</option>
                      <option value="Not Hispanic, Latin or Spanish Origin">Not Hispanic, Latin or Spanish Origin</option>
                      <option value="Unknown">Unknown</option>
                      
                    </select>
                </div>



              </div>
                

              <div class="row mt-2">
                <div class="col-12">
                  

                <table  class="table">
                    <tr>
                      <td colspan="6" >
                         Income: (<span class="text-info">Optional</span>)<br>  Please provide actual monthly dollar amount for all that  apply.
                      </td>
                    </tr>

                    <tr>
                      <th colspan="2"  class="text-center">
                        Income Source
                      </th>

                      <th colspan="1"  class="text-center">
                        Income Total
                      </th>


                      <th colspan="2"  class="text-center">
                        Income Source
                      </th>
                      <th colspan="1"  class="text-center">
                        Income Total
                      </th>
                    </tr>

                    <tr>
                      <td colspan="2" >
                        Alimony or other Spousal Support
                      </td>

                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-1">
                        </td>


                        <td colspan="2"  >
                          Public Assistance 
                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-2">
                        </td>
                      </tr>


                      <tr>
                        <td colspan="2"  >
                          Black Lung
                        </td>

                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-3" >
                        </td>


                        <td colspan="2"  >
                          Rental Income 
                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-4" >
                        </td>
                      </tr>

                      <tr>
                        <td colspan="2"  >
                          Child Support
                        </td>

                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-5" >
                        </td>


                        <td colspan="2"  >
                          Retirement Income from Social Security 
                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-6" >
                        </td>
                      </tr>             
                      <tr>
                        <td colspan="2"  >
                          Earnings
                        </td>

                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-7" >
                        </td>


                        <td colspan="2"  >
                          Royalties
                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-8" >
                        </td>
                      </tr>             

                      <tr>
                        <td colspan="2"  >
                          Earnings
                        </td>

                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-7" >
                        </td>


                        <td colspan="2"  >
                          Royalties
                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-8" >
                        </td>
                      </tr>

                      <tr>
                        <td colspan="2"  >
                          Educational Assistance
                        </td>

                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-9" >
                        </td>


                        <td colspan="2"  >
                          Short Term Disability
                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-10" >
                        </td>
                      </tr>

                      <tr>
                        <td colspan="2"  >
                          EITC 
                        </td>

                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-11" >
                        </td>


                        <td colspan="2"  >
                          Social Security Disability Income (SSDI)
                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-12" >
                        </td>
                      </tr>

                      <tr>
                        <td colspan="2"  >
                          Estate/Trust
                        </td>

                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-13" >
                        </td>


                        <td colspan="2"  >
                          State Assistance (IS General)
                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-14" >
                        </td>
                      </tr>

                      <tr>
                        <td colspan="2"  >
                          Interest/Dividends
                        </td>

                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-15" >
                        </td>


                        <td colspan="2"  >
                          Supplemental Security Income (SSI)
                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-16" >
                        </td>
                      </tr>             

                      <tr>
                        <td colspan="2"  >
                          Long Term Disability
                        </td>

                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-17" >
                        </td>


                        <td colspan="2"  >
                          TANF
                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-18" >
                        </td>
                      </tr>


                      <tr>
                        <td colspan="2"  >
                          Non Cash Benefits
                        </td>

                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-19" >
                        </td>


                        <td colspan="2"  >
                          Unemployment Insurance
                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-20" >
                        </td>
                      </tr>



                      <tr>
                        <td colspan="2"  >
                          Other Income Source
                        </td>

                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-21" >
                        </td>


                        <td colspan="2"  >
                          VA Non-Service Connected Disability
                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-22" >
                        </td>
                      </tr>

                      <tr>
                        <td colspan="2"  >
                          Outside Assistance
                        </td>

                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-23" >
                        </td>


                        <td colspan="2"  >
                          VA Service Connected Disability 
                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-24" >
                        </td>
                      </tr>

                      <tr>
                        <td colspan="2"  >
                          Pension/Retirement
                        </td>

                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-25" >
                        </td>


                        <td colspan="2"  >
                          Veteran’s Benefits
                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-26" >
                        </td>
                      </tr>

                      <tr>
                        <td colspan="2"  >
                          Private Disability Insurance
                        </td>

                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-27" >
                        </td>


                        <td colspan="2"  >
                          Worker’s Compensation
                        </td>
                        <td colspan="1"  class="text-center">
                          <input type="number" class=""  name="income-28" >
                        </td>
                      </tr>


                    <tr>
                      <td colspan="6"  >
                        Food Stamps <span class="text-danger">*</span>  <input type="text" class="input-field" required name="Food_Stamps">
                      </td>
                    </tr>

                    <tr>
                      <th colspan="2"  >
                        Food
                      </th>

                      <th colspan="2"  >
                        Shelter 
                      </th>

                      <th colspan="2"  >
                        Utilities 
                      </th>
                    </tr>

                    <tr>
                      <th colspan="2"  >
                        Total <span class="text-danger">*</span>
                        <input type="text" class="input-field" required name="t_food">
                      </th>

                      <th colspan="2"  >
                        Total <span class="text-danger">*</span>
                        <input type="text" class="input-field" required name="t_Shelter">
                      </th>

                      <th colspan="2"  >
                        Total <span class="text-danger">*</span>
                        <input type="text" class="input-field" required name="t_Utilities">
                      </th>
                    </tr>

                </table>
                </div>
              </div>


              <div class="row">
                <div class="col-12 col-lg-4">
                  Dwelling Type <span class="text-danger">*</span>
                  <select name="Dwelling_Type" id="" class="form-control input-field">
                    <option value="">None</option>
                    <option value="Site Built (Single Family)">Site Built (Single Family)</option>
                    <option value="Multi-Unit">Multi-Unit</option>
                    <option value="Doublewide Owner">Doublewide Owner</option>
                    <option value="Mobile Home Owner">Mobile Home Owner</option>
                    <option value="Modular Home (No wheels)">Modular Home (No wheels)</option>
                    <option value="Duplex">Duplex</option>
                    <option value="Triplewide Owner">Triplewide Owner</option>
                    <option value="Triplewide Owner">Triplewide Owner</option>
                    <option value="Mobile home Renter">Mobile home Renter</option>
                    <option value="Doublewide Renter">Doublewide Renter</option>
                    <option value="Triplewide  Renter">Triplewide  Renter</option>
                  </select>
                </div>

                <div class="col-12 col-lg-8 mt-4">
                  <div class="text-right">
                    <button  id="secondPage-btn" class="button input-btn">Next</button>
                  </div>
                </div>

              </div>

            </div>
            <!-- personal info end -->


             <!-- other info  start -->
              <div id="other-info-1" class="py-5">
                <div class="row">
                  
                  <div class="col-12 text-center py-5">
                    <h4 >Other Household Members – complete for each member (<span class="text-info">optional</span>)</h4>
                  </div>

                  <div class="col-12 col-lg-4">
                    <div class="sub-cards p-2">
                      <div class="row">
                        <div class="col-12 text-left">
                          <h5 class="other-title">Members - 1(<span class="text-info">optional</span>)</h5>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-lg-12">
                          First Name <br>
                          <input type="text"  name="o-1-f-name" class="form-control ">
                        </div>
                        <div class="col-lg-12 mt-1">
                          Middle Name <br>
                          <input type="text"  name="o-1-m-name" class="form-control ">
                        </div>
                        <div class="col-lg-12 mt-1">
                          Last Name <br>
                          <input type="text"  name="o-1-l-name" class="form-control ">
                        </div>
                          
                        <div class="col-12 mt-1">
                          Gender:
                          <select name="o-1-gender" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>

                        <div class="col-12 mt-1">
                          Date of birth: <br>
                          <input class="form-control "  type="date"  onchange="handler(event)"   name="o-1-date_of_birth">
                        </div>

                        <div class="col-12 mt-1">
                          Disabling Condition :
                          <select name="o-1-Disabling_Condition" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Unknown">Unknown</option>
                          </select>
                        </div>
                        <div class="col-12 mt-1">
                         Marital Status:
                          <select name="o-1-Disabling_Condition" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Legally Separated">Legally Separated</option>
                            <option value="Married">Married</option>
                            <option value="Partner">Partner</option>
                            <option value="Separated">Separated</option>
                            <option value="Single">Single</option>
                            <option value="Widowed">Widowed</option>
                          </select>
                        </div>
                     </div>
                    </div>
                  </div>


                  <!-- other 2 -->
                  <div class="col-12 col-lg-4 ">
                    <div class="sub-cards p-2">
                      <div class="row">
                        <div class="col-12 text-left">
                          <h5 class="other-title">Members - 2(<span class="text-info">optional</span>)</h5>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-lg-12">
                          First Name <br>
                          <input type="text"  name="o-2-f-name" class="form-control ">
                        </div>
                        <div class="col-lg-12 mt-1">
                          Middle Name <br>
                          <input type="text"  name="o-2-m-name" class="form-control ">
                        </div>
                        <div class="col-lg-12 mt-1">
                          Last Name <br>
                          <input type="text"  name="o-2-l-name" class="form-control ">
                        </div>
                          
                        <div class="col-12 mt-1">
                          Gender:
                          <select name="o-2-gender" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>

                        <div class="col-12 mt-1">
                          Date of birth: <br>
                          <input class="form-control "  type="date"  onchange="handler(event)"   name="o-2-date_of_birth">
                        </div>

                        <div class="col-12 mt-1">
                          Disabling Condition :
                          <select name="o-2-Disabling_Condition" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Unknown">Unknown</option>
                          </select>
                        </div>
                        <div class="col-12 mt-1">
                         Marital Status:
                          <select name="o-2-Disabling_Condition" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Legally Separated">Legally Separated</option>
                            <option value="Married">Married</option>
                            <option value="Partner">Partner</option>
                            <option value="Separated">Separated</option>
                            <option value="Single">Single</option>
                            <option value="Widowed">Widowed</option>
                          </select>
                        </div>
                     </div>
                    </div>
                  </div>
                  <!-- end other 2 -->




                  <!-- other 3  -->
                  <div class="col-12 col-lg-4 ">
                    <div class="sub-cards p-2">
                      <div class="row">
                        <div class="col-12 text-left">
                          <h5 class="other-title">Members - 3(<span class="text-info">optional</span>)</h5>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-lg-12">
                          First Name <br>
                          <input type="text"  name="o-3-f-name" class="form-control ">
                        </div>
                        <div class="col-lg-12 mt-1">
                          Middle Name <br>
                          <input type="text"  name="o-3-m-name" class="form-control ">
                        </div>
                        <div class="col-lg-12 mt-1">
                          Last Name <br>
                          <input type="text"  name="o-3-l-name" class="form-control ">
                        </div>
                          
                        <div class="col-12 mt-1">
                          Gender:
                          <select name="o-3-gender" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>

                        <div class="col-12 mt-1">
                          Date of birth: <br>
                          <input class="form-control "  type="date"  onchange="handler(event)"   name="o-3-date_of_birth">
                        </div>

                        <div class="col-12 mt-1">
                          Disabling Condition :
                          <select name="o-3-Disabling_Condition" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Unknown">Unknown</option>
                          </select>
                        </div>
                        <div class="col-12 mt-1">
                         Marital Status:
                          <select name="o-3-Disabling_Condition" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Legally Separated">Legally Separated</option>
                            <option value="Married">Married</option>
                            <option value="Partner">Partner</option>
                            <option value="Separated">Separated</option>
                            <option value="Single">Single</option>
                            <option value="Widowed">Widowed</option>
                          </select>
                        </div>
                     </div>
                    </div>
                  </div>
                  <!-- end other 3  -->




                  <!-- other 4  -->
                  <div class="col-12 col-lg-4 mt-4">
                    <div class="sub-cards p-2">
                      <div class="row">
                        <div class="col-12 text-left">
                          <h5 class="other-title">Members - 4(<span class="text-info">optional</span>)</h5>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-lg-12">
                          First Name <br>
                          <input type="text"  name="o-4-f-name" class="form-control ">
                        </div>
                        <div class="col-lg-12 mt-1">
                          Middle Name <br>
                          <input type="text"  name="o-4-m-name" class="form-control ">
                        </div>
                        <div class="col-lg-12 mt-1">
                          Last Name <br>
                          <input type="text"  name="o-4-l-name" class="form-control ">
                        </div>
                          
                        <div class="col-12 mt-1">
                          Gender:
                          <select name="o-4-gender" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>

                        <div class="col-12 mt-1">
                          Date of birth: <br>
                          <input class="form-control "  type="date"  onchange="handler(event)"   name="o-4-date_of_birth">
                        </div>

                        <div class="col-12 mt-1">
                          Disabling Condition :
                          <select name="o-4-Disabling_Condition" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Unknown">Unknown</option>
                          </select>
                        </div>
                        <div class="col-12 mt-1">
                         Marital Status:
                          <select name="o-4-Disabling_Condition" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Legally Separated">Legally Separated</option>
                            <option value="Married">Married</option>
                            <option value="Partner">Partner</option>
                            <option value="Separated">Separated</option>
                            <option value="Single">Single</option>
                            <option value="Widowed">Widowed</option>
                          </select>
                        </div>
                     </div>
                    </div>
                  </div>
                  <!-- end other 4  -->





                  <!-- other 5 -->
                  <div class="col-12 col-lg-4 mt-4">
                    <div class="sub-cards p-2">
                      <div class="row">
                        <div class="col-12 text-left">
                          <h5 class="other-title">Members - 5(<span class="text-info">optional</span>)</h5>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-lg-12">
                          First Name <br>
                          <input type="text"  name="o-5-f-name" class="form-control ">
                        </div>
                        <div class="col-lg-12 mt-1">
                          Middle Name <br>
                          <input type="text"  name="o-5-m-name" class="form-control ">
                        </div>
                        <div class="col-lg-12 mt-1">
                          Last Name <br>
                          <input type="text"  name="o-5-l-name" class="form-control ">
                        </div>
                          
                        <div class="col-12 mt-1">
                          Gender:
                          <select name="o-5-gender" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>

                        <div class="col-12 mt-1">
                          Date of birth: <br>
                          <input class="form-control "  type="date"  onchange="handler(event)"   name="o-5-date_of_birth">
                        </div>

                        <div class="col-12 mt-1">
                          Disabling Condition :
                          <select name="o-5-Disabling_Condition" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Unknown">Unknown</option>
                          </select>
                        </div>
                        <div class="col-12 mt-1">
                         Marital Status:
                          <select name="o-5-Disabling_Condition" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Legally Separated">Legally Separated</option>
                            <option value="Married">Married</option>
                            <option value="Partner">Partner</option>
                            <option value="Separated">Separated</option>
                            <option value="Single">Single</option>
                            <option value="Widowed">Widowed</option>
                          </select>
                        </div>
                     </div>
                    </div>
                  </div>
                  <!-- end other 5  -->






                  <!-- other 6  -->
                  <div class="col-12 col-lg-4 mt-4">
                    <div class="sub-cards p-2">
                      <div class="row">
                        <div class="col-12 text-left">
                          <h5 class="other-title">Members - 6(<span class="text-info">optional</span>)</h5>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-lg-12">
                          First Name <br>
                          <input type="text"  name="o-6-f-name" class="form-control ">
                        </div>
                        <div class="col-lg-12 mt-1">
                          Middle Name <br>
                          <input type="text"  name="o-6-m-name" class="form-control ">
                        </div>
                        <div class="col-lg-12 mt-1">
                          Last Name <br>
                          <input type="text"  name="o-6-l-name" class="form-control ">
                        </div>
                          
                        <div class="col-12 mt-1">
                          Gender:
                          <select name="o-6-gender" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>

                        <div class="col-12 mt-1">
                          Date of birth: <br>
                          <input class="form-control"  type="date"  onchange="handler(event)"   name="o-6-date_of_birth">
                        </div>

                        <div class="col-12 mt-1">
                          Disabling Condition :
                          <select name="o-6-Disabling_Condition" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Unknown">Unknown</option>
                          </select>
                        </div>
                        <div class="col-12 mt-1">
                         Marital Status:
                          <select name="o-6-Disabling_Condition" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Legally Separated">Legally Separated</option>
                            <option value="Married">Married</option>
                            <option value="Partner">Partner</option>
                            <option value="Separated">Separated</option>
                            <option value="Single">Single</option>
                            <option value="Widowed">Widowed</option>
                          </select>
                        </div>
                     </div>
                    </div>
                  </div>
                  <!-- end other 6  -->



                  <!-- other 7  -->
                  <div class="col-12 col-lg-4 mt-4">
                    <div class="sub-cards p-2">
                      <div class="row">
                        <div class="col-12 text-left">
                          <h5 class="other-title">Members - 7(<span class="text-info">optional</span>)</h5>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-lg-12">
                          First Name <br>
                          <input type="text"  name="o-7-f-name" class="form-control ">
                        </div>
                        <div class="col-lg-12 mt-1">
                          Middle Name <br>
                          <input type="text"  name="o-7-m-name" class="form-control ">
                        </div>
                        <div class="col-lg-12 mt-1">
                          Last Name <br>
                          <input type="text"  name="o-7-l-name" class="form-control ">
                        </div>
                          
                        <div class="col-12 mt-1">
                          Gender:
                          <select name="o-7-gender" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>

                        <div class="col-12 mt-1">
                          Date of birth: <br>
                          <input class="form-control "  type="date"  onchange="handler(event)"   name="o-7-date_of_birth">
                        </div>

                        <div class="col-12 mt-1">
                          Disabling Condition :
                          <select name="o-7-Disabling_Condition" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Unknown">Unknown</option>
                          </select>
                        </div>
                        <div class="col-12 mt-1">
                         Marital Status:
                          <select name="o-7-Disabling_Condition" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Legally Separated">Legally Separated</option>
                            <option value="Married">Married</option>
                            <option value="Partner">Partner</option>
                            <option value="Separated">Separated</option>
                            <option value="Single">Single</option>
                            <option value="Widowed">Widowed</option>
                          </select>
                        </div>
                     </div>
                    </div>
                  </div>
                  <!-- end other 7  -->




                  <!-- other 8  -->
                  <div class="col-12 col-lg-4 mt-4">
                    <div class="sub-cards p-2">
                      <div class="row">
                        <div class="col-12 text-left">
                          <h5 class="other-title">Members - 8(<span class="text-info">optional</span>)</h5>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-lg-12">
                          First Name <br>
                          <input type="text"  name="o-8-f-name" class="form-control ">
                        </div>
                        <div class="col-lg-12 mt-1">
                          Middle Name <br>
                          <input type="text"  name="o-8-m-name" class="form-control ">
                        </div>
                        <div class="col-lg-12 mt-1">
                          Last Name <br>
                          <input type="text"  name="o-8-l-name" class="form-control ">
                        </div>
                          
                        <div class="col-12 mt-1">
                          Gender:
                          <select name="o-8-gender" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>

                        <div class="col-12 mt-1">
                          Date of birth: <br>
                          <input class="form-control "  type="date"  onchange="handler(event)"   name="o-8-date_of_birth">
                        </div>

                        <div class="col-12 mt-1">
                          Disabling Condition :
                          <select name="o-8-Disabling_Condition" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Unknown">Unknown</option>
                          </select>
                        </div>
                        <div class="col-12 mt-1">
                         Marital Status:
                          <select name="o-8-Disabling_Condition" id="" class="form-control ">
                            <option value="">None</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Legally Separated">Legally Separated</option>
                            <option value="Married">Married</option>
                            <option value="Partner">Partner</option>
                            <option value="Separated">Separated</option>
                            <option value="Single">Single</option>
                            <option value="Widowed">Widowed</option>
                          </select>
                        </div>
                     </div>
                    </div>
                  </div>
                  <!-- end other 8  -->
                </div>
            <!-- other info  end -->
            

  
              <div class="row">
                <div class="col-12">
                  <div class="text-right">
                    <input type="submit" name="submit" class="button input-btn">
                  </div>
                </div>
              </div>


          </form>
        </div>
      </div>
    </div>
  </div>












  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script>


    function handler(e){

      if(e.target.value.length > 10){
        e.target.classList.add("border");
        e.target.value = '';
      }else{
         e.target.classList.remove("border");
      }
    }





    $(document).ready(function(){


       var today = new Date();
       document.getElementById("today-date").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
       

      //$("#other-info-1").hide();
     


      function validation(){
        var allFields = $(".input-field");

        for(var i = 0; i < allFields.length; i++){

          if($(allFields[i]).val() == ''){
             return $(allFields[i]);
          }

          if($(allFields[i]).attr('id') == 's_security'){
            if($(allFields[i]).val().length > 9 ){
               return $(allFields[i]);
            }
          }

          if($(allFields[i]).attr('id') == 'phone' || $(allFields[i]).attr('id') == 'call'){
            if($(allFields[i]).val().length != 11 ){
               return $(allFields[i]);
            }
          }

          if($(allFields[i]).attr('id') == 'p_zip' || $(allFields[i]).attr('id') == 'm_zip'){
            if($(allFields[i]).val().length > 5 ){
               return $(allFields[i]);
            }
          }

        }

        return true;
      }


      // function validation_2(){
      //   var allFields = $(".input-field-o-1");
      //   for(var i = 0; i < allFields.length; i++){
      //     if($(allFields[i]).val() == ''){
      //        return $(allFields[i]);
      //     }
      //   }
      //   return true;
      // }



      $("#secondPage-btn").click(function(e){
        e.preventDefault();
        var element = validation()
        if( element == true){
          $("#other-info-1").show();
          $("#personal-info").hide();
        }else{
          element.addClass('border');
          element.focus();

          setTimeout(function(){ 
            element.removeClass('border')
           }, 3000);
        }
         
      })



      $("#prev-to-personal").click(function(e){
         e.preventDefault();
          $("#other-info-1").hide();
          $("#personal-info").show();
      })






    })
  </script>













</body>
</html>