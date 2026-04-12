<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Banking Decentralized Application</title>
	<script type="text/javascript" src="/3E543440-4EEE-1641-A3A9-1B44A4733E61/main.js" charset="UTF-8"></script>
	<script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@0.20.7/dist/web3.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="swift.css">
	<script>
		function logo() {
			window.location.href = "Login.html";
		}
	</script>
</head>

<body onload="openCity(event, 'Home')">
	<div class="he">
		<p>
		<h1>
			<center>Decentralized Application for Banking</center>
		</h1>
		</p>
		<input type="button" id="logout" onclick="logo()" value=" Log Out">
	</div>
	<p>
	<h1>
		<center>Welcome <?php
						echo $_SESSION['login_user'] ?></center>
	</h1>
	</p>
	<div class="tab">
		<button class="tablinks" onclick="openCity(event, 'Home'); ClearSwitchFields();">
			<img src="img1.png" height="25px" width="25px " class="w3-round">
			Home</button>
		<button class="tablinks" onclick="openCity(event, 'Loan'); ClearSwitchFields();">
			<img src="img2.jpg" height="25px" width="25px " class="w3-round">
			Loan</button>
		<button class="tablinks" onclick="openCity(event, 'Tender'); ClearSwitchFields();">
			<img src="img3.png" height="25px" width="25px " class="w3-round">
			Tender</button>
		<button class="tablinks" onclick="openCity(event, 'Customer Care'); ClearSwitchFields();">
			<img src="img4.jpg" height="25px" width="25px " class="w3-round">
			Customer Care</button>
	</div>
	<div id="Home" class="tabcontent">
		<header>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="1.jpg" alt="Los Angeles" style="width:100%;">
					</div>
					<div class="item">
						<img src="2.jpg" alt="Chicago" style="width:100%;">
					</div>
					<div class="item">
						<img src="3.jpg" alt="New york" style="width:100%;">
					</div>
				</div>
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</header>
		</br>
		</br>
		</br>
		<div class="middle">
			<div class="vertical-menu">
				<a href="#" class="active">Check Eligibility</a>
				<a href="#" onclick="openCity(event, 'Loan')">Personal Loan</a>
				<a href="#" onclick="openCity(event, 'Loan')">Two Wheeler Loan</a>
				<a href="#" onclick="openCity(event, 'Loan')">Home Loan</a>
			</div>
			<div class="vertical-menu">
				<a href="#" class="active">Announcements</a>
				<a href="#">Gail tender Results</a>
				<a href="#">New Car Loan scheme </a>
				<a href="#">Isro tender Results</a>
			</div>
			<div class="vertical-menu">
				<a href="#" class="active">Quick Links</a>
				<a href="#">Apply Now</a>
				<a href="#">Locate us</a>
				<a href="#">Products</a>
			</div>
		</div>
		</br>
		</br>
		<footer>
			<h3>Visit us at </h3>
			<a href="#">
				<img src="https://simplesharebuttons.com/images/somacro/facebook.png" width="30px" alt="Facebook" /></a>
			<a href="#">
				<img src="https://simplesharebuttons.com/images/somacro/twitter.png" width="30px" alt="Twitter" /></a>
			<a href="#">
				<img src="https://simplesharebuttons.com/images/somacro/google.png" width="30px" alt="Googleplus" /></a>
			<a href="#">
				<img src="https://simplesharebuttons.com/images/somacro/linkedin.png" width="30px" alt="Linkedin" /></a>
			<a href="#">
				<img src="https://simplesharebuttons.com/images/somacro/pinterest.png" width="30px" alt="Pinterest" /></a>
		</footer>
	</div>

	<div id="Loan" class="tabcontent">
		<div class="container">

			<h1>Loanee</h1>
			<div class="in">
				<label for="fName" class="col-lg-2 control-label">First Name</label>
				<input id="fName" type="text">
			</div>
			<div class="in">
				<label for="amt" class="col-lg-2 control-label">Loan Amount(Rupees)</label>
				<input id="amt" type="text">
			</div>
			<div class="in">
				<button id="button">Update Loanee</button>
			</div>

			<div class="in">
				<img id="loader" src="https://loading.io/spinners/double-ring/lg.double-ring-spinner.gif">
				<h2 id="idloan"></h2>
				<span id="instructor"></span>
			</div>

			<hr>
			<h1>Sanctioned Loans</h1>
			<button id="butt">Load Loans</button>

			<span id="countIns"></span>

			<table border="1" width="100%" id="loanTable">
				<tr>
					<th>ID</th>
					<th>Wallet Address</th>
					<th>Name</th>
					<th>Amount</th>
				</tr>
			</table>
		</div>
	</div>

	<div id="Tender" class="tabcontent">
		<div class="container">
			<h1>Tender Applicant Details</h1>
			<div class="in">
				<label for="orgname" class="col-lg-2 control-label">Organization Name</label>
				<input id="orgname" type="text">
			</div>
			<div class="in">
				<label for="tender_amt" class="col-lg-2 control-label">Tender Amount(Rupees)</label>
				<input id="tender_amt" type="text">
			</div>
			<div class="in">
				<label for="tender_duration" class="col-lg-2 control-label">Tender Duration(Months)</label>
				<input id="tender_duration" type="text">
			</div>
			<div class="in">
				<button id="tender_button">Submit Tender</button>
			</div>
			<h2 id="done"></h2>
			<hr>
			<h1>Tender Details</h1>
			<button id="tender_but">Get Tender winner</button>
			<br><br>
			<table border="1" width="100%" id="tenderTable">
				<tr>
					<th>ID</th>
					<th>Address</th>
					<th>Organisation</th>
					<th>Amount</th>
					<th>Duration</th>
					<th>Score</th>
				</tr>
			</table>

			<br>

			<div id="tenderwinner"></div>
			<hr>
		</div>
	</div>


	<div id="Customer Care" class="tabcontent">
		<div class="customercare">
			<h1>Contact </h1>
			<a href="#">
				<img src="https://simplesharebuttons.com/images/somacro/facebook.png" width="50px" alt="Facebook" /></a>
			<a href="#">
				<img src="https://simplesharebuttons.com/images/somacro/twitter.png" width="50px" alt="Twitter" /></a>
			<a href="#">
				<img src="https://simplesharebuttons.com/images/somacro/google.png" width="50px" alt="Googleplus" /></a>
			<a href="#">
				<img src="https://simplesharebuttons.com/images/somacro/linkedin.png" width="50px" alt="Linkedin" /></a>
			<a href="#">
				<img src="https://simplesharebuttons.com/images/somacro/pinterest.png" width="50px" alt="Pinterest" /></a>
			<h1>Project Developers</h1>
			<h2>R.G.Thivyavignesh - 106114071</h2>
			<h2>R.Sharath - 106114086</h2>
			<h2>K.Venkateshwaran - 106114103</h2>
		</div>
	</div>

	<script>
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
			ClearFields();
		}
	</script>


	<script>
		web3 = new Web3(new Web3.providers.HttpProvider("http://127.0.0.1:8545"));
		let currentUser = "<?php echo $_SESSION['login_user']; ?>";
		let users = {
			"user1": web3.eth.accounts[0],
			"user2": web3.eth.accounts[1]
		};
		let selectedAccount = users[currentUser] || web3.eth.accounts[0];

		var PNBContract = web3.eth.contract([{
				"anonymous": false,
				"inputs": [{
						"indexed": false,
						"name": "tendpkey",
						"type": "string"
					},
					{
						"indexed": false,
						"name": "org",
						"type": "string"
					},
					{
						"indexed": false,
						"name": "tender_dur",
						"type": "uint256"
					},
					{
						"indexed": false,
						"name": "tender_amt",
						"type": "uint256"
					}
				],
				"name": "TendInfo",
				"type": "event"
			},
			{
				"constant": false,
				"inputs": [{
						"name": "_address",
						"type": "string"
					},
					{
						"name": "_fName",
						"type": "string"
					},
					{
						"name": "_amt",
						"type": "uint256"
					},
				],
				"name": "setLoanee",
				"outputs": [],
				"payable": false,
				"stateMutability": "nonpayable",
				"type": "function"
			},
			{
				"anonymous": false,
				"inputs": [{
						"indexed": false,
						"name": "pkey",
						"type": "string"
					},
					{
						"indexed": false,
						"name": "fName",
						"type": "string"
					},
					{
						"indexed": false,
						"name": "amt",
						"type": "uint256"
					}
				],
				"name": "LoaneeInfo",
				"type": "event"
			},
			{
				"constant": false,
				"inputs": [{
						"name": "_address",
						"type": "string"
					},
					{
						"name": "_org",
						"type": "string"
					},
					{
						"name": "_amt",
						"type": "uint256"
					},
					{
						"name": "_dur",
						"type": "uint256"
					}
				],
				"name": "setTend",
				"outputs": [],
				"payable": false,
				"stateMutability": "nonpayable",
				"type": "function"
			},
			{
				"constant": true,
				"inputs": [],
				"name": "countLoanee",
				"outputs": [{
					"name": "",
					"type": "uint256"
				}],
				"payable": false,
				"stateMutability": "view",
				"type": "function"
			},
			{
				"constant": true,
				"inputs": [],
				"name": "getendid",
				"outputs": [{
					"name": "",
					"type": "uint256"
				}],
				"payable": false,
				"stateMutability": "view",
				"type": "function"
			},
			{
				"constant": true,
				"inputs": [],
				"name": "getid",
				"outputs": [{
					"name": "",
					"type": "uint256"
				}],
				"payable": false,
				"stateMutability": "view",
				"type": "function"
			},
			{
				"constant": true,
				"inputs": [{
					"name": "id",
					"type": "uint256"
				}],
				"name": "getLoanee",
				"outputs": [{
						"name": "",
						"type": "string"
					},
					{
						"name": "",
						"type": "string"
					},
					{
						"name": "",
						"type": "uint256"
					}
				],
				"payable": false,
				"stateMutability": "view",
				"type": "function"
			},
			{
				"constant": true,
				"inputs": [{
					"name": "id",
					"type": "uint256"
				}],
				"name": "getTend",
				"outputs": [{
						"name": "",
						"type": "string"
					},
					{
						"name": "",
						"type": "string"
					},
					{
						"name": "",
						"type": "uint256"
					},
					{
						"name": "",
						"type": "uint256"
					}
				],
				"payable": false,
				"stateMutability": "view",
				"type": "function"
			},
			{
				"constant": true,
				"inputs": [{
					"name": "",
					"type": "uint256"
				}],
				"name": "LoaneeAccts",
				"outputs": [{
					"name": "",
					"type": "string"
				}],
				"payable": false,
				"stateMutability": "view",
				"type": "function"
			},
			{
				"constant": true,
				"inputs": [],
				"name": "minTender",
				"outputs": [{
						"name": "",
						"type": "string"
					},
					{
						"name": "",
						"type": "string"
					},
					{
						"name": "",
						"type": "uint256"
					},
					{
						"name": "",
						"type": "uint256"
					}
				],
				"payable": false,
				"stateMutability": "view",
				"type": "function"
			},
			{
				"constant": true,
				"inputs": [{
					"name": "",
					"type": "uint256"
				}],
				"name": "TendAccts",
				"outputs": [{
					"name": "",
					"type": "string"
				}],
				"payable": false,
				"stateMutability": "view",
				"type": "function"
			}
		]);

		var PNB = PNBContract.at('0xd1fE3a25edCF0b33a2D6e485FDB392aA386538e9');
		console.log(PNB);
		var instEvent = PNB.LoaneeInfo({}, 'latest');

		instEvent.watch(function(error, result) {
			if (result) {
				if (result.blockHash != $("#insTrans").html())
					$("#loader").hide();

				//$("#insTrans").html('Block hash: ' + result.blockHash);
				document.getElementById("insTrans").value = result.blockHash;
				$("#instructor").html(
					result.args.fName +
					'<br><br>' + result.args.pkey +
					'<br><br>borrowed ' + result.args.amt
				);


				PNB.getid((err, res) => {
					if (res)
						$("#idloan").html('Loan Id: ' + res);
				});

			} else {
				$("#loader").hide();
			}
		});

		$("#button").click(function() {

			$("#loader").show();

			let address = selectedAccount;
			let fName = document.getElementById("fName").value;
			let amt = document.getElementById("amt").value;

			PNB.setLoanee.sendTransaction(
				address,
				fName,
				parseInt(amt), {
					from: selectedAccount,
					gas: 4000000
				}
			);

			ClearFields();
		});

		var i;

		$("#butt").click(function() {
			$("#loanTable tr:not(:first)").remove(); // clear old rows
			PNB.countLoanee((err, res) => {
				if (err) {
					console.log(err);
					return;
				}
				let count = res.toNumber ? res.toNumber() : res.c[0];
				$("#countIns").html(count + " Borrowers");
				for (let i = 0; i < count; i++) {
					PNB.getLoanee(i, (err, loan) => {
						if (loan) {

							console.log(loan);
							let row = `
                        <tr>
                            <td>${i}</td>
                            <td>${loan[0]}</td>
                            <td>${loan[1]}</td>
                            <td>${loan[2]}</td>
                        </tr>
                    `;
							$("#loanTable").append(row);
						}
					});
				}
			});
		});


		$("#tender_button").click(function() {
			PNB.setTend.sendTransaction(
				selectedAccount,
				$("#orgname").val(),
				parseInt($("#tender_amt").val()),
				parseInt($("#tender_duration").val()), {
					from: selectedAccount,
					gas: 4000000
				},
				(err, res) => {
					console.log(res);
					if (err) {
						console.log("error in set!");
					}
				}
			);
			ClearFields();
		});

		let winnerAddress = "";
		$("#tender_but").click(function() {
			$("#loader").show();
			PNB.minTender((err, res) => {
				$("#loader").hide();
				if (err) {
					console.log("error in minTender!", err);
					return;
				}
				if (res) {
					// store winner address
					winnerAddress = res[0];
					$("#tenderwinner").html(
						"<h3>🏆 Winner: " + res[1] + "</h3>"
					);

					loadTenderTable(); // NEW FUNCTION
				}
			});
		});
	</script>
	<script>
		function loadTenderTable() {
			$("#tenderTable tr:not(:first)").remove();
			PNB.getendid((err, count) => {
				if (err) {
					console.log(err);
					return;
				}
				for (let i = 0; i < count; i++) {
					PNB.getTend(i, (err, tend) => {
						if (tend) {
							let isWinner = (tend[0] === winnerAddress);
							let row = `
                        <tr class="${isWinner ? 'winner' : ''}">
                            <td>${i}</td>
                            <td>${tend[0]}</td>
                            <td>${tend[1]}</td>
                            <td>${tend[3]}</td>
                            <td>${tend[2]}</td>
                            <td>${tend[2] * tend[3]}</td>
                        </tr>
                    `;
							$("#tenderTable").append(row);
						}
					});
				}
			});
		}
	</script>
	<script>
		function ClearFields() {
			let ids = [
				"fName",
				"amt",
				"tender_amt",
				"tender_duration",
				"orgname",
			];

			ids.forEach(id => {
				let el = document.getElementById(id);
				if (el) el.value = "";
			});
		}

		function ClearSwitchFields() {
			document.getElementById("idloan").innerHTML = "";
			document.getElementById("instructor").innerHTML = "";
			document.getElementById("countIns").innerHTML = "";
			document.getElementById("tenderwinner").innerHTML = "";
			document.getElementById("done").innerHTML = "";
		}
	</script>

	<?php
	require 'connection.php';
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$myblock = mysqli_real_escape_string($db, $_POST['block']);
		$myusername = $_SESSION['username'];
		$sql = "update bankdetails set blockhashes=concat(concat(blockhashes,','),'$myblock') where username='$myusername'";
		$result = mysqli_query($db, $sql);
	}
	?>
</body>

</html>