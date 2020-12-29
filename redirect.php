
    
<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
body, html {
    height: 100%;
}
body {background-color: FEFEFE;}
.hero-image {

  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://carleton.ca/financialservices/wp-content/uploads/fs-banner.jpg");

  height: 50%;

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.centre {
     margin-left: 100px;
 margin-right: 100px;
 font-size: 20px;
 padding: 20px;
}

td,th{
    padding: 10px;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
   margin-left: 25px;
 margin-right: 25px;
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
   margin-left: 25px;
 margin-right: 25px;
}
html {
  scroll-behavior: smooth;
 }
 
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

.tab button:hover {
  background-color: #ddd;
}

.tab button.active {
  background-color: #ccc;
}

.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}

</style>

<body>

<div class="tab">
  <button type="button" class="btn btn-dark" onclick="window.location.href='https://youradvisor.000webhostapp.com/index.html';">Welcome</button>
  <button type="button" class="btn btn-dark" onclick="window.location.href='https://youradvisor.000webhostapp.com/LowRisk.html';">Low-Risk</button>
  <button type="button" class="btn btn-dark" onclick="window.location.href='https://youradvisor.000webhostapp.com/MidRisk.html';">Mid-Risk</button>
  <button type="button" class="btn btn-dark" onclick="window.location.href='https://youradvisor.000webhostapp.com/HighRisk.html';">High-Risk</button>

</div>

<div class="hero-image">
  <div class="hero-text">
    <h1>Low Risk - Low Return</h1>
    <p>In this section we focus on ETFs (exchange traded fund) that are ideal for long-term (5+ years) investments. They have low risk and low return rates, therefore the strategy we follow with these stocks is to invest consistently and get compound interest.
    </p>
  </div>
</div>

<div class="centre">
<table style="width:100%">
    
    <tr>
        <th>Code</th>
        <th>Price</th>
        <th>Company Name</th>
        <th>Explanation</th>
    </tr>
    <tr>
        <td>VGT</td>
        <td>$260.26</td>
        <td>Vanguard Information Technology ETF</td>
        <td></td>
    </tr>
    <tr>
        <td>XLK</td>
        <td>$97.43</td>
        <td>Technology Select Sector SPDR Fund</td>
        <td>XLK is a really similar to but more affordable version of VGT.</td>
    </tr>
    <tr>
        <td>VNQ</td>
        <td>$95.45</td>
        <td>Vanguard Real Estate ETF</td>
        <td>More volatile compared to the other options but really</td>
    </tr>
    <tr>
        <td>FTEC</td>
        <td>$77.04</td>
        <td>Fidelity MSCI Information Technology Index ETF</td>
        <td></td>
    </tr>
    <tr>
        <td>VDC</td>
        <td>$162.15</td>
        <td>Vanguard Consumer Staples Index Fund ETF Shares</td>
        <td>Another affordable low risk ETF with an advantage of high dividend yield.</td>
    </tr>
    
</table>

<br>
Compound Interest Calculator <br>
Question 1: What's your initial investment? $
<input id="base"><br>
Question 2: For how many years are you planning on investing? 
<input id="year"><br>
Question 3: What's your monthly contribution? $
<input id="monthlyCon"><br>
<button type="button" onclick="compoundCalc()">Submit</button>
<br>
<br>
An 8%/year interest rate is being used. 8% is just an estimation not an exact value.




<p id="o_invested"></p>
<p id="o_profit"></p>
<p id="o_balance"></p>

<br>

<script>
function compoundCalc(){
    var q1 = <?php echo $_GET["q1"]; ?>;
    var q2 = <?php echo $_GET["q2"]; ?>;
    
    //inputs, edit boi
    var base = +document.getElementById("base").value;
    var years = +document.getElementById("year").value;
    var monthlyCon = +document.getElementById("monthlyCon").value;
    
    if (base <= 0) {
        alert('Invalid Input: Initial investment should be greater than $0.');
        return false;        
    }
    
     else if (years < 0) {
        alert('Invalid Input: The duration of the investment cannot be a negative number.');
        return false;        
    }
    
     else if (monthlyCon < 0) {
        alert('Invalid Input: Monthly contribution cannot be a negative number.');
        return false;        
    }
    
    
    balance = base;
    rate = 0.08;
    yearlyCon = monthlyCon * 12;
    var invested;
    var profit;

    for(let i = 0; i < years; i++) {
        interest = (balance + yearlyCon) * rate;
        balance = balance + yearlyCon + interest;
    }
    invested = yearlyCon * years + base;
    profit = balance - invested;
    
    profit = Math.round(profit*100)/100;
    invested = Math.round(invested*100)/100;
    balance = Math.round(balance*100)/100;

    document.getElementById("o_invested").innerHTML = 'Invested = ' + invested;
    document.getElementById("o_profit").innerHTML = 'Profit = ' + profit;
    document.getElementById("o_balance").innerHTML = 'Balance = ' + balance;
}
</script>
</div>

</body>
</html>