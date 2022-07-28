<?php 
  session_start();
  include_once 'headernav.php';
  include_once 'connect.php';
 
  // // checking
  // $myenrol ="SELECT enrol_no FROM users Where enrol_no = '$enrol'";
  // $result = mysqli_query($db_con,$myenrol);
    // first semester
    $enrol = $_SESSION['enrol_no'];
    $name_query = "SELECT name FROM `bca_2920_students` WHERE enrol_no = '$enrol'";
    $res = mysqli_query($db_con,$name_query);
    $name = mysqli_fetch_assoc($res);
    $query = "SELECT * FROM `bca1` WHERE enrol_no ='$enrol'";
    $result = mysqli_query($db_con, $query);
    $ans = mysqli_fetch_assoc($result);

if(isset($ans)){
    $cf = $ans['Computer_Fundamentals'];
    $cp = $ans['C_Programming'];
    $maths = $ans['Mathematics_I'];
    $pom = $ans['Principles_of_Management'];
    $els = $ans['English_Language_Skills_1'];
    $clab = $ans['Computer_Lab_I']; 
    $dos = $ans['Dos_win_excel_pp']; 
  
}

    // second semester
    $query= "SELECT * FROM `bca2` WHERE enrol_no ='$enrol'";
    $result = mysqli_query($db_con, $query);
    $ans = mysqli_fetch_assoc($result);
if(isset($ans)){  
    $oop = $ans['OOP_C++'];
    $do = $ans['Digital_Organisation'];
    $ms = $ans['Multimedia_Systems'];
    $m2 = $ans['Mathematics_II'];
    $dnt = $ans['Dot_Net_Tech'];
    $clab2 = $ans['Computer_Lab_II']; 
    $sip = $ans['SIP']; 

}

    // thrid semester
    $enrol = $_SESSION['enrol_no'];
    $query = "SELECT * FROM `bca3` WHERE enrol_no ='$enrol'";
    $result = mysqli_query($db_con, $query);
    $ans = mysqli_fetch_assoc($result);

 if(isset($ans)) {
    $ds = $ans['Data_Structures'];
    $ppro = $ans['Python_Programming'];
    $dbms = $ans['Database_Management_Systems'];
    $se = $ans['Software_Engineering'];
    $ccs = $ans['Cloud_Computing_&_Security'];
    $clab3 = $ans['Computer_Lab_III'];
 }

    // fourth semester
    $enrol = $_SESSION['enrol_no'];
    $query = "SELECT * FROM `bca4` WHERE enrol_no ='$enrol'";
    $result = mysqli_query($db_con, $query);
    $ans = mysqli_fetch_assoc($result);

if(isset($ans)){
    $fos = $ans['FOS'];
    $ps = $ans['Probability_&_Statistics'];
    $jp = $ans['Java_Programming'];
    $clab4 = $ans['Computer_Lab_IV'];
    $sad = $ans['System_Analysis_&_Design'];
    $gui = $ans['GUI_app_dev_with_vb'];
    $mp = $ans['Minor_Project'];
}

    // fifth semester
    $enrol = $_SESSION['enrol_no'];
    $query = "SELECT * FROM `bca5` WHERE enrol_no ='$enrol'";
    $result = mysqli_query($db_con, $query);
    $ans = mysqli_fetch_assoc($result);
    
    if(isset($ans)){
        $dataComp = $ans['Data_com&comp_net'];
        $awt = $ans['Advanced_web_tech'];
        $web = $ans['Basic_web_design'];
        $clab5 = $ans['Computer_Lab_V'];
        $evs = $ans['Environmental_Science'];
        // space before dash in db 
        $sk = $ans['Soft _skills'];
    }

        //sixth semester
        $enrol = $_SESSION['enrol_no'];
        $query = "SELECT * FROM `bca6` WHERE enrol_no ='$enrol'";
        $result = mysqli_query($db_con, $query);
        $ans = mysqli_fetch_assoc($result);
        
        if(isset($ans)){
            $cbcs = $ans['CBCS'];
            $majp = $ans['Major_Project'];
        }

    // Attendance
    $enrol = $_SESSION['enrol_no'];
    $query = "SELECT * FROM `attendance` WHERE enrol_no ='$enrol'";
    $result = mysqli_query($db_con, $query);
    $ans = mysqli_fetch_assoc($result);
    
    if(isset($ans)){
        $sem1 = $ans['sem1'];
        $sem2 = $ans['sem2'];
        $sem3 = $ans['sem3'];
        $sem4 = $ans['sem4'];
        $sem5 = $ans['sem5'];
        $sem6 = $ans['sem6'];
    }

    // echo "<pre>";
    // print_r($ans);
    // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="./css//results.css">
    <link rel="stylesheet" href="./css//style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.2/chart.min.js" integrity="sha512-zjlf0U0eJmSo1Le4/zcZI51ks5SjuQXkU0yOdsOBubjSmio9iCUp8XPLkEAADZNBdR9crRy3cniZ65LF2w8sRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<!-- heading container -->
