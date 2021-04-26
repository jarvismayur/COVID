<?php 
if (isset($_GET['city'])){
    $city = $_GET["city"];
   }else{
       $city= "Nagpur";
   }
    
    ?>
    <html>
<head>
<title> Covid Esential Site In Maharastra
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

<div class="container-xl mx-auto  text-center">
    <div id="list" class="col"></div>
      <h2> Covid -19 Essential Medicinal Stock Avaiblity in <?php if ($city){ echo $city;}else{} ?> </h2>
      
      <?php include 'nav.php'; ?>
      
     
      <h4> All the Chemist/ General People/ Any One Can Update Thier Database By Opening Following <a href="https://gravitechdreams.000webhostapp.com/Update.php?city=<?php echo $city; ?>">Link </a> <br>
      <ul class="list-unstyled">
          <li>
              First, You Will Need Just the Sr. no Listed In the Table below Like :- ( Sr no = 321) 
          </li>
          <li>
              Then Click Here Update Your Stock. 
          </li>
      </ul>
      
      </h4>
      
       <small > This Database is Maintained By Two Unknown People in Vidharbha For Transperncy and Ease of Getting Medicine, If you want to give your contribution in Good Faith of the COVID - 19 Patients , Please Email :- <a href="unknown2hands@gmail.com">unknown2hands@gmail.com</a> ( Only Help Is Needed ) ( We Don't Take any kind Of Donation )</small>
        <center><table class="text-center" >
        <tbody id="table" style="border:1px solid black; ">
        <tr> <th class="border"  > Sr no </th><th class="border"  > Pharmacy Name </th><th  class="border" > Ramdesivier </th><th class="border"  > Favivir </th><th class="border"  > Tocilizumab </th><th  class="border" > Zinc </th><th class="border"  > MultiVitamin </th><th class="border"  > OtherEssential Need </th><th  class="border" > Blood Donar Available </th><th class="border" > Phone Number</th>
        </tbody>
        </table></center>
    </div>
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


var data = firebase.database().ref("/<?php echo $city; ?>/");
data.on('value', (snapshot)=>{
    const d = snapshot.val();
    snapshot.forEach((childSnapshot) => {
      var childKey = childSnapshot.key;
      var childData = childSnapshot.val();
      var td = document.createElement('td');
      var a = document.createTextNode(childKey)
      var tr = document.createElement('tr')
      td.classList.add("border");
      td.appendChild(a)
      
      tr.appendChild(td)



      
      childSnapshot.forEach((childSnapshot) => {
        var subChildKey = childSnapshot.key;
        var subChildData = childSnapshot.val();

        var td = document.createElement('td');
        var a = document.createTextNode(subChildData)
        td.classList.add("border");
        td.appendChild(a)
        tr.appendChild(td)

        
    });

    document.getElementById("table").appendChild(tr)
    
  });

    

    

   
    
})



</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
