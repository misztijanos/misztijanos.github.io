<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PdftoDoc</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<header>

		<div class="header-description">
			<img src="images/logo.png" alt="Convert PDF to Word Online">
      <div>
            This free online PDF to DOC converter allows you to 
save a PDF file as an editable document in Microsoft Word DOC format, 
ensuring better quality than many other converters.
      </div>
    	<ol>
        <li>Click the <b>UPLOAD FILES</b> button and select up to 20 PDF files you wish to convert. Wait for the conversion process to finish.</li>
        <li>Download the results either file by file or click the <b>DOWNLOAD ALL</b> button to get them all at once in a ZIP archive.</li>
    	</ol>
		</div>

		<div class="reclama-unu">
			<p>your ad goes here</p>
		</div>
	
	</header>

	<div class="main-content">
    <div class= "buttons-wrapper">
        <button class="upload-button"><img class="upload-icon" src="images/upload-icon.png"></img> Upload Files</button>
        <button class="clear-button"><img class="clear-icon" src="images/clear-icon.png"></img> Clear Queue</button>
    </div>
    
    <div id="carousel-wrapper">
        <div id="carousel-prev-wrapper">
            <div id="carousel-prev" class="disabled ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-button-disabled ui-state-disabled" role="button" title=""><span class="ui-button-icon-primary ui-icon ui-icon-triangle-1-w"></span><span class="ui-button-text"></span></div>
        </div> 
        <div id="container" style="width: 885px; left: 22px;">
            <div id="carousel">
                <ul id="filelist" class="plupload_filelist"></ul>
            <div id="plupload_drop">Drop Your Files Here</div></div>
        </div>
        <div id="carousel-next-wrapper">
            <div id="carousel-next" class="disabled ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-button-disabled ui-state-disabled" role="button" title=""><span class="ui-button-icon-primary ui-icon ui-icon-triangle-1-e"></span><span class="ui-button-text"></span></div>
        </div>
    </div>
		<div class= "buttons-wrapper">
    	<button class="download-button"><img class="download-icon" src="images/download-icon.png"></img> Download All</button>
    </div>

    <div class="ha-wrapper">
        <div class="hl">
        </div>
    </div>

	</div>

</body>
</html>