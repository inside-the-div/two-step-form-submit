<?php 



	if(isset($_POST['submit'])){
		for($i=1;$i<=8;$i++){



			if($_POST['o-'.$i.'-gender'] !=''){

				echo $_POST['o-'.$i.'-gender'].'   '.$i.' -- <br>';
			}


		}
	}





?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
	

	<form action="" method="post">
		
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

		  <input type="submit" name="submit">
	</form>


</body>
</html>