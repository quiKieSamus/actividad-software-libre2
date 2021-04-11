const filterSearch = (type) => {
    let filterInput = document.getElementById("txtFilter")
    filterValue = filterInput.value.toUpperCase();
    let table = document.getElementById("tableAssist");
    tr = table.getElementsByTagName("tr");

    for(i = 0; i < tr.length; i++){
        td = tr[i].getElementsByTagName("td")[type];
        if(td){
            let txtValue = td.textContent || td.innerText;
            if(txtValue.toUpperCase().indexOf(filterValue)> -1){
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }

}