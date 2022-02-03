<!DOCTYPE html>
<html>
<head>
    <title>HousedHealth</title>
    <link rel="stylesheet" type="text/css" href="CSS/HomepageStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-hospital-medical-kiranshastry-lineal-color-kiranshastry-2.png"/>
    <style>
        body{
            background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
  
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;

  min-height: 100vh;
  font-family: 'Lato', sans-serif;
  margin: 0;
        }
        .mul-select{
            width: 80%;
        }
    </style>
</head>
<body>
    <div id="buttons">
        <button class="cart">Cart</button>
        <button class="logout">Logout</button>
    </div>
    <div>
        <q id="quote"><b>We are here to make you feel better.</b></q>
    </div> 
    <div class="symptoms">
        <div class="row justify-content-center align-items-center">
            <h1>Select Symptoms</h1>    
        </div>
        <br>
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-10 col-md-10 col-lg-8 col-xl-7">
                <div class="form-group" style="display: inline">
                    <form enctype="multipart/form-data" method="post" action="hello.py">
                    <select name="symptomsss" multiple="true" class="mul-select" style="display: inline">
                            <option value="Diabetes">Diabetes</option>
                            <option value="Diarrhea">Diarrhea</option>
                            <option value="Fever">Fever</option>  
                            <option value="Contipation">Contipation</option>
                            <option value="Colic">Colic</option>
                            <option value="Cough">Cough</option>
                            <option value="High Cholestrol">High Cholestrol</option>
                            <option value="Parasite Infection">Parasite Infection</option>
                            <option value="Toothache">Toothache</option>
                            <option value="Cold">Cold</option>
                            <option value="Flu">Flu</option>
                            <option value="Urine Odor">Urine Odor</option>
                            <option value="Ulcer">Ulcer</option>
                            <option value="Sore Throat">Sore Throat</option>
                            <option value="Arthritis">Arthritis</option>
                            <option value="Hair Loss">Hair Loss</option>
                            <option value="Digestion">Digestion</option>
                            <option value="Eczema">Eczema</option>
                            <option value="Insomnia">Insomnia</option>
                            <option value="Blood Pressure">Blood Pressure</option>
                            <option value="Anemia">Anemia</option>
                            <option value="Skin Damage">Skin Damage</option>
                            <option value="Weak Eyesight">Weak Eyesight</option>
                            <option value="Spasm">Spasm</option>
                            <option value="Gas">Gas</option>
                            <option value="Skin Swelling">Skin Swelling</option>
                            <option value="Blood Clotting">Blood Clotting</option>
                            <option value="Asthma">Asthma</option>
                            <option value="Dehydration">Dehydration</option>
                            <option value="Muscle Soreness">Muscle Soreness</option>
                            <option value="Nausea">Nausea</option>
                            <option value="Jaundice">Jaundice</option>
                            <option value="Scurvy">Scurvy</option>
                            <option value="Vomitting">Vomitting</option>
                            <option value="Vertigo">Vertigo</option>
                            <option value="Morning Sickness">Morning Sickness</option>
                            <option value="Athletes Foot">Athletes Foot</option>
                            <option value="Ringworm">Ringworm</option>
                            <option value="Dental Plaque">Dental Plaque</option>
                            <option value="Tooth Decay">Tooth Decay</option>
                            <option value="Wounds">Wounds</option>
                            <option value="Itching">Itching</option>
                            <option value="Over Weight">Over Weight</option>
                            <option value="Anxiety">Anxiety</option>
                            <option value="Stress">Stress</option>
                    </select>
      
                    <input type="submit" value="Submit" class="cart" style="display: inline; background-color: #DAF7A6; color: black">
                    </form>
                </div> 
           </div>
        </div>
    </div>
    <script>
        var last_valid_selection = null;

          $('.mul-select').change(function(event) {

            if ($(this).val().length > 5) {

              $(this).val(last_valid_selection);
            } else {
              last_valid_selection = $(this).val();
            }
          });
        $(document).ready(function(){
            $(".mul-select").select2({
                    placeholder: "Select Symptoms", //placeholder
                    tags: true,
                    tokenSeparators: ['/',',',';'," "] 
                });
           
            })
    </script>
    
</body>
</html>