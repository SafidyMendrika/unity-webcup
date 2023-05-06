function downloadPDF() {
    const div = document.getElementById("about");

    html2canvas(div, {
        onrendered: function(canvas) {
            const imgData = canvas.toDataURL('image/png');
            const pdf = new jsPDF();
            pdf.addImage(imgData, 'PNG', 0, 0, 1000, 300); // A4 size
            pdf.save('download.pdf');
        }
    });
}
