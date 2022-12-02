let personal_data_btn = document.getElementById("personal_data_btn");
let other_data_btn = document.getElementById("other_data_btn");
let search = document.getElementById("search");
let AllSearch = document.getElementById("AllSearch");
let personal_data_table = document.getElementById("personal_data_table");
let other_data_table = document.getElementById("other_data_table");

other_data_btn.addEventListener('click', () => {
     AllSearch.classList.remove('display');
     search.classList.add('display');
     other_data_table.classList.remove('display');
     personal_data_table.classList.add('display');

     other_data_btn.style.backgroundColor = "white";
     personal_data_btn.style.backgroundColor = "gray";
  })

personal_data_btn.addEventListener('click', () => {
    AllSearch.classList.add('display');
    search.classList.remove('display');
    other_data_table.classList.add('display');
    personal_data_table.classList.remove('display');

    other_data_btn.style.backgroundColor = "gray";
    personal_data_btn.style.backgroundColor = "white";
 })
