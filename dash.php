 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
   <link href="https://fonts.google.com/specimen/Open+Sans?query=Open+sans">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
   rel="stylesheet">
   <script src="https://kit.fontawesome.com/9428349a7b.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <link rel="stylesheet" href="../Css/dash.css">

</head>
<body>
  <div class="grid-container">
<!--Header-->
  <header class="header">
    <div class="menu-icons" onclick="openSidebar()">
      <span class="material-icons-outlined">menu</span>
    </div>
    <div class="header-left">
      <img src ="../Img4.png" type="Img4.png">
      </div>
      
      <div class="header-right">
        <span class="material-icons-outlined">account_circle</span>
        <span class="material-icons-outlined">logout</span>Logout
      </div>
  </header>
<!--End of Header-->

<!--sidebar-->
<aside id="sidebar">
<div class="siderbar-title">
  <div class="sidebar-brand">
  <span class="material-icons-outlined">mood</span><h6>SUPPORT-08146123682</h6>
  <!-- </div>
 <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
</div> -->
<ul class="sidebar-list">
  <li class="sidebar-list-item">
    <a href="#">
   <span class="material-icons-outlined">dashboard</span>Dashboard
  </a>  
  </li>
  
  <li class="sidebar-list-item">
    <a href="#">
   <span class="material-icons-outlined">phone_android</span>Buy Airtime
  </a>  
  </li>
  <li class="sidebar-list-item">
    <a href="#">
   <span class="material-icons-outlined">wifi</span>Buy Data
  </a>  
  </li>

  <li class="sidebar-list-item">
    <a href="#">
   <span class="material-icons-outlined">tv</span>CableTv Sub*
  </a>  
  </li>
  <li class="sidebar-list-item">
    <a href="#">
   <span class="material-icons-outlined">payments</span>Pay Light Bills
  </a>  
</li>
  <li class="sidebar-list-item">
    <a href="#">
   <span class="material-icons-outlined">school</span>Buy Exam Pins
  </a>  
  </li>
  <li class="sidebar-list-item">
    <a href="#">
   <span class="material-icons-outlined">upgrade</span>Upgrade Levels
  </a>  
  </li>
  <li class="sidebar-list-item">
    <a href="#">
   <span class="material-icons-outlined">sell</span>Pricing Page
  </a>  
  </li>
  <li class="sidebar-list-item">
    <a href="#">
   <span class="material-icons-outlined">api</span>Developers Api
  </a>  
  </li>
  <li class="sidebar-list-item">
    <a href="#">
   <span class="material-icons-outlined">schedule</span>View Histories
  </a>  
  </li>
  <li class="sidebar-list-item">
    <a href="#">
   <span class="material-icons-outlined">manage_accounts</span>My Account
  </a>  
  </li>

</ul>
</aside>
<!--End of sidebar-->

<!--main-->
<main class="Main-container">
<div class="main-title">
  <div class="grid-dashboard">
  <span class="material-icons-outlined">circle_notifications</span><br>
    <p><h3>NOTIFICATION</h3>
      <h4>Dear Esteemed Agents kindly note that all services are available and delivering fast.
    Our support contact call/whatsApp 08172291253. Thank you. Admin.</p></h4> </div>
  </div>
  <br><br>

  <div class="grid-dashboards">
  <h4>NEEDS TO CONTACT US?</h4>
  <a href="#"><button class="btn">whatsApp Us</button></a>
  <a href="https://chat.whatsapp.com/BB0f22vUqHeLkOB52lwsMT"><button class="btn">Join whatsApp Group</button></a>
  <a href="#"><button class="btn">Call Us</button></a>
</div>
<br><br>

<div class="main-titles">
 <a href="#"> <button class="btn"><span class="material-icons-outlined">account_balance_wallet</span>Fund Wallet</button></a>
  <a href="#"><button class="btn"><span class="material-icons-outlined">history</span>Wallet History</button></a>
  <button class="btn"><span class="material-icons-outlined">manage_accounts</span>My Account</button>
</div>
<br><br>

<div class="main-cards">
  <div class="cards">
    <div class="card-inner">
      <span class="material-icons-outlined">account_balance_wallet</span>
      <br>
      <h2>WALLET(NGN)<h2>    
    </div>
  <h1>0.00</h1>   
  </div>

  <div class="cards">
    <div class="card-inner">
      <span class="material-icons-outlined">card_membership</span> 
      <br>
      <h2>PLAN<h2>        
    </div><br>
  <h1>Customer</h1>   
  </div>

  <div class="cards">
    <div class="card-inner">
      <span class="material-icons-outlined">trending_up</span> 
      <h2>TOTAL REFERRED.<h2>
    </div><br>
  <h1>0</h1>   
  </div>
