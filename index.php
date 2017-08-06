<?php ?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>Bytecoin [BCN] Paper Wallet Generator</title>
  <meta name="keywords" content="Bytecoin, BCN, paper wallet, generator, paperwallet">
  <meta name="description" content="Generate recoverable Bytecoin [BCN] paper wallet encrypted with long password phrase">
<link rel="stylesheet" type="text/css" href="./assets/style.css"  />



  
	
	<link href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAgCAYAAACcuBHKAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAApdJREFUeNrUVz1PG0EQHSxaO/Q2khskDEWoMFS5lgKB+BAFRfIL4khIpCASbpFAtokURdBQEAkEWKlJc1TgVKFxChoXdk/sH2BmrFtyOzdr7gsnjDQ6nb138/bNm525oW63C//ahv0uHMtms3hZdHwK/ZWw7Ar9O/ldo9Hw++6hp5jA4BSwiL4QcIMEqIhg7EggEEAZL4WIbFccMPeBQGDwEbzQDl7HlPZbdMsEJDEAAOC8y3be/TQTuPCXBCCVSkFuYsIYpd1uw+96PRQjw4IGRAYIwPHJia9t/6zVYL9UgtrNjcQIifyDmA6nBAtxcD+dz/cAL62sSH8XMJZlYqIYJFCr1YJWs6mlazyX09bs7O722HCvc8WyNBAOC2+DgKiencF+uaz9ls5k4OvhoQZmGdng69DeUEx1oCkmFvmqO/8H3l92cMekhS8HBxpDBnun2FeasJ6rL9TNFWNxTViSwnmJ8pxzy8/MwM7e3uN9p9ORKuQxJRyEpxmtr615ArhLND87C+9JB6OjkEEtkB7S6bT2zMeNDUmU4buoVIbk/WxrexuaCMJ0iFGpUoNLRMk3lSmlTTk3Yubb6WmPxVBM8Af5kf0Zy04ovd5zn5ABpZ9kMglLq6uiNlSbVyD+cF34PaK5UbBN1AIxQACkDZm6qB1nWZIG6DBzp4WEKww9WjpsPjmFKVEtfZOTnoOMmc1B0FxYClKipk5LvowacFdO9eJCWn7kmSewXI769Q8/ICSjA2t+bo4zcYWitKTJqggxG6WUGDV0UW+JUkdDNipRZwra+Y/LS6hdX0P1/FwcfPkEHtt4p8ozzHgngXiOQbfvxJ0QTrF7p6veDgKACEIBQZ9yPlyiWqUfgJfxGfjffBAPwh4EGAAnxDiRUAEEvwAAAABJRU5ErkJggg==" rel='shortcut icon' type='image/x-icon' />
	
  
  
</head>
<p id="demo"></p>

<script>

mn_encode(4);

document.getElementById("demo").innerHTML = str.slice(6, 8);</script>
<body>
<div class="page-container">
  <div class="container">
  
    <div class="jumbotron" style="text-align: center; margin: 0px auto 10px auto; padding: 5px 0;">
	
      <h1 style="font-size: 40px">Paper Wallet Generator</h1>
      <p>Generate Bytecoin paperwallet with unique passphrase.</p>
	  
    </div>

	<div>
<p></p>


    <div class="col-lg-12 col-sm-12" role="tabpanel" style="margin-top: 1.2em;">

      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="/#create" aria-controls="create" role="tab" data-toggle="tab" aria-expanded="true">Create</a></li>
        <li role="presentation" class=""><a href="/#restore" aria-controls="restore" role="tab" data-toggle="tab" aria-expanded="false">Restore</a></li>
      </ul>

      <div class="tab-content">

        <div role="tabpanel" class="tab-pane active in" id="create">

          <form class="form-horizontal" role="form" onsubmit="event.stopPropagation(); return false;">

            <div class="form-group has-feedback has-error">
              <label class="control-label col-sm-3" for="passphrase">Enter you Passphrase</label>

              <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Type your passphrase here" name="passphrase" id="passphrase" style="padding-right: 160px;">
                <span class="glyphicon form-control-feedback glyphicon-remove" aria-hidden="true" style="position: absolute; right: 150px;"></span>
                <button class="col-sm-2 btn btn-primary" style="position: absolute; right: 15px; top: 0; border-bottom-left-radius: 0; border-top-left-radius: 0;" data-toggle="modal" data-target="#passphraseGenerateModal">... or Generate
                </button>
              </div>
            </div>

            <div class="progress col-sm-offset-3 col-sm-9" style="padding: 0;">
              <div id="passphrase_security" style="min-width: 40%; width: 5%;" class="progress-bar progress-bar-striped progress-bar-danger" role="progressbar">very weak (less than 10 words)</div>
            </div>

            <div class="form-group has-feedback has-success">
              <label class="control-label col-sm-3" for="passphrase_repeat">Repeat you Passphrase</label>

              <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Repeat your passphrase here" id="passphrase_repeat">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
            </div>

            <div class="form-group">
              <div style="text-align: center;" class="col-sm-offset-2">
                <button class="btn btn-success disabled" id="createWallet">Create Wallet</button>
              </div>
            </div>

          </form>

        </div>

        <div role="tabpanel" class="tab-pane fade" id="restore">

          <form class="form-horizontal" role="form" onsubmit="event.stopPropagation(); return false;">

            <div class="form-group has-feedback">
              <label class="control-label col-sm-3" for="passphrase">Enter you Passphrase</label>

              <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Type your passphrase here" name="passphrase_restore" id="passphrase_restore">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
            </div>

            <div class="form-group">
              <div style="text-align: center;" class="col-sm-offset-3 col-sm-9">
                <button class="btn btn-primary disabled" id="restoreWallet">Restore Wallet</button>
              </div>
            </div>

          </form>
        </div>
      </div>

    </div>
  </div>
