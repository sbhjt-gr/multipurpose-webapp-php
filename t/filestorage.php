<?php
echo '<!DOCTYPE html>
<html>
<head>
<title>Online File Storage - Store Your Files & Link It Anywhere!</title>
<meta property="og:title" content="Online File Storage - Store Your Files & Link It Anywhere!" />';
include '../head-tags-efrtg1232s84.php';
?>
<!--<script>
$(document).ready(function() { 
	 $('#uploadForm').submit(function(e) {	
		if($('#userFile').val()) {
			e.preventDefault();
			$('#loader-icon').show();
			$(this).ajaxSubmit({ 
				target:   '#targetLayer', 
				beforeSubmit: function() {
				  $("#progress-bar").width('0%');
				},
				uploadProgress: function (event, position, total, percentComplete){	
					$("#progress-bar").width(percentComplete + '%');
					$("#progress-bar").html('<div id="progress-status">' + percentComplete +' %</div>')
				},
				success:function (){
					$('#loader-icon').hide();
				},
				resetForm: true 
			}); 
			return false; 
		}
	});
});
</script>-->
</head>
<body>
<?php
include '../header-564qs59743.php';
?>
<br />
<div class="full_login_body">  
<div class="wrapper">
    <form class="form-signin" id="uploadForm" action="<?php echo "https://e.".$_SERVER['SERVER_NAME']."/upload.php"; ?>" method="post" enctype="multipart/form-data" target="iframefu">
      <h2 class="form-signin-heading">Upload File</h2>
<br />
<br />
      <input type="file" id="userFile" class="emptyu" name="file" placeholder="Drop Your File Here.." required />
<br />
  <input type="text" class="form-control emptyu" name="filetitle" placeholder="File Title" maxlength="45" required />
  <textarea class="form-control" placeholder="Description" name="description" rows="5" maxlength="1600"></textarea>
<br />
      <input name="submit" class="btn btn-lg btn-primary btn-block btniframe" type="submit" onclick="iframeshow()" id="subup" value="Upload File" />   
<br /><div align="center">You agree to our <a href="/service/terms.php"><b>Terms of Service</b></a></div>
    </form>
  </div>
<br />
<br />
</div>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
<button type="button" class="close" aria-hidden="true" onclick="document.getElementById('removetext').value=''" data-dismiss="modal">×</button><h4 class="modal-title">File Upload</h4>
        </div>
        <div class="modal-body">
<center>
<div id="iframenhone">
<iframe name="iframefu" id="iFrame1" frameborder="0" class="iframeuss iframeback" scrolling="no" onload="resizeIframe(this)" width="100%"></iframe></div>
</center>
 </div>
<div id="progress-div"><div id="progress-bar"></div></div>
<div id="targetLayer"></div>
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
(function() { $('#uploadForm > input').keyup(function() { var empty = false; $('#uploadForm > .emptyu').each(function() { if ($(this).val() == '') { empty = true; } }); if (empty) { $('#subup').attr('disabled', 'disabled'); } else { $('#subup').removeAttr('disabled'); 
 } }); })()
  </script>
<?php
include '../footer-73q4637394.php';
echo "</body>
</html>";
?>