</div>

<!--End of Main-->
<br><br>
<div class="box">
  <div class="box-card">
     <a href="#"><h5>Airtime</h5></a> 
     <p><span class="material-icons-outlined">sim_card</span>Best Airtime
     for you <a href="#"><span class="material-icons-outlined">arrow_circle_right</span></a></p>
    <a href="#"><h4>Buy Now</h4></a>  
</div>



<div class="box-card">
  <a href="#"><h5>Data</h5></a> 
  <p><span class="material-icons-outlined">sim_card</span>Cheapest Data Plan <a href="#"><span class="material-icons-outlined">arrow_circle_right</span></a></p>
 <a href="#"><h4>Buy Now</h4></a>  
</div>



<div class="box-card">
  <a href="#"><h5>Cables</h5></a> 
  <p><span class="material-icons-outlined">sim_card</span>Don't miss your<br>favourite show <a href="#"><span class="material-icons-outlined">arrow_circle_right</span></a></p>
 <a href="#"><h4>Subscribe Now</h4></a>  
</div>



<div class="box-card">
  <a href="#"><h5>Utility Bills</h5></a> 
  <p><span class="material-icons-outlined">sim_card</span>Pay for Your Bills <a href="#"><span class="material-icons-outlined">arrow_circle_right</span></a></p>
 <a href="#"><h4>Pay Now</h4></a>  
</div>


