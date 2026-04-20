<?php
session_start();
if (!isset($_SESSION['login_user'])) {
	header("Location: login.html");
	exit();
}
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="swift.css">
</head>

<body onload="setActiveTab('Home')">
	<div class="page-wrapper">
		<div class="tab">
			<div class="nav-left">
				<h3 class="app-title">
					<span class="app-badge">De</span><span class="app-text">Bank</span>
				</h3>
			</div>
			<div class="nav-center">
				<button class="tablinks" onclick="setActiveTab('Home'); ClearSwitchFields();">
					<i class="fa-solid fa-house"></i> Home
				</button>
				<button class="tablinks" onclick="setActiveTab('Loan'); ClearSwitchFields();">
					<i class="fa-solid fa-coins"></i> Loan
				</button>
				<button class="tablinks" onclick="setActiveTab('Tender'); ClearSwitchFields();">
					<i class="fa-solid fa-file-contract"></i> Tender
				</button>
				<button class="tablinks" onclick="setActiveTab('Customer Care'); ClearSwitchFields();">
					<i class="fa-solid fa-headset"></i> Customer Care
				</button>
			</div>
			<div class="nav-right">
				<div class="user-section">
					<i class="fa-solid fa-circle-user"></i>
					<span class="username">
						<?php echo $_SESSION['login_user']; ?>
					</span>
					<div class="divider"></div>
					<button id="logout" onclick="logout()" class="logout-btn">
						<i class="fa-solid fa-right-from-bracket"></i>
						Logout
					</button>
				</div>
			</div>
		</div>
		<div id="Home" class="tabcontent">
			<header>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="1.jpg" alt="slide">
							<div class="carousel-overlay">
								<div class="carousel-content">
									<h2>Fast & Secure Banking</h2>
									<p>
										Experience instant blockchain-powered banking with secure, transparent and real-time transactions.
									</p>
									<button class="carousel-btn">Get Started</button>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="2.jpg" alt="slide">
							<div class="carousel-overlay">
								<div class="carousel-content">
									<h2>Advanced Blockchain Security</h2>
									<p>
										Your assets are protected with decentralized encryption ensuring maximum trust and data integrity.
									</p>
									<button class="carousel-btn">Find out more</button>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="3.jpg" alt="slide">
							<div class="carousel-overlay">
								<div class="carousel-content">
									<h2>Smart Investment Solutions</h2>
									<p>
										Grow your wealth with intelligent investment options backed by data-driven financial insights.
									</p>
									<button class="carousel-btn">Read more</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="section-title">
				Featured News
			</div>
			<div class="card-container">
				<div class="info-card">
					<img src="cardImage1.jpg" alt="Loan">
					<div class="card-body">
						<div class="category">Loan</div>
						<div class="title">Personal Loan</div>
						<div class="desc">
							Apply for quick personal loans with instant approval and minimal documentation.
							Enjoy flexible repayment options tailored to your needs.
							Fast approval powered by blockchain verification.
							Transparent and secure processing system.
							Instant disbursement with low interest rates.
						</div>
						<button class="read-btn">Read more</button>
					</div>
				</div>

				<div class="info-card">
					<img src="cardImage2.jpg" alt="Tender">
					<div class="card-body">
						<div class="category">Tender</div>
						<div class="title">Government Tender</div>
						<div class="desc">
							Participate in blockchain-based tender system.
							Transparent bidding process with secure validation.
							Smart contract ensures fairness and automation.
							Real-time tender updates and tracking.
							Reliable and tamper-proof submission system.
						</div>
						<button class="read-btn">Read more</button>
					</div>
				</div>

				<div class="info-card">
					<img src="cardImage3.jpg" alt="Security">
					<div class="card-body">
						<div class="category">Security</div>
						<div class="title">Blockchain Security</div>
						<div class="desc">
							Secure decentralized transactions using Ethereum smart contracts.
							Data integrity ensured using cryptographic hashing.
							Fully transparent and immutable records.
							Protection against fraud and tampering.
							Trusted distributed ledger technology.
						</div>
						<button class="read-btn">Find out more</button>
					</div>
				</div>
			</div>
		</div>

		<div id="Loan" class="tabcontent">
			<div class="loan-section">

				<!-- LOAN CARD -->
				<div class="loan-card">
					<h2 class="loan-title">Get Loan</h2>
					<div class="loan-form">
						<div class="loan-input-group">
							<label>First Name <span class="required">*</span></label>
							<input id="fName" type="text" placeholder="Enter your name">
							<span class="error" id="fNameError"></span>
						</div>
						<div class="loan-input-group">
							<label>Loan Amount (GBP) <span class="required">*</span></label>
							<input id="amt" type="number" placeholder="Enter amount">
							<span class="error" id="amtError"></span>
						</div>

						<div class="loan-action">
							<button id="button" class="loan-btn">Get Loan</button>
						</div>
					</div>

					<div id="loanSuccess" class="success-message" style="display:none;">
						<i class="fa-solid fa-circle-check"></i>
						Loan request received successfully
					</div>
				</div>

				<!-- LOAN LIST -->
				<div class="loan-card loan-list">
					<div class="loan-list-header">
						<h2 class="loan-title">Sanctioned Loans</h2>
						<button id="butt" class="load-btn">Load Loans</button>
					</div>

					<div class="loan-content">
						<span id="countIns" class="count-text"></span>
						<div class="table-wrapper">
							<table id="loanTable">
								<thead>
									<tr>
										<th>ID</th>
										<th>Wallet Address</th>
										<th>Name</th>
										<th>Amount</th>
									</tr>
								</thead>
								<tbody></tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="Tender" class="tabcontent">
			<div class="loan-section">
				<!-- TENDER FORM CARD -->
				<div class="loan-card">
					<h2 class="loan-title">Submit Tender</h2>

					<div class="loan-form">
						<div class="loan-input-group">
							<label>Organization Name <span class="required">*</span></label>
							<input id="orgname" type="text" placeholder="Enter organization name" required>
							<span class="error" id="orgError"></span>
						</div>

						<div class="loan-input-group">
							<label>Tender Amount (GBP) <span class="required">*</span></label>
							<input id="tender_amt" type="number" placeholder="Enter amount" required>
							<span class="error" id="amtErrorTender"></span>
						</div>

						<div class="loan-input-group">
							<label>Tender Duration (Months) <span class="required">*</span></label>
							<input id="tender_duration" type="number" placeholder="Enter duration" required>
							<span class="error" id="durError"></span>
						</div>

						<div class="loan-action">
							<button type="button" id="tender_button" class="loan-btn">Submit Tender</button>
						</div>
					</div>

					<div id="tenderSuccess" class="success-message" style="display:none;"></div>
				</div>


				<!-- TENDER LIST CARD -->
				<div class="loan-card loan-list">
					<div class="loan-list-header">
						<h2 class="loan-title">Tender Details</h2>
						<button id="tender_but" class="load-btn">Get Winner</button>
					</div>

					<div class="loan-content">
						<div id="tenderwinner" style="margin-bottom:10px;"></div>

						<div class="table-wrapper">
							<table id="tenderTable">
								<thead>
									<tr>
										<th>ID</th>
										<th>Address</th>
										<th>Organisation</th>
										<th>Amount</th>
										<th>Duration</th>
										<th>Score</th>
									</tr>
								</thead>
								<tbody></tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div id="Customer Care" class="tabcontent">

			<!-- FAQ SECTION -->
			<div class="faq-section">
				<h2 class="section-title">Frequently Asked Questions</h2>

				<div class="faq">
					<p><strong>How secure is DeBank?</strong> — Fully secured using blockchain smart contracts.</p>
					<p><strong>How long does loan approval take?</strong> — Instant approval after validation.</p>
					<p><strong>Can I track my tender?</strong> — Yes, all tenders are real-time and transparent.</p>
					<p><strong>Is my data stored?</strong> — No, only blockchain records are stored securely.</p>
				</div>
			</div>

			<!-- CONTACT GRID -->
			<div class="contact-grid">

				<!-- WRITE TO US -->
				<div class="contact-card">
					<i class="fa-solid fa-envelope contact-icon"></i>
					<h3>Write to Us</h3>
					<p>
						DeBank Support Office<br>
						12 Blockchain Street<br>
						London 0401 ENF<br>
						support@debank.com
					</p>
				</div>

				<!-- CHAT WITH US -->
				<div class="contact-card">
					<i class="fa-solid fa-message contact-icon"></i>
					<h3>Chat with Us</h3>
					<p>
						Need help instantly?<br><br>
						<a href="#" class="chat-link">Click here to start chat</a>
					</p>
				</div>

				<!-- VISIT US -->
				<div class="contact-card">
					<i class="fa-solid fa-building contact-icon"></i>
					<h3>Visit Us</h3>
					<p>
						DeBank Global Offices<br>
						London • Scotland • Paris • New York<br><br>
						Worldwide branch support available
					</p>
				</div>

			</div>

		</div>

		</br>
		</br>
	</div>
	<footer class="footer">
		<div class="footer-left">
			<p>
				Copyright © 2026 DeBank Co. Reg. No. 040118082407Z. All Rights Reserved.
			</p>
		</div>
		<div class="footer-right">
			<a href="#"><i class="fab fa-facebook fa-2x"></i></a>
			<a href="#"><i class="fab fa-twitter fa-2x"></i></a>
			<a href="#"><i class="fab fa-google fa-2x"></i></a>
			<a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
			<a href="#"><i class="fab fa-pinterest fa-2x"></i></a>
		</div>
	</footer>

	<script>
		function logout() {
			window.location.href = "logout.php";
		}
	</script>

	<script>
		function setActiveTab(name) {
			let tabcontent = document.getElementsByClassName("tabcontent");
			for (let i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			let tablinks = document.getElementsByClassName("tablinks");
			for (let i = 0; i < tablinks.length; i++) {
				tablinks[i].classList.remove("active");
			}
			document.getElementById(name).style.display = "block";
			// set active button
			let buttons = document.querySelectorAll(".tablinks");
			buttons.forEach(btn => {
				if (btn.innerHTML.includes(name)) {
					btn.classList.add("active");
				}
			});
		}
	</script>

	<script>
		$("#loanSuccess").hide();
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
		$("#button").click(function() {

			let fName = $("#fName").val().trim();
			let amt = $("#amt").val().trim();

			let isValid = true;

			// Clear old errors
			$("#fNameError").text("");
			$("#amtError").text("");

			// First Name validation
			if (fName === "") {
				$("#fNameError").text("First name is required");
				isValid = false;
			}

			// Amount validation
			if (amt === "" || isNaN(amt) || parseInt(amt) <= 0) {
				$("#amtError").text("Enter a valid loan amount");
				isValid = false;
			}

			// STOP if invalid
			if (!isValid) return;

			$("#loader").show();

			let address = selectedAccount;

			PNB.setLoanee.sendTransaction(
				address,
				fName,
				parseInt(amt), {
					from: selectedAccount,
					gas: 4000000
				},
				function(error, result) {
					if (!error) {
						$("#loanSuccess").html(`
							<i class="fa-solid fa-circle-check"></i>
							Loan request received successfully
						`).fadeIn();
						setTimeout(() => {
							$("#loanSuccess").fadeOut();
						}, 4000);

						ClearFields();
					}
				}
			);
		});

		$("#fName").on("input", function() {
			$("#fNameError").text("");
		});

		$("#amt").on("input", function() {
			$("#amtError").text("");
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
				$("#countIns").html("Total of " + count + " borrowers");
				for (let i = 0; i < count; i++) {
					PNB.getLoanee(i, (err, loan) => {
						if (count === 0) {
							$("#loanTable").html("<tr><td colspan='4'>No loans found</td></tr>");
						}
						if (loan) {

							console.log(loan);
							let row = `
                        <tr>
                            <td>${i}</td>
                            <td>${loan[0]}</td>
                            <td>${loan[1]}</td>
                            <td>£${Number(loan[2]).toLocaleString()}</td>
                        </tr>
                    `;
							$("#loanTable").append(row);
						}
					});
				}
			});
		});


		$("#tender_button").click(function() {

			let org = $("#orgname").val().trim();
			let amt = $("#tender_amt").val().trim();
			let dur = $("#tender_duration").val().trim();

			let isValid = true;

			// clear old errors
			$("#orgError").text("");
			$("#amtErrorTender").text("");
			$("#durError").text("");
			$("#tenderSuccess").hide();

			// validation
			if (org === "") {
				$("#orgError").text("Organization name is required");
				isValid = false;
			}

			if (amt === "" || isNaN(amt) || parseInt(amt) <= 0) {
				$("#amtErrorTender").text("Enter a valid amount");
				isValid = false;
			}

			if (dur === "" || isNaN(dur) || parseInt(dur) <= 0) {
				$("#durError").text("Enter a valid duration");
				isValid = false;
			}

			// STOP HERE if invalid
			if (!isValid) return;

			PNB.setTend.sendTransaction(
				selectedAccount,
				org,
				parseInt(amt),
				parseInt(dur), {
					from: selectedAccount,
					gas: 4000000
				},
				(err, res) => {
					if (!err) {
						$("#tenderSuccess").html(`
                    <i class="fa-solid fa-circle-check"></i>
                    Tender submitted successfully
                `).fadeIn();

						setTimeout(() => {
							$("#tenderSuccess").fadeOut();
						}, 4000);

						ClearFields();
					}
				}
			);
		});

		$("#orgname").on("input", function() {
			$("#orgError").text("");
		});

		$("#tender_amt").on("input", function() {
			$("#amtErrorTender").text("");
		});

		$("#tender_duration").on("input", function() {
			$("#durError").text("");
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
					$("#tenderwinner").html(`
						<div class="success-message">
							🏆 Winner: <strong>${res[1]}</strong>
						</div>
					`);
					loadTenderTable(); // NEW FUNCTION
				}
			});
		});
	</script>

	<script>
		function loadTenderTable() {
			$("#tenderTable tbody").empty();
			PNB.getendid((err, count) => {
				if (err) return console.log(err);
				for (let i = 0; i < count; i++) {
					PNB.getTend(i, (err, tend) => {
						if (tend) {
							let row = `
                        <tr>
                            <td>${i}</td>
                            <td>${tend[0]}</td>
                            <td>${tend[1]}</td>
                            <td>£${Number(tend[3]).toLocaleString()}</td>
                            <td>${tend[2]}</td>
                            <td>${tend[2] * tend[3]}</td>
                        </tr>
                    `;

							$("#tenderTable tbody").append(row);
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