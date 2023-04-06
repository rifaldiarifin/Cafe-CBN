const defaultBtn = document.getElementById("img");
const filename = document.getElementById("fileimg");
const customBtn = document.querySelector("[for = 'img']");
const img = document.querySelector(".imgf-default");
let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

defaultBtn.addEventListener("change", function(){
    const file = this.files[0];
    if(file){
        const reader = new FileReader();
        reader.onload = function(){
            const result = reader.result;
            img.setAttribute("style", "background-image: url(" + result + ")");
        }
        reader.readAsDataURL(file);
    }
    if(this.value){
        let valueStore = this.value.match(regExp);
        filename.textContent = valueStore;
    }
});