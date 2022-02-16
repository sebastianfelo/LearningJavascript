

const update = () =>{
    const text = document.querySelector("#text").value;
    const view = document.getElementById("view");

    console.log(text);

    view.srcdoc = text;
    
}