</div>

  <div class="modal fade modal-scrollable" id="passphraseGenerateModal" tabindex="-1" role="dialog" aria-labelledby="generateModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title">Generate Passphrase</h4>
        </div>
        <div class="modal-body">
          <p>Move your mouse to add entropy before generating the address.</p>

          <div class="progress">
            <div class="progress-bar progress-bar-stripped active" role="progressbar" aria-valuenow="100" aria-valuemin="100" aria-valuemax="100" style="width: 100%;" id="moves_required_count">100s</div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade modal-scrollable" id="showResultsModal" tabindex="-1" role="dialog" aria-labelledby="generateModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <h2 class="modal-title" align="center">Your wallet is <span id="mode_dependant_action">generated</span>!</h2>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <h4>Address</h4>

              <div class="qrcode" id="qrcode_address"></div>
              <br>


              <div class="panel panel-default">
                <div class="resulting panel-body" id="resulting_address" style="word-wrap: break-word;"></div>
              </div>


              <p class="text-muted"><span class="glyphicon glyphicon-info-sign"></span> This is your wallet's public address. You can give it to anyone to receive money.</p>

            </div>
			<div class="col-md-3">
			  <h4>Tracking key</h4>
			  
			  <div class="qrcode" id="qr_tracking_key"></div>
              <br>
				
			  <div class="panel panel-default">
                <div class="resulting panel-body" id="resulting_view_key" style="word-wrap: break-word;"></div>
              </div>
			  
			  <p class="text-muted"><span class="glyphicon glyphicon-info-sign"></span> Import into Bytecoin Wallet to track incoming transactions. Seeing outgoing transactions and spending funds is NOT awailable.</p>
			  
            </div>			
          <!--/div-->
			
		  <!--div class="row"-->
            <div class="col-md-3">
              <h4 class="text-danger">Passphrase</h4>

              <div class="qrcode" id="qrcode_pass_phrase"></div>
              <br>

              <div class="panel panel-danger">
                <div class="resulting panel-body" id="resulting_passphrase"></div>
              </div>

              <p class="text-muted"><span class="glyphicon glyphicon-info-sign"></span> Use it to restore/regenerate wallet by Paperwallet Generator. <strong>Keep it secret!</strong></p>
            </div>
            <div class="col-md-3">
              <h4 class="text-danger">Private Key</h4>

              <div class="qrcode" id="qrcode_private_key"></div>
              <br>

              <div class="panel panel-danger">
                <div class="resulting panel-body" id="resulting_private_key" style="word-wrap: break-word;"></div>
              </div>
		  
			  <p class="text-muted"><span class="glyphicon glyphicon-info-sign"></span> You can import it into Bytecoin Wallet. <strong>Keep it secret!</strong></p>

			</div>

          </div>
          <h2 style="text-align: center;" class="print-hide text-danger">Please save this data for future use!</h2>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="print_results">Print</button>
        </div>
      </div>
    </div>
  </div>

<footer style="text-align: center; margin-top: 100px;">

<script type="text/javascript" src="./assets/scr.js"></script>
<script type="text/javascript" src="./assets/scr1.js"></script>
<script type="text/javascript" src="./assets/scr2.js"></script>
<script type="text/javascript" src="./assets/scr3.js"></script>
<script type="text/javascript" src="./assets/scr4.js"></script>
<script type="text/javascript" src="./assets/scr5.js"></script>
<script type="text/javascript" src="./assets/scr6.js"></script>
<script type="text/javascript" src="./assets/scr7.js"></script>
<script type="text/javascript" src="./assets/scr8.js"></script>
<script type="text/javascript" src="./assets/scr9.js"></script>
<script type="text/javascript" src="./assets/scr10.js"></script>
<script type="text/javascript" src="./assets/scr11.js"></script>

</footer>



</body></html>
