
let inputDiv = document.querySelector('.inputRows');
let addMore_btn = document.querySelector('.addBtn');

let dataTypes = ['','int','varchar(255)','timestamp'];
let text = ['Selct data types','Integer','Varchar','Time stamp']

addMore_btn.addEventListener("click",()=>{
    let input = document.createElement('input');
    input.setAttribute('name','columnName[]')
    inputDiv.append(input);

    let select = document.createElement('select');
    select.setAttribute('required', '')
    select.setAttribute("name", "datatypes[]")
    inputDiv.appendChild(select)

    for(let i=0;i<dataTypes.length;i++){
        let option = document.createElement('option');
        option.value = dataTypes[i];
        option.text = text[i];
        select.appendChild(option);
    }
})