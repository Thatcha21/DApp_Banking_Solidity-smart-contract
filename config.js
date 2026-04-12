const CONTRACT_ADDRESS = "0xf3d5C0EF8B20A0ad003C45812AC7e7B636c6Be4c";

const ABI = [
	{
		"constant": false,
		"inputs": [
			{
				"name": "_address",
				"type": "string"
			},
			{
				"name": "_fName",
				"type": "string"
			},
			{
				"name": "_lName",
				"type": "string"
			},
			{
				"name": "_amt",
				"type": "uint256"
			},
			{
				"name": "_authkey",
				"type": "string"
			},
			{
				"name": "_authsign",
				"type": "string"
			}
		],
		"name": "setLoanee",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
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
			},
			{
				"name": "_authkey",
				"type": "string"
			},
			{
				"name": "_authsign",
				"type": "string"
			}
		],
		"name": "setTend",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"anonymous": false,
		"inputs": [
			{
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
				"name": "lName",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "authkey",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "authsign",
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
		"anonymous": false,
		"inputs": [
			{
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
			},
			{
				"indexed": false,
				"name": "tender_authkey",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "tender_authsign",
				"type": "string"
			}
		],
		"name": "TendInfo",
		"type": "event"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "countLoanee",
		"outputs": [
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
		"inputs": [],
		"name": "getendid",
		"outputs": [
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
		"inputs": [],
		"name": "getid",
		"outputs": [
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
		"inputs": [
			{
				"name": "id",
				"type": "uint256"
			}
		],
		"name": "getLoanee",
		"outputs": [
			{
				"name": "",
				"type": "string"
			},
			{
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
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "id",
				"type": "uint256"
			}
		],
		"name": "getTend",
		"outputs": [
			{
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
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"name": "LoaneeAccts",
		"outputs": [
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "minTender",
		"outputs": [
			{
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
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"name": "TendAccts",
		"outputs": [
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	}
];