<div class="container heading">
        <div class="row d-flex align-items-center justify-content-center">
            <div class=" header1 col-lg-12 d-flex align-items-center justify-content-center">
            <h4 class="title"> Academic analysis for&nbsp<?=$name['name']?>   Enrolment no:<?= $enrol?></h4>
            </div>
            <div class="row d-flex align-items-center justify-content-center">
            <p class="title">Dummy Database data used here</p>
        </div>
        </div>
      
</div>
<!-- chart container -->
<div class="container">

<div class="row chartRow">
    <div class="col-lg-5 sm-me-5 lg-ms-5 chartContainer
     d-flex align-items-center justify-content-center ">
    <canvas id="myChart"></canvas>
    </div>

    <div class="col-lg-5 me-5 chartContainer 
    d-flex align-items-center justify-content-center ">
    <canvas id="myChart2"></canvas>
    </div>

</div>
    <br><br><br><br><br>
    <div class="row chartRow">
    <div class="col-lg-5 sm-me-5 lg-ms-5 chartContainer
     d-flex align-items-center justify-content-center ">
    <canvas id="myChart3"></canvas>
    </div>

    <div class="col-lg-5 me-5 chartContainer 
    d-flex align-items-center justify-content-center ">
    <canvas id="myChart4"></canvas>
    </div>

</div>
<br><br><br><br><br>
<div class="row chartRow">
    <div class="col-lg-5 sm-me-5 lg-ms-5 chartContainer
     d-flex align-items-center justify-content-center ">
    <canvas id="myChart5"></canvas>
    </div>

    <div class="col-lg-5 me-5 chartContainer 
    d-flex align-items-center justify-content-center ">
    <canvas id="myChart6"></canvas>
    </div>

</div>

<br><br><br><br><br>
<div class="row chartRow">
    <div class="col-lg-5 sm-me-5 lg-ms-5 chartContainer
     d-flex align-items-center justify-content-center ">
    <canvas id="myChart7"></canvas>
    </div>

</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- javascript starts here -->
<script>
    const name = '<?=$name['name']?>';
  const ctx = document.getElementById('myChart').getContext("2d");
  const ctx2 = document.getElementById('myChart2').getContext("2d");
  const ctx3 = document.getElementById('myChart3').getContext("2d");
  const ctx4 = document.getElementById('myChart4').getContext("2d");
  const ctx5 = document.getElementById('myChart5').getContext("2d");
  const ctx6 = document.getElementById('myChart6').getContext("2d");
  const ctx7 = document.getElementById('myChart7').getContext("2d");

// getting values from the $ans variable
// semester one
    let cf = '<?=$cf?>';
    let cp =  '<?=$cp?>';
    let maths = '<?=$maths?>';
    let pom =  '<?=$pom?>';
    let els = '<?=$els?>';
    let clab = '<?=$clab?>'; 
    let dos =  '<?=$dos?>'; 
    console.log(this.cp);

//  semester two
    let oop = '<?=$oop?>';
    let dor =  '<?=$do?>';
    let ms = '<?=$ms?>';
    let m2 =  '<?=$m2?>';
    let dnt = '<?=$dnt?>';
    let clab2 = '<?=$clab2?>'; 
    let sip =  '<?=$sip?>';
 
// semeseter three
    let ds = '<?=$ds?>';
    let ppro =  '<?=$ppro?>';
    let dbms = '<?=$dbms?>';
    let se =  '<?=$se?>';
    let ccs = '<?=$ccs?>';
    let clab3 = '<?=$clab3?>'; 


// semeseter four
    let fos = '<?=$fos?>';
    let ps =  '<?=$ps?>';
    let jp = '<?=$jp?>';
    let clab4 =  '<?=$clab4?>';
    let sad = '<?=$sad?>';
    let gui = '<?=$gui?>'; 
    let mp = '<?=$mp?>'; 

// semeseter fifth
    let dataComp = '<?=$dataComp?>';
    let awt =  '<?=$awt?>';
    let web = '<?=$web?>';
    let clab5 = '<?=$clab5?>';
    let evs = '<?=$evs?>'; 
    let sk = '<?=$sk?>';

