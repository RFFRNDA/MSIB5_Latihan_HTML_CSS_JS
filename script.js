function submitData() {
    const gradeValues = { 
      A: 4, 
      B: 3, 
      C: 2, 
      D: 1, 
      E: 0
    };
    let nama = document.getElementById("nama").value;
    let matkul = document.getElementById("matkul").value;
    let grade = document.getElementById("grade").value;
    let selectedGrade = gradeValues[grade];

    if (grade in gradeValues) {
        const resultTable = document.getElementById("table");

        const newRow = resultTable.insertRow(-1);
        newRow.insertCell(0).innerHTML = nama;
        newRow.insertCell(1).innerHTML = matkul;
        newRow.insertCell(2).innerHTML = grade;
        newRow.insertCell(3).innerHTML = selectedGrade;

        // Make Remove button
        const removeButton = document.createElement('button'); // Bikin button-nya
        const teksRemove = document.createTextNode('Remove'); //Bikin teks untuk button-nya
        removeButton.appendChild(teksRemove); // Gabungin button & teksnya
        removeButton.classList.add('removeBtn'); // Tambahkan class agar bisa di styling
        newRow.insertCell(4).appendChild(removeButton); // taruh button yg dibuat ke row

        // event untuk Remove button
        removeButton.addEventListener('click', function() {
            resultTable.deleteRow(newRow.rowIndex); // delete row sesuai index row nya
        });

        // reset field inputan user agar add data berikutnya mudah
        document.getElementById("nama").value = "";
        document.getElementById("matkul").value = "";
        document.getElementById("grade").value = "";
    }
}