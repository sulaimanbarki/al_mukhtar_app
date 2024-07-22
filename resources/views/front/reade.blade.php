<div id="pdf-container"></div>

<script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
<script>
    var pdfUrl = "{{ asset('path/to/pdf/file.pdf') }}";
    var pdfContainer = document.getElementById('pdf-container');

    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';

    pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
        pdf.getPage(1).getTextContent().then(function(textContent) {
            pdfContainer.innerHTML = '';
            pdfContainer.appendChild(pdfViewer(textContent));
        });
    });
</script>