// semester sixth
    let cbcs = '<?=$cbcs?>';
    let majp =  '<?=$majp?>';

    
// attendance
    let sem1 = '<?=$sem1?>';
    let sem2 =  '<?=$sem2?>';
    let sem3= '<?=$sem3?>';
    let sem4 = '<?=$sem4?>';
    let sem5= '<?=$sem5?>'; 
    let sem6= '<?=$sem6?>';
    

//data visualization
const labels= [
    'CF',
    'C Programming',
    'Maths I',
    'POM',
    'ELS-1',
    'C-Lab-1',
    'Dos_win_excel_pp',
  ];
const labels2 = [
    'OOP_c++',
    'DO',
    'MS',
    'Maths-II',
    'Dot_Net_Tech',
    'C_Lab_II',
    'SIP',
  ];
  const labels3 = [
    'DS',
    'Python',
    'DBMS',
    'Software-Egineering',
    'cloud comp & Security',
    'C_Lab_III',
  ];

  const labels4=[
        'FOS',
        'Probability_&_Statistics',
        'Java_Programming',
        'Computer_Lab_IV',
        'System_Analysis_&_Design',
        'GUI_app_dev_with_vb',
        'Minor Project'
  ];

  const labels5 =[
        'Data_com&comp_net',
        'Advanced_web_tech',
        'Basic_web_design',
        'Computer_Lab_V',
        'Environmental_Science',
        'Soft _skills',
  ]
  const labels6 =[
        'CBCS',
        'Major_Project',
  ]
    
  const labels7 =[
        '1st Sem',
        '2nd Sem',
        '3rd Sem',
        '4th Sem',
        '5th Sem',
        '6th Sem',
  ]
  

  const data = {
    labels: labels,
    datasets: [{
      label: ["1st Semester"],
      fill:true,
      backgroundColor:['rgba(255, 26, 104, 0.7)',
          'rgba(54, 162, 235, 0.7)',
          'rgba(255, 206, 86, 0.7)',
          'rgba(75, 192, 192, 0.7)',
          'rgba(153, 102, 255, 0.7)',
          'rgba(255, 159, 64, 0.7)',
          'rgba(0, 0, 0, 0.7)'],
      data: [cf, cp, maths, pom, els, clab, dos],
      borderWidth: 1,
      borderRadius: 5
    },
    {
        label: ["Internal Marks(c1 + c2)"],
        type:'line',
        backgroundColor:['rgb(53, 1, 75)'],
        borderColor:['rgb(0,0,0)'],
        data: [30,20,23,34,18,15,28],
        borderWidth: 1,
      borderRadius: 5
    }
]
  };
  
  const data2 = {
    labels: labels2,
    datasets: [{
      label: ["2nd Semester"],
      fill:true,
     
      backgroundColor:[' rgba(54, 162, 235, 0.7)',
          'rgba(255, 26, 104, 0.7)',
          'rgba(255, 206, 86, 0.7)',
          'rgba(75, 192, 192, 0.7)',
          'rgba(153, 102, 255, 0.7)',
          'rgba(255, 159, 64, 0.7)',
          'rgba(0, 0, 0, 0.7)'],
      data: [oop, dor, ms, m2, dnt, clab2, sip],
      borderWidth: 1,
      borderRadius: 5
    },
    {
        label: ["Internal Marks(c1 + c2)"],
        type:'line',
        backgroundColor:['rgb(53, 1, 75)'],
        borderColor:['rgb(0,0,0)'],
        data: [30,20,23,34,18,15],
        borderWidth: 1,
      borderRadius: 5
    }]
  };
  const data3 = {
    labels: labels3,
    datasets: [{
      label: ["3rd Semester"],
      fill:true,
     
      backgroundColor:[' rgba(54, 162, 235, 0.7)',
          'rgba(255, 26, 104, 0.7)',
          'rgba(255, 206, 86, 0.7)',
          'rgba(75, 192, 192, 0.7)',
          'rgba(153, 102, 255, 0.7)',
          'rgba(255, 159, 64, 0.7)',
          'rgba(0, 0, 0, 0.7)'],
      data: [ds, ppro, dbms, se, ccs, clab3],
      borderWidth: 1,
      borderRadius: 5
    },
    {
        label: ["Internal Marks(c1 + c2)"],
        type:'line',
        backgroundColor:['rgb(53, 1, 75)'],
        borderColor:['rgb(0,0,0)'],
        data: [30,20,23,34,18,15,28],
        borderWidth: 1,
      borderRadius: 5
    }]
  };

  const data4 = {
    labels: labels4,
    datasets: [{
      label: ["4th Semester"],
      fill:true,
      
      backgroundColor:['rgba(153, 102, 255, 0.7)',
          'rgba(255, 26, 104, 0.7)',
          'rgba(255, 206, 86, 0.7)',
          'rgba(75, 192, 192, 0.7)',
          ' rgba(54, 162, 235, 0.7)',
          'rgba(255, 159, 64, 0.7)',
          'rgba(0, 0, 0, 0.7)'],
      data: [fos, ps, jp, clab4, sad, gui,mp],
      borderWidth: 1,
      borderRadius: 5
    },
    {
        label: ["Internal Marks(c1 + c2)"],
        type:'line',
        backgroundColor:['rgb(53, 1, 75)'],
        borderColor:['rgb(0,0,0)'],
        data: [30,20,23,34,18,15],
        borderWidth: 1,
        borderRadius: 5
    }]
  };

  const data5 = {
    labels: labels5,
    datasets: [{
      label: ["5th Semester"],
      fill:true,
      backgroundColor:['rgba(54, 162, 235, 0.7)',
          'rgba(255, 26, 104, 0.7)',
          'rgba(255, 206, 86, 0.7)',
          'rgba(75, 192, 192, 0.7)',
          'rgba(153, 102, 255, 0.7)',
          'rgba(255, 159, 64, 0.7)',
          'rgba(0, 0, 0, 0.7)'],
      data: [dataComp, awt, web, clab5, evs, sk],
      borderWidth: 1,
      borderRadius: 5
    },
    {
        label: ["Internal Marks(c1 + c2)"],
        type:'line',
        backgroundColor:['rgb(53, 1, 75)'],
        borderColor:['rgb(0,0,0)'],
        data: [30,20,23,34,18,15],
        borderWidth: 1,
      borderRadius: 5
    }]
  };
  const data6 = {
    labels: labels6,
    datasets: [{
      label: ["6th Semester"],
      fill:true,
      backgroundColor:['rgba(54, 162, 235, 0.7)',
          'rgba(255, 26, 104, 0.7)',
          'rgba(255, 206, 86, 0.7)',
          'rgba(75, 192, 192, 0.7)',
          'rgba(153, 102, 255, 0.7)',
          'rgba(255, 159, 64, 0.7)',
          'rgba(0, 0, 0, 0.7)'],
      data: [cbcs, mp],
      borderWidth: 1,
      borderRadius: 5
    },
    {
        label: ["Internal Marks(c1 + c2)"],
        type:'line',
        backgroundColor:['rgb(53, 1, 75)'],
        borderColor:['rgb(0,0,0)'],
        data: [30],
    }]
  };
  const data7 = {
    labels: labels7,
    datasets: [{
      label: ["Semester Attendance"],
      fill:true,
      backgroundColor:['rgba(54, 162, 235, 0.7)',
          'rgba(255, 26, 104, 0.7)',
          'rgba(255, 206, 86, 0.7)',
          'rgba(75, 192, 192, 0.7)',
          'rgba(153, 102, 255, 0.7)',
          'rgba(255, 159, 64, 0.7)',
          'rgba(0, 0, 0, 0.7)'],
      data: [sem1,sem2,sem3,sem4,sem5,sem6],
      borderWidth: 1,
      borderRadius: 5
    }]
  };


  const config = {
    type: 'bar',
    data: data,
    options: {
    }
  };

  const config2 = {
    type: 'bar',
    data: data2,
    options: {
    }
  };
  const config3 = {
    type: 'bar',
    data: data3,
    options: {
    }
  };
  const config4 = {
    type: 'bar',
    data: data4,
    options: {
    }
  };
  const config5 = {
    type: 'bar',
    data: data5,
    options: {
    }
  };
  const config6 = {
    type: 'bar',
    data: data6,
    options: {
    }
  };
  const config7 = {
    type: 'bar',
    data: data7,
    options: {
    }
  };

  const myChart = new Chart(ctx,config);
  const myChart2 = new Chart(ctx2,config2);
  const myChart3 = new Chart(ctx3,config3);
  const myChart4 = new Chart(ctx4,config4);
  const myChart5 = new Chart(ctx5,config5);
  const myChart6 = new Chart(ctx6,config6);
  const myChart7 = new Chart(ctx7,config7);
</script>

    
</body>
</html>