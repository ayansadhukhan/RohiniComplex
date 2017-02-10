
<script type="text/javascript">
function openWindow(a){
	window.open(a,"_self");
}
</script>
<style>
body {
  font-family: 'Lucida Grande', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  padding: 20px 50px 150px;
  font-size: 13px;

  background: #E3CAA1;
}

nav ul {
  text-align: left;
  display: inline;
  margin: 0;
  padding: 15px 4px 17px 0;
  list-style: none;
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
}
nav ul li {
  font: bold 12px/18px sans-serif;
  display: inline-block;
  margin-right: -4px;
  position: relative;
  padding: 15px 20px;
  background: #fff;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
}
nav ul li:hover {
  background: #555;
  color: #fff;
}
nav ul li ul {
  padding: 0;
  position: absolute;
  top: 48px;
  left: 0;
  width: 150px;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  display: none;
  opacity: 0;
  visibility: hidden;
  -webkit-transiton: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  -ms-transition: opacity 0.2s;
  -o-transition: opacity 0.2s;
  -transition: opacity 0.2s;
}
nav ul li ul li { 
  background: #555; 
  display: block; 
  color: #fff;
  text-shadow: 0 -1px 0 #000;
  
 }
nav ul li ul li:hover { background: #666; }
nav ul li:hover ul {
  display: block;
  opacity: 1;
  visibility: visible;
}
</style>
<nav>
<ul><li>Account Summary</li>
  <li ><a href=<?php $_SERVER['DOCUMENT_ROOT'] ?>"/member/profile.php">Profile</a></li>
  <li ><a href=<?php $_SERVER['DOCUMENT_ROOT'] ?>"/member/asset.php">
Asset</a>
    <!--<ul>
      <li>Web Design</li>
      <li>Web Development</li>
      <li>Illustrations</li>
    </ul> -->
  </li>
  <li ><a href=<?php $_SERVER['DOCUMENT_ROOT'] ?>"/member/paymenthistory.php">Payment History</a></li>
  <li ><a href=<?php $_SERVER['DOCUMENT_ROOT'] ?>"/member/charge.php">Charges</a></li>
    <li><a href=<?php $_SERVER['DOCUMENT_ROOT'] ?>"/member/ledgerjournal.php">Ledger / Journal</a></li>
        <li ><a href=<?php $_SERVER['DOCUMENT_ROOT'] ?>"/member/notice.php">Notice</a></li>
        <li><a href=<?php $_SERVER['DOCUMENT_ROOT'] ?>"/member/transaction/transaction.php">Transaction</a></li>
        <li><a href=<?php $_SERVER['DOCUMENT_ROOT'] ?>"/member/manage/memberlist.php">Manage Members</a></li>
           <li><a href=<?php $_SERVER['DOCUMENT_ROOT'] ?>"/member/admin/admin.php">Administration</a></li>        
</ul></nav>
