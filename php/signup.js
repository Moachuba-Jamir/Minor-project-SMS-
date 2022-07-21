
// mapping the values to pg and ug array
   const ug = ['BBA','BCA','B.Com','BCOM Hons','BA','BA.Hons'];
   const pg = ['MBA','MCA','MA','M.Com','Integrated (M.Lib.I.Sc)','M.Lib.I.Sc','B.Lib.I.Sc'];
   let box = document.querySelector(".box");
   let br = document.createElement('br');
   let br1 = document.createElement('br');
   
   
   let ugSelect = document.createElement('select');
   ugSelect.setAttribute("name", "course");
   ugSelect.setAttribute("id", "course");
   ugSelect.setAttribute("required", "");
   
   let pgSelect = document.createElement('select');
   pgSelect.setAttribute("name", "course");
   pgSelect.setAttribute("id", "course");
   pgSelect.setAttribute("required", "");


    document.querySelector('#degree').addEventListener('change', function() {
    let value = this.value;
    console.log("THis is the value" + value);

    if(value === "UnderGraduate"){
    let ugcourse = document.getElementById('ugcourse');
    ugSelect.style.display="block";
    pgSelect.style.display="none"; 

            ug.forEach(el =>{
                let option = document.createElement('option');
                box.appendChild(br);
                box.appendChild(br1);
                option.value = el;
                option.innerHTML = el;
                ugSelect.appendChild(option);
                box.appendChild(ugSelect);
        });

        for(let i=pgSelect.options.length-1; i>=0; --i){
            pgSelect.remove(i);
        }
    }
    
    else if(value === "PostGraduate" ){
        let pgcourse = document.getElementById('pgcourse');
        pgSelect.style.display="block";
        ugSelect.style.display="none";
        pg.forEach(element => {
            box.appendChild(br);
            box.appendChild(br1);
            let option1 = document.createElement('option');
            option1.value = element;
            option1.innerHTML = element;
            pgSelect.appendChild(option1);
            box.appendChild(pgSelect);

        });
        
        for(let i=ugSelect.options.length-1; i>=0; --i){
            ugSelect.remove(i);
        }
    
    }
    console.log('You selected: ', this.value);
  });


