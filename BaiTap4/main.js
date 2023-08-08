document.querySelector(".main_btnAddnew").addEventListener("click", () => {
  document.querySelector(".main_Addnew").classList.toggle("hide");
});

const queryID = (id) => {
  return document.getElementById(id);
};

const table = document.querySelector(".table-container");

queryID("form_Addnew").addEventListener("submit", (e) => {
  const address = queryID("address").value;
  const city = queryID("city").value;
  const postal = queryID("postal").value;
  e.preventDefault();
  if (address == "" || city == "" || postal == "") {
    alert("Vui lòng nhập đầy đủ thông tin");
  } else {
    const idTbody = document.createElement("tbody");
    idTbody.innerHTML = `      <tr>
        <td>
          <i class="fa-solid fa-eye"></i>
          <i class="fa-solid fa-pen-to-square"></i>
          <i onclick="removeList(this)" class="fa-solid fa-circle-xmark"></i>
        </td>
        <td>${address}</td>
        <td>${city}</td>
        <td>${postal}</td>
      </tr>`;
    table.appendChild(idTbody);
  }
});

function removeList(element) {
  const tdBody = element.parentElement.parentElement.parentElement;
  table.removeChild(tdBody);
  console.log(tdBody);
}

// console.log(address);
