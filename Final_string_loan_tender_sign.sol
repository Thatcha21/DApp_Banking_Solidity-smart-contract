pragma solidity ^0.4.21;

contract Owned {
    address owner;
    
    function Owned() public {
        owner = msg.sender;
    }
    
    modifier onlyOwner {
        require(msg.sender == owner);
        _;
    }
}

contract Loan is Owned {
    uint nextId = 0;
    
    struct Loanee {
        string pkey;
        string fName;
        uint amt;
        uint id;
    }
    
    mapping (uint => Loanee) Borrowers;
    string[] public LoaneeAccts;
    
    event LoaneeInfo(
        string pkey,
        string fName,
        uint amt
    );
    
    uint id;
    
    function getid() view public returns (uint) {
        return LoaneeAccts.length;
    }
    
    function setLoanee(
    string _address,
    string _fName,
    uint _amt
        ) public {

        var inst = Borrowers[nextId];

        inst.pkey = _address;
        inst.fName = _fName;
        inst.amt = _amt;

        LoaneeAccts.push(_address);

        inst.id = nextId;
        id = nextId;

        nextId++;
        }
    
    function getLoanee(uint id) view public returns (string, string, uint) {
        return (Borrowers[id].pkey, Borrowers[id].fName, Borrowers[id].amt);
    }
    
    function countLoanee() view public returns (uint) {
        return LoaneeAccts.length;
    }
    
    struct Tend {
        string tendpkey;
        string org;
        uint tender_amt;
        uint tender_dur;
        uint tender_val;
        string tender_authkey;
        string tender_authsign;
    }
    
    mapping (uint => Tend) Organisation;
    string[] public TendAccts;
    
    event TendInfo(
        string tendpkey,
        string org,
        uint tender_dur,
        uint tender_amt
    );
    
    uint nextTend = 0;
    uint tendid;
    
    function getendid() view public returns (uint) {
        return tendid;
    }
    
    function setTend(string _address, string _org, uint _amt, uint _dur) public {
        var inst = Organisation[nextTend];
        
        inst.tendpkey = _address;
        inst.org = _org;
        inst.tender_dur = _dur;
        inst.tender_amt = _amt;
        inst.tender_val = _dur * _amt;
        
        TendAccts.push(_address) - 1;
        TendInfo(_address, _org, _dur, _amt);
        tendid = nextTend;
        nextTend++;
    }
    
    function getTend(uint id) view public returns (string, string, uint, uint, string, string) {
        return (Organisation[id].tendpkey, Organisation[id].org,  Organisation[id].tender_dur, Organisation[id].tender_amt, Organisation[id].tender_authkey, Organisation[id].tender_authsign);
    }
    
    function minTender() view public returns (string, string, uint, uint, string, string) {
        if (TendAccts.length > 0) {
            uint j = 0; 
            uint minT = Organisation[0].tender_val;
            for (uint i = 1; i < TendAccts.length; i++) {
                if (Organisation[i].tender_val < minT) {
                    minT = Organisation[i].tender_val;
                    j = i;
                }
            } 
            return (Organisation[j].tendpkey, Organisation[j].org, Organisation[j].tender_amt, Organisation[j].tender_dur, Organisation[j].tender_authkey, Organisation[j].tender_authsign);
        }
        else {
        return ("NULL","NULL",0,0,"NULL","NULL");
        }
    }
}
