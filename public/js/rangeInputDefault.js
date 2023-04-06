// const rangeParent = document.querySelectorAll(".range-horizon-select");

// for (let x = 0; x < rangeParent.length; x++) {
//     const slideValue = rangeParent[x].querySelector(".slider-value span");
//     const slideInput = rangeParent[x].querySelector(".slider-field input");

//     slideInput.oninput = (()=>{
//         const arrValue = ["Off", "Slowest", "Slow", "Normal", "Fast", "Fastest"]; 
//         let value = arrValue[slideInput.value];
//         let value3 = slideInput.value;
//         let value2 = 100 / (100 / (16.6 * value3));
//         slideValue.textContent = value;
//         if(value3 == 0){
//             slideValue.style.left = 16.6%;
//         }
//         else if(value3 == 1){
//             slideValue.style.left = 33.2%;
//         }
//         console.log(value2);
//     });
// }