</div>
<section>
  <div class="container mx-auto">
  <div class="mx-1">
  <div class="lg:flex">
  <div class="lg:w-3/12">
  <div class="flex justify-between">
  <h1 class="font-bold text-gray-800 white">
  Sell Data
  </h1>
  <div>
  <a href="?vend=history&for=transactions&type=data" class="dark px-2 py-1 text-xs font-semibold tracking-wide text-blue-700 uppercase duration-300 bg-gray-200 border rounded hover:shadow">
  <i class="mr-1 fa fa-database"></i>
  See Data History
  </a>
  </div>
  </div>
  <hr class="w-2/12 my-4 border-0 border-t-2 border-indigo-200">
  
  
  
  <div class="container-md mt-3">
          <div class="data-form p-3" style="border: 1px solid grey; border-radius: 5px;">
    <div class="p-2 check-balance" style="text-align:center;">
    
      </div>
          <div class="mb-2">
  
              <form id="cfor"  class="for" id="cfor" method="post" target="_self">
              <div class="mb-2">
        <label  for="datatype" class="form-label" >Data Type</label>
          <select id="datachoice" aria-label="form-select-sm example" class="form-select form-select-sm datachoice" name="datachoice" >
              <option value="none" selected>---Select---</option>
              
                  <option value="corporate">CORPORATE</option>
                
                  <option value="direct">GIFTING</option>
                
                  <option value="sme">SME</option>
                
          </select>
        </div>
      
        <div class="mb-2">
                  <label for="network" class="form-label">Network</label>
                  <select class="form-select form-select-sm data-network" aria-label="form-select-sm example" name="network">
                      <option value="none" class="smenetwork">---Select---</option>
            <div class="sme_network">
                                <option value="1" class="smenetwork">MTN</option>
                      </div>
            <div class="corporate_network">
                                <option value="1" class="corporatenetwork">MTN</option>
                      <option value="2" class="corporatenetwork">GLO</option>
                      <option value="3" class="corporatenetwork">9MOBILE</option>
                      </div>
            <div class="direct_network">
                      <option value="03" class="directnetwork">AIRTEL</option>
                      </div>
                  </select>
                  <div id="validationServer04Feedback" class="invalid-feedback">
                      <span class="data-select-network">Please Choose a Network. </span>
                    </div>
                  </div>
          
              <div class="mb-2 d-data">
                      <label for="dataplan" class="form-label">Data Plan</label>
                      <select class="form-select form-select-sm data-plan" aria-label="form-select-sm example" name="cplan" id="cdat">
              <option value="none">---Select---</option>
              <div class="sme_data_plan">
              <option value="1" id="0" class="imtn smedataplan">MTN 500MB ₦119</option><option value="2" id="1" class="imtn smedataplan">MTN 1GB ₦217</option><option value="3" id="2" class="imtn smedataplan">MTN 2GB ₦434</option><option value="4" id="3" class="imtn smedataplan">MTN 3GB ₦656</option><option value="5" id="4" class="imtn smedataplan">MTN 5GB ₦1124</option><option value="6" id="5" class="imtn smedataplan">MTN 10GB ₦2280</option>
              <option value="40" id="0" class="iairtel smedataplan">AIRTEL 500MB ₦200</option><option value="41" id="1" class="iairtel smedataplan">AIRTEL 1GB ₦350</option><option value="42" id="2" class="iairtel smedataplan">AIRTEL 2GB ₦700</option><option value="43" id="3" class="iairtel smedataplan">AIRTEL 5GB ₦1800</option><option value="44" id="4" class="iairtel smedataplan">AIRTEL 10GB ₦3600</option>
              
                          </div>
              
              <div  class="corporate_data_plan">
              <option value="223" id="0" class="r2imtn corporatedataplan">MTN 500MB ₦139</option><option value="221" id="1" class="r2imtn corporatedataplan">MTN 1GB ₦238</option><option value="222" id="2" class="r2imtn corporatedataplan">MTN 2GB ₦476</option><option value="226" id="3" class="r2imtn corporatedataplan">MTN 3GB  ₦718</option><option value="227" id="4" class="r2imtn corporatedataplan">MTN 5GB  ₦1198</option><option value="228" id="5" class="r2imtn corporatedataplan">MTN 10GB  ₦2384</option>						
              <option value="224" id="0" class="r2iairtel corporatedataplan">AIRTEL 500MB ₦200</option><option value="216" id="1" class="r2iairtel corporatedataplan">AIRTEL 1GB ₦330</option><option value="217" id="2" class="r2iairtel corporatedataplan">AIRTEL 2GB ₦660</option><option value="218" id="3" class="r2iairtel corporatedataplan">AIRTEL 5GB ₦1700</option><option value="244" id="4" class="r2iairtel corporatedataplan">AIRTEL 10GB ₦3300</option>						<option value="289" id="0" class="r2i9mobile corporatedataplan">9MOBILE 500MB ₦130</option><option value="290" id="1" class="r2i9mobile corporatedataplan">9MOBILE 1GB ₦200</option><option value="292" id="2" class="r2i9mobile corporatedataplan">9MOBILE 2GB ₦400</option><option value="294" id="3" class="r2i9mobile corporatedataplan">9MOBILE 3GB ₦600</option><option value="293" id="4" class="r2i9mobile corporatedataplan">9MOBILE 5GB ₦1000</option>						<option value="206" id="1" class="r2iglo corporatedataplan">GLO 500MB ₦138</option><option value="196" id="2" class="r2iglo corporatedataplan">GLO 1GB ₦236</option><option value="204" id="3" class="r2iglo corporatedataplan">GLO 2GB ₦472</option><option value="203" id="4" class="r2iglo corporatedataplan">GLO 3GB ₦762</option><option value="202" id="5" class="r2iglo corporatedataplan">GLO 5GB ₦1185</option><option value="201" id="6" class="r2iglo corporatedataplan">GLO 10GB ₦2370</option><option value="205" id="7" class="r2iglo corporatedataplan">GLO 200MB ₦100</option>						</div>
                      
              <div  class="direct_data_plan">
              <option value="83" id="0" class="rimtn directdataplan">MTN 1.5GB ₦1100</option><option value="84" id="1" class="rimtn directdataplan">MTN 2GB ₦1500</option><option value="58" id="2" class="rimtn directdataplan">MTN 3GB ₦2000</option><option value="85" id="3" class="rimtn directdataplan">MTN 4.5GB ₦3000</option><option value="55" id="4" class="rimtn directdataplan">MTN 6GB ₦4000</option><option value="56" id="5" class="rimtn directdataplan">MTN 10GB ₦5000</option>						
              <option value="105" id="0" class="riairtel directdataplan">AIRTEL 300MB ₦200</option><option value="106" id="1" class="riairtel directdataplan">AIRTEL 500MB ₦250</option><option value="107" id="2" class="riairtel directdataplan">AIRTEL 1GB ₦380</option><option value="108" id="3" class="riairtel directdataplan">AIRTEL 2GB ₦760</option><option value="109" id="4" class="riairtel directdataplan">AIRTEL 5GB ₦1900</option><option value="124" id="5" class="riairtel directdataplan">AIRTEL 10GB ₦3800</option>						<option value="168" id="0" class="ri9mobile directdataplan">9MOBILE 500MB ₦120</option><option value="128" id="1" class="ri9mobile directdataplan">9MOBILE 1GB ₦200</option><option value="130" id="2" class="ri9mobile directdataplan">9MOBILE 2GB ₦400</option><option value="132" id="3" class="ri9mobile directdataplan">9MOBILE 3GB ₦600</option><option value="169" id="4" class="ri9mobile directdataplan">9MOBILE 4GB ₦800</option><option value="134" id="5" class="ri9mobile directdataplan">9MOBILE 5GB ₦1000</option><option value="136" id="6" class="ri9mobile directdataplan">9MOBILE 10GB ₦2000</option>						<option value="59" id="0" class="riglo directdataplan">GLO 1.35GB ₦496</option><option value="60" id="1" class="riglo directdataplan">GLO 2.9GB ₦1050</option><option value="87" id="2" class="riglo directdataplan">GLO 4.1GB ₦1446</option><option value="61" id="3" class="riglo directdataplan">GLO 5.8GB ₦1985</option><option value="62" id="4" class="riglo directdataplan">GLO 7.7GB ₦2460</option><option value="63" id="5" class="riglo directdataplan">GLO 10GB ₦2920</option><option value="34" id="7" class="riglo directdataplan">GLO 20GB + 4GB ₦</option>						</div>
            
            </select>
  
                      <div id="validationServer04Feedback" class="invalid-feedback">
                          <span class="data-select-network">Please Choose A Plan. </span>
                        </div>
              </div>
  
        <div class="mb-2 visually-hidden">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" name="vpname" class="form-control data-name" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" value="JTDav142">
              </div>
              <div class="mb-2 visually-hidden">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="vpemail" class="form-control data-email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" value="jtdconnects@gmail.com">
              </div>
        <div class="mb-2 visually-hidden">
          <input type="hidden" id="tcode" name="tcode" value="cdat">
          <input type="hidden" id="datatcode" class="datatcode" name="datatcode">
          <input type="hidden" id="url" name="url">
          <input type="hidden" id="thatnetwork" name="thatnetwork">
          <input type="hidden" id="uniqidvalue" name="uniqidvalue" value="16477731a63b74">
          <input type="hidden" id="url1" name="url1" value=".php">
          <input type="hidden" id="id" name="id" value="VTU-6477731a717b2"> 
        </div>
  
  
  
                  <div class="mb-2">
                      <label for="phone" class="form-label">Phone</label>
                      <input id="phone" name="phone" list="beneficiaries" type="number" class="form-control data-number data-phone" maxlength="11" placeholder="Phone Number" aria-label="Phone Number" aria-describedby="basic-addon1">
            <datalist id="beneficiaries">
  <option value='08146123682'><option value='07054082434'><option value='08146123682'><option value='08146123682'><option value='08066909868'><option value='08066909868'><option value='08146123682'><option value='09159682913'><option value='09159682913'><option value='08146123682'><option value='08146123682'><option value='09067986679'><option value='08146123682'><option value='08146123682'><option value='08146123682'><option value='08146123682'><option value='08146123682'><option value='08146123682'><option value='08146123682'><option value='09159682913'><option value='09159682913'><option value='08022696459'><option value='08022696459'><option value='08146123682'><option value='08169391757'><option value='08039485934'><option value='08146123682'><option value='09159682913'><option value='09159682913'><option value='08039485934'><option value='08022696459'><option value='08022696459'><option value='09159682913'><option value='09159682913'><option value='08146123682'><option value='08066909868'><option value='08066909868'><option value='08146123682'><option value='08146123682'><option value='08146123682'><option value='08146123682'><option value='08108924684'><option value='08108924684'><option value='08066909868'><option value='08066909868'><option value='07054082434'><option value='08146123682'><option value='08146123682'><option value='08104684958'><option value='08060867169'><option value='09067986679'><option value='08146123682'><option value='08028010133'><option value='09159682913'><option value='09166907180'><option value='09166907180'><option value='09042528983'><option value='09067986679'><option value='08169391757'><option value='08065176125'><option value='08104684958'><option value='08146123682'><option value='08021698675'><option value='08169391797'><option value='09042528983'><option value='08035815744'><option value='08104684958'><option value='08169391757'><option value='08146123682'><option value='08164953047'><option value='08060867169'><option value='09067986679'><option value='09048981662'><option value='09067121917'><option value='09067121917'><option value='09067121917'><option value='08072135676'><option value='08146123682'><option value='09117633764'><option value='09048981662'><option value='08146123682'><option value='07012432008'><option value='07012432008'><option value='07012432008'><option value='08146123682'><option value='08066909868'><option value='08066909868'><option value='08039485934'><option value='08033727423'><option value='08160124416'><option value='09048981662'><option value='08146123682'><option value='08065176125'><option value='08060867169'><option value='08108924684'><option value='08157303492'><option value='08146123682'><option value='08111215362'><option value='09114664837'><option value='08146123682'><option value='08146123682'><option value='08169391757'><option value='08146123682'><option value='08146123682'><option value='09114664837'><option value='08146123682'><option value='08146123682'><option value='08146123682'><option value='08146123682'><option value='08146123682'><option value='08146123682'><option value='09117633764'><option value='09063898384'><option value='08146123682'><option value='09117633764'><option value='09169617333'><option value='08146123682'><option value='09063898384'><option value='09159682913'><option value='08140204137'><option value='09169617333'><option value='08066909868'><option value='09117633764'><option value='09117633764'><option value='09117633764'><option value='08146123682'><option value='09159682913'><option value='09159682913'><option value='08146123682'><option value='09169617333'><option value='08111215362'><option value='08066909868'><option value='08146123682'>                </datalist>
            <div id="validationServer04Feedback" class="invalid-feedback">
                         Error: <span class="number-error-message"></span>.
                        </div>
                  </div>
                  <div class="mb-2">
                      <label for="network" class="form-label">Original Amount</label>
                      <div class="input-group mb-2" >
                          <span class="input-group-text" id="basic-addon1">NGN.</span>
                          <input type="number" class="form-control data-amount" placeholder="Amount" aria-label="Amount" aria-describedby="basic-addon1"  id="amt" name="amount" readonly>
                          <span class="input-group-text" id="basic-addon1">.00</span>
                      </div> 
                  </div>
                              <div class="mb-2">
  
                              <label for="network" class="form-label">Amount To Pay</label>
                          <div class="input-group mb-2">
                      <span class="input-group-text" id="basic-addon1">NGN.</span>
                      <input id="amttopay" type="number" class="form-control amttopay" max="232.93" placeholder="Amount To Pay" aria-label="Username" aria-describedby="basic-addon1" readonly>
                      <span class="input-group-text" id="basic-addon1">.00</span>
                      <div id="validationServer04Feedback" class="invalid-feedback">
                        Error: <span class="data-amount-error-message"></span>
                        </div>
                  </div>
              </div>
  
              
  <div class="form-check">
    <input class="form-check-input bypass" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      Bypass Number Validator
    </label>
  </div>
  
                  <div class="vstack gap-2">
                                    <button type="button" class="w-full p-2 text-xs font-bold text-white uppercase bg-indigo-600 rounded shadow purchase-data" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Purchase</button>
        
          </div>
              </form>
      
              <!--The Modal-->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Purchase Confirmation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div>
                      Network : <span class="data-network-confirm"></span><br>
                      Phone : <span class="data-number-confirm"></span><br>
                      Data Info: <span class="data-plan-confirm"></span><br>
                      Amount : ₦<span class="data-amount-confirm"></span><br>
                      Amount To Pay : ₦<span class="amttopay2" ></span><br>
            Discount : <span class="discount-amount-confirm"></span> <br>
                                Status : <span class="data-status-confirm"></span><br>
            <div class="input-group form">
            <span class="input-group-text">PIN</span>
            <input class="form-control pin" type="number" name="pin">
            </div>
                      </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="p-2 text-xs font-bold text-dark uppercase bg-gray-600 rounded shadow data-proceed-cancled" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" name="wallet" id="wallet" class=" p-2 text-xs font-bold text-white uppercase bg-indigo-600 rounded shadow data-proceed" form="cfor">Proceed</button>
                      </div>
                    </div>
                  </div>
              </div>
      
    
</div>
</div>


            
</main>
<!-- ---------------------Tsection---------------------------- -->


  <script src="Js/dash.js"></script> 
</body>
</html>