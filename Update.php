<?php 
if ($_GET['city'] != ""){
    $city = $_GET["city"];
   }
    
    ?>
    <html>
<head>
<title> Covid Esential Site In Vidharbha
</title>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-database.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

<div class="container ">
<div >
    
<form class="form">
<H1 > Update Details For <?php echo $city;?></h1>

 <ul class="list-unstyled">
          <li>
              First, You Will Need Just the Sr. no Listed In the Table below Like :- ( Sr no = 321)  as Pharmacy Number <br> Please Take Care That Data Divided According to Districts / Zilla
          </li>
          <li>
              Then Click Here Update Your Stock. 
          </li>
      </ul>
      
      </h4>
      
       <small > This Database is Maintained By Two Unknown People in Vidharbha For Transperncy and Ease of Getting Medicine, If you want to give your contribution in Good Faith of the COVID - 19 Patients , Please Email :- <a href="unknown2hands@gmail.com">unknown2hands@gmail.com</a> ( Only Help Is Needed ) ( We Don't Take any kind Of Donation )</small>
<div class="row border">
<div class="col">
<label  class="form-label"> Enter Pharmacy Number </label>
</div>
<div class="col">
<input type="number" class="form-control" id="pharid" >
<h4  class="btn btn-primary" onclick="find()">Find <h4>
</form>
<form>
</div>
</div>
<div class="row border">
<div class="col">
<label class="form-label"> Enter Pharmacy Details </label>
</div>
<div class="col">
<input type=="text"  class="form-control" id="pharno"><br>
</div>
</div>
<div class="row border">
<div class="col">
<label class="form-label">  Pharmacy Name </label>
</div>
<div class="col">
<input type=="number"  class="form-control" id="pharname" readonly><br>
</div>
</div>

<div class="row border">
<div class="col">
<label class="form-label"> Ramadisiver </label>
</div>
<div class="col">
<input type="radio" id="pharramchioce" name="ram" value="yes"><label> Yes</label><br>
<input type="radio" id="pharramchioce" name="ram" value="no"><label> No</label><br>
</div>
</div>

<div class="row border">
<div class="col">
<label class="form-label"> Favivir </label>
</div>
<div class="col">
<input type="radio" id="pharfavchioce" name="fav" value="yes"><label> Yes</label><br>
<input type="radio" id="pharfavchioce" name="fav" value="no"><label> No</label><br>
</div>
</div>

<div class="row border" >
<div class="col">
<label class="form-label"> Tocilizumab </label>
</div>
<div class="col">
<input type="radio" id="phartacchioce" name="toc" value="yes"><label> Yes</label><br>
<input type="radio" id="phartacchioce" name="toc" value="no"><label> No</label><br>
</div>
</div>


<div class="row border ">
<div class="col">
<label class="form-label"> Zinc </label>
</div>
<div class="col">
<input type="radio" id="pharzincchioce" name="zinc" value="yes"><label> Yes</label><br>
<input type="radio" id="pharzincchioce" name="zinc" value="no"><label> No</label><br>
</div>
</div>

<div class="row border">
<div class="col">

<label class="form-label"> MultiVitamin </label>
</div>
<div class="col ">
<input type="radio" id="pharvitchioce" name="vit" value="yes"><label> Yes</label><br>
<input type="radio" id="pharvitchioce" name="vit" value="no"><label> No</label><br>
</div>
</div>

<div class="row border">
<div class="col">

<label class="form-label"> OtherEssential Need  </label>
</div>
<div class="col">
<input type="radio" id="pharothchioce" name="oth" value="yes"><label> Yes</label><br>
<input type="radio" id="pharothchioce" name="oth" value="no"><label> No</label><br>

</div>
</div>
<div class="row border">
<div class="col">

<label class="form-label"> Blood Donar Available  </label>
</div>
<div class="col">
<input type="radio" id="pharblochioce" name="blo" value="yes"><label> Yes</label><br>
<input type="radio" id="pharblochioce" name="blo" value="no"><label> No</label><br>
</div>
</div>



<input type="submit" class="btn btn-primary" id="submit " value="Update" onclick="update()">


</form>
</div>
    




<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyC0uwgtq-2736hSweK9_PCAjf2Nyi3ddhg",
    authDomain: "covid-f95f9.firebaseapp.com",
    databaseURL: "https://covid-f95f9-default-rtdb.firebaseio.com",
    projectId: "covid-f95f9",
    storageBucket: "covid-f95f9.appspot.com",
    messagingSenderId: "279866437342",
    appId: "1:279866437342:web:84661a60cae028c6695c4f",
    measurementId: "G-1SV6JLK6FH"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

</script>
<script>
function update(){
  var a = document.getElementById("pharid").value;
  var pharno = document.getElementById("pharno").value;
  if(document.getElementById('pharramchioce').checked == true) {   
    var pharramchioce = "Yes"  
} else {  
  var pharramchioce = "No"   
}  

if(document.getElementById('pharfavchioce').checked == true) {   
    var pharfavchioce = "Yes"  
} else {  
  var pharfavchioce = "No"   
}  

if(document.getElementById('phartacchioce').checked == true) {   
    var phartacchioce = "Yes"  
} else {  
  var phartacchioce = "No"   
}  

if(document.getElementById('pharzincchioce').checked == true) {   
    var pharzincchioce = "Yes"  
} else {  
  var pharzincchioce = "No"   
}  
if(document.getElementById('pharvitchioce').checked == true) {   
    var pharvitchioce = "Yes"  
} else {  
  var pharvitchioce = "No"   
}  
if(document.getElementById('pharothchioce').checked == true) {   
    var pharothchioce = "Yes"  
} else {  
  var pharothchioce = "No"   
}  
if(document.getElementById('pharblochioce').checked == true) {   
    var pharblochioce = "Yes"  
} else {  
  var pharblochioce = "No"   
}  


  firebase.database().ref("/<?php echo $city; ?>/").child(a).update({
    1:pharramchioce,
    2:pharfavchioce,
    3:phartacchioce,
    4:pharzincchioce,
    5:pharvitchioce,
    6:pharothchioce,
    7:pharblochioce,
    8:pharno
    
  })
}

function find(){
  
  var data = firebase.database().ref("/Nagpur/");
  data.on('value', (snapshot)=>{
    const d = snapshot.val();
    snapshot.forEach((childSnapshot) => {
      var childKey = childSnapshot.key;
      var childData = childSnapshot.val();
      var a = document.getElementById("pharid").value;
     
    
      if(childKey == a){
        console.log("Done")
        console.log(a)
        childSnapshot.forEach((childSnapshot) => {
        var subChildKey = childSnapshot.key;
        var subChildData = childSnapshot.val();
        console.log(subChildKey)

        if(subChildKey == "0"){
          document.getElementById("pharname").value = subChildData;
          
        }else if(subChildKey == "1"){
          document.getElementById("pharramchioce").checked = subChildData;
         

        }else if(subChildKey == "2"){
          document.getElementById("pharfavchioce").checked = subChildData;
          
        }else if(subChildKey == "3"){
          document.getElementById("phartacchioce").checked = subChildData;
          
        }else if(subChildKey == "4"){
          document.getElementById("pharzincchioce").checked = subChildData;
          
        }else if(subChildKey == "5"){
          document.getElementById("pharvitchioce").checked = subChildData;
          
        }else if(subChildKey == "6"){
          document.getElementById("pharothchioce").checked = subChildData;
          
        }else if(subChildKey == "7"){
          document.getElementById("pharblochioce").checked = subChildData;
          
        }else if(subChildKey == "8"){
          document.getElementById("pharno").value = subChildData;
          
        }

        
    });
       

      }

        
    });

    
    
  });
  
  
  alert("Data Has Been Updated");

    
    

    

    

   
    


}




</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
