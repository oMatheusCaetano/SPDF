let filePath = document.getElementById('filePath').value
var viewer = $('#pdf_canvas')
PDFObject.embed(filePath, viewer)     
