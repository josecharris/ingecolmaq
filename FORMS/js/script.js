const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");
accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {    
    // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
    
    // const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
    // if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
    //   currentlyActiveAccordionItemHeader.classList.toggle("active");
    //   currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
    // }

    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    }
    else {
      accordionItemBody.style.maxHeight = 0;
    }    
  });
});

let agregar_fecha_hora = ()=>{
  var d = new Date();
  let input_fecha = document.getElementById("fecha");
  let input_hora = document.getElementById("hora");
  let generatefecha = d.getDate() + "/" +  (d.getMonth() + 1) + "/" + d.getFullYear();
  let generatehora = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
  input_fecha.value = generatefecha;
  input_hora.value = generatehora;
};
//AGREGA FECHA Y HORA
agregar_fecha_hora();
let cambio_unitario = (id_select, id_card)=>{
  let select = document.getElementById(id_select);
  let section = document.getElementById(id_card);  
  if (select.value == "default" ) { section.classList.remove("mostrar"); section.classList.add("ocultar"); }
  if (select.value != "default"){  section.classList.remove("ocultar"); section.classList.add("mostrar"); }
};

let cambio_unitario2 = (id_select, id_card)=>{
  let select = document.getElementById(id_select);
  let section = document.getElementById(id_card);  
  if (select.value != "otro" ) { section.classList.remove("mostrar"); section.classList.add("ocultar"); }
  if (select.value == "otro"){  section.classList.remove("ocultar"); section.classList.add("mostrar"); }
};

let cambio_doble = (id_select1, id_select2, id_card)=>{
  let select1 = document.getElementById(id_select1);
  let select2 = document.getElementById(id_select2);
  let section = document.getElementById(id_card);  
  if (select1.value == "default" && select2.value == "default") { section.classList.remove("mostrar"); section.classList.add("ocultar"); }
  if(select1.value != "default"){  section.classList.remove("ocultar"); section.classList.add("mostrar"); }
  if(select2.value != "default"){  section.classList.remove("ocultar");  section.classList.add("mostrar");  }
};

let cambio_triple = (id_select1, id_select2, id_select3, id_card)=>{
  let select1 = document.getElementById(id_select1);
  let select2 = document.getElementById(id_select2);
  let select3 = document.getElementById(id_select3);
  let section = document.getElementById(id_card); 
  if (select1.value == "default" && select2.value == "default" && select3.value == "default") { section.classList.remove("mostrar"); section.classList.add("ocultar"); }
  if(select1.value != "default"){  section.classList.remove("ocultar"); section.classList.add("mostrar"); }
  if(select2.value != "default"){  section.classList.remove("ocultar");  section.classList.add("mostrar");  }
  if(select3.value != "default"){  section.classList.remove("ocultar");  section.classList.add("mostrar");  }
};

let cambio_cuadruple = (id_select1, id_select2, id_select3, id_select4, id_card)=>{
  let select1 = document.getElementById(id_select1);
  let select2 = document.getElementById(id_select2);
  let select3 = document.getElementById(id_select3);
  let select4 = document.getElementById(id_select4);
  let section = document.getElementById(id_card);  
  
  if (select1.value == "default" && select2.value == "default" && select3.value == "default" && select4.value == "default") { 
    section.classList.remove("mostrar"); 
    section.classList.add("ocultar"); 
  }
  if(select1.value != "default"){  section.classList.remove("ocultar"); section.classList.add("mostrar"); }
  if(select2.value != "default"){  section.classList.remove("ocultar");  section.classList.add("mostrar");  }
  if(select3.value != "default"){  section.classList.remove("ocultar"); section.classList.add("mostrar"); }
  if(select4.value != "default"){  section.classList.remove("ocultar");  section.classList.add("mostrar");  }
};

let cambio_quintuple = (id_select1, id_select2, id_select3, id_select4, id_select5, id_card)=>{
  let select1 = document.getElementById(id_select1);
  let select2 = document.getElementById(id_select2);
  let select3 = document.getElementById(id_select3);
  let select4 = document.getElementById(id_select4);
  let select5 = document.getElementById(id_select5);
  let section = document.getElementById(id_card);  
  
  if (select1.value == "default" && select2.value == "default" && select3.value == "default" && select4.value == "default" && select5.value == "default") 
  { 
    section.classList.remove("mostrar"); 
    section.classList.add("ocultar"); 
  }
  if(select1.value != "default"){  section.classList.remove("ocultar"); section.classList.add("mostrar"); }
  if(select2.value != "default"){  section.classList.remove("ocultar");  section.classList.add("mostrar");  }
  if(select3.value != "default"){  section.classList.remove("ocultar"); section.classList.add("mostrar"); }
  if(select4.value != "default"){  section.classList.remove("ocultar");  section.classList.add("mostrar");  }
  if(select5.value != "default"){  section.classList.remove("ocultar"); section.classList.add("mostrar"); }
};