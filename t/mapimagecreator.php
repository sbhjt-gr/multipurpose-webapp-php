<?php
echo '<!DOCTYPE html>
<html>
<head>
<title>Map Image Creator - Capture Photos Of Any Location!</title>
<meta property="og:title" content="Map Image Creator - Capture Photos Of Any Location!" />';
include '../head-tags-efrtg1232s84.php';
echo '</head>
<body>';
?>
<?php
include '../header-564qs59743.php';
echo '<br />
<br />';
?>
<form method="post" action="t/mapimage.php" target="iframefu" ng-app="CloudySilver" class="ng-scope">
 <div flex-container="row" flex-gutter="24">
    <div flex-item>
      <div class="card">
        <div class="p+">
          <strong class="fs-headline display-block"><h3><font color="red">Map Image Creator</font></h3></strong>
          <center><span class="fs-subhead tc-black-2 display-block">Enter location in the input box</span></center>
<br />
<div class="p+ pt0">
    <lx-text-field lx-label="Enter Location Here">
        <input type="text" name="location" required />
    </lx-text-field>
    <lx-text-field lx-label="Height">
        <input type="text" name="height" required />
    </lx-text-field>
    <lx-text-field lx-label="Width">
        <input type="text" name="width" required />
    </lx-text-field>
<br />
    <lx-switch ng-model="vm.switches.colors.blue" lx-color="blue" name="maptype" value="satellite">Show Satellite Image</lx-switch>
</div>
          </div>
<center>
        <div class="card__actions">
          <input type="submit" id="submit" class="btn btn--m btn--black btn--flat btniframe" lx-ripple name="submit" value="Generate" />
        </div>
      </div>
    </div></center>
  </div></form>
  <div id="myModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
<button type="button" class="close" aria-hidden="true" onclick="document.getElementById('removetext').value=''" data-dismiss="modal">×</button><h4 class="modal-title">Capturing Image</h4>
        </div>
        <div class="modal-body">
<center>
<div id="iframenhone">
<iframe name="iframefu" id="iFrame1" frameborder="0" class="iframeuss iframeback" scrolling="no" onload="resizeIframe(this)" width="100%"></iframe></div>
</center>
 </div>
        <div class="modal-footer">
<button type="button" class="btn btnwtch btn-primary" onclick="document.getElementById('removetext').value=''" data-dismiss="modal">Hide</button>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function()
  {
    $(".btniframe").click(function()
    {
      $("#myModal").modal('show');
    });
  });
  function iframeshow() {
    var x = document.getElementById("iframenone");
 if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function resizeIframe(obj) {
 obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px'; 
}
</script>
<br />
<?php
include '../footer-73q4637394.php';
echo "</body>
</html>";
?>