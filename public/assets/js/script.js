function previewImage(input) {
    var customFilePreview = document.getElementById("customFilePreview");
    var uploadIcon = document.getElementById("uploadIcon");

    // Sembunyikan ikon upload setelah gambar dipilih
    uploadIcon.style.display = "none";

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            customFilePreview.style.backgroundImage =
                "url('" + e.target.result + "')";
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// function filterByDate() {
//     var inputDate = document.getElementById("SearchDate").value;

//     var rows = document.querySelectorAll("#presensiTable tbody tr");

//     rows.forEach(function (row) {
//         var rowData = row.cells[2].innerText;

//         if (rowData === inputDate) {
//             row.style.display = "";
//         } else {
//             row.style.display = "none";
//         }
//     });
// }
function filterByDate() {
    var inputDate = document.getElementById("SearchDate").value;

    var rows = document.querySelectorAll("#presensiTable tbody tr");

    if (!inputDate) {
        // Jika inputDate tidak diisi, tampilkan semua baris
        rows.forEach(function (row) {
            row.style.display = "";
        });
        return;
    }

    var isDataFound = false;

    rows.forEach(function (row) {
        var rowData = row.cells[2].innerText;

        if (rowData === inputDate) {
            row.style.display = "";
            isDataFound = true;
        } else {
            row.style.display = "none";
        }
    });

    // Jika data tidak ditemukan, tampilkan pesan
    if (!isDataFound) {
        var table = document.getElementById("presensiTable");
        var tbody = table.querySelector("tbody");
        var noDataRow = document.createElement("tr");
        var noDataCell = document.createElement("td");
        noDataCell.setAttribute("colspan", row.cells.length);
        noDataCell.innerText =
            "Data untuk tanggal " + inputDate + " tidak ditemukan";
        noDataRow.appendChild(noDataCell);
        tbody.appendChild(noDataRow);
    }
}

function filterByName() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("Name");
    filter = input.value.toUpperCase();
    table = document.getElementById("